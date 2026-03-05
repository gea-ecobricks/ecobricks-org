# CLAUDE.md — Ecobricks.org Contributor Guide

This file provides orientation for Claude Code (and human contributors) working on the Ecobricks.org codebase.

---

## Project Overview

**Ecobricks.org** is the official website for the **Global Ecobrick Alliance (GEA)**, a not-for-profit based in Indonesia. It promotes ecobricking — packing plastic waste into PET bottles to create reusable building blocks — and connects a global community of ecobrickers via its sister platform, **GoBrik**.

The site is **hand-coded, vanilla PHP** with no framework. It is multilingual, community-driven, and emphasizes transparency (open-source code, open financial books).

---

## Directory Structure

```
/ecobricks-org/
├── /en/, /es/, /fr/, /id/      # Language page directories (~48 pages × 5 languages)
├── /includes/                   # Per-page PHP includes (preloads, inline styles, meta + header)
├── /meta/                       # PHP SEO meta tag files — one per page per language
├── /translations/               # JS translation object files — one per page per language
├── /api/                        # JSON API endpoints (MySQLi, DataTables-compatible)
├── /js/                         # Global JavaScript modules
├── /css/                        # Stylesheets (main, content, light/dark mode, footer)
├── /fonts/                      # Mulish and Arvo font files
├── /webp/, /photos/, /pngs/    # Image assets
├── /icons/, /svgs/, /logos/    # Icons and branding graphics
├── /menus/, /footers/           # Shared navigation/footer PHP components
├── /page-modules/               # Modular reusable content blocks
├── header-2025.php              # Global page header/nav template (loaded on every page)
├── footer-2025.php              # Global footer template (loaded on every page)
├── ecobricks_env.php            # Main DB connection — NOT in repo (contains credentials)
├── gobrikconn_env.php           # GoBrik DB connection — NOT in repo (contains credentials)
└── .cpanel.yml                  # cPanel deployment config
```

---

## PHP Architecture

### Page Bootstrapping Pattern

Every page follows this exact structure:

```php
<?php
$lang    = basename(dirname($_SERVER['SCRIPT_NAME'])); // 'en', 'es', 'fr', 'id'
$version = '2.01';   // Increment when CSS/JS changes to bust browser cache
$page    = 'how';    // Must match filename (without .php)
require_once ("../includes/how-inc2.php"); // Loads meta + header
?>
<!DOCTYPE html>
<HTML lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>">
<HEAD>
    <META charset="UTF-8">
    <!-- meta and stylesheets injected by header-2025.php via the include file -->
</HEAD>
<BODY>
    <!-- page content -->
    <?php require_once ("../footer-2025.php"); ?>
</BODY>
</HTML>
```

**Key variables:**
- `$lang` — extracted from the URL path, single source of truth for current language
- `$version` — used on all asset URLs (`?v=<?php echo $version; ?>`) for cache busting; **always increment when editing CSS or JS**
- `$page` — used to load the correct meta and translation files

### Include File Pattern

Each page has a corresponding file in `/includes/`, e.g. `includes/how-inc2.php`. Include files contain:

1. `<link rel="preload">` tags for above-the-fold images
2. Inline `<STYLE>` block with page-specific CSS (splash bar colour, accordion styles, etc.)
3. `<?php require_once ("../meta/{$page}-{$lang}.php"); ?>` — loads SEO meta
4. `<?php require_once ("../header-2025.php"); ?>` — loads global header

### Header & Footer

- `header-2025.php` — loaded on every page via the include file. Contains canonical/hreflang links, PWA meta, all icon sizes, stylesheet links, core JS scripts, font declarations, icon preloading script.
- `footer-2025.php` — loaded at the bottom of every page. Contains vision image, GEA vision statement (translated), social media links, footer content boxes.

Changes to either file affect the **entire site**. Be careful.

### Asset Versioning (Cache Busting)

All stylesheets and scripts use the page-level `$version` variable:

```php
<link rel="stylesheet" href="../css/stylesheet-2025.css?v=<?php echo $version; ?>">
<script src="../js/core-scripts-2025.js?v=<?php echo $version; ?>"></script>
```

**Always increment `$version` in the page file when making CSS or JS changes that affect that page.**

### Database Connections

Two MySQLi connections, defined in files that are **not in the repository** (credentials are sensitive):

- `ecobricks_env.php` — main ecobricks.org database
- `gobrikconn_env.php` — GoBrik platform database (separate server)

**Always use prepared statements. Never concatenate user input into SQL.**

```php
$stmt = $gobrik_conn->prepare("SELECT * FROM tb_ecobricks WHERE id = ?");
$stmt->bind_param("i", $id);   // i=int, s=string, ii=two ints, etc.
$stmt->execute();
$result = $stmt->get_result();
```

API endpoints always wrap in `try/catch` and return JSON, even for errors:

```php
header('Content-Type: application/json');
try {
    // ... query ...
    echo json_encode($data);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
```

---

## Frontend Stack

### JavaScript Files (`/js/`)

| File | Purpose |
|------|---------|
| `core-scripts-2025.js` | Scroll-based header resize, settings overlay, language/login dropdowns |
| `language-switcher.js` | Full translation engine — merges objects, updates DOM, handles RTL |
| `accordion-scripts.js` | Expand/collapse logic for `.advanced-box` components |
| `guided-tour.js` | Interactive onboarding for new visitors (loaded `defer`) |
| `site-search.js` | Full-text site search (loaded `defer`) |
| `2025-landing-scripts.js` | Homepage-specific sliders and interactions |
| `mode-toggle.mjs.js` | ES6 module for light/dark mode toggle |

### CSS Files (`/css/`)

| File | Purpose |
|------|---------|
| `stylesheet-2025.css` | Global layout and typography |
| `content-styles-2025.css` | Content block styles |
| `footer-2025.css` | Footer layout |
| `mode-light.css` | CSS custom property values for light theme |
| `mode-dark.css` | CSS custom property values for dark theme |
| `mode-slider.css` | Mode toggle slider widget |

**Light/dark mode works entirely through CSS custom properties.** `mode-light.css` and `mode-dark.css` redefine the same variables — no selectors change. Light mode is loaded via:
```html
<link rel="stylesheet" href="../css/mode-light.css" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
<link rel="stylesheet" href="../css/mode-dark.css" media="(prefers-color-scheme: dark)">
```

**If you add a new CSS variable, define it in BOTH `mode-light.css` AND `mode-dark.css` or dark mode will break.**

### Key CSS Conventions

- Fonts: `Mulish` (body, headings h1) and `Arvo` (h2), loaded from `/fonts/`
- Responsive breakpoints: `max-width: 700px` (mobile), `min-width: 700px` (desktop), `769px` (tablet boundary)
- Splash bar background colour is set per-page in the include file's inline `<STYLE>` block
- External links always use `target="_blank" rel="noopener"`
- Images always include `loading="lazy"` except above-the-fold ones (which use `<link rel="preload">`)

### Accordion Component

HTML structure:
```html
<div class="advanced-box" role="region" aria-labelledby="advancedBoxLabel-1">
    <div class="advanced-box-header" id="advancedBoxLabel-1" aria-expanded="false">
        <div class="advanced-title" data-lang-id="012-block-1-advanced">Advanced</div>
        <div class="advanced-open-icon">+</div>
    </div>
    <div class="advanced-box-content">
        <p data-lang-id="013-block-1-advanced-paragraph">Content here...</p>
    </div>
</div>
```

Behaviour is handled globally by `accordion-scripts.js` — no per-page JS needed. Each accordion's `id` must be unique on the page.

---

## Multilingual System

This is the most important system to understand. The site supports **5 languages**: English (`en`), Spanish (`es`), French (`fr`), Indonesian (`id`), Chinese (`zh`).

### How It Works

1. Pages live in language subdirectories: `/en/how.php`, `/es/how.php`, etc.
2. The PHP page is **identical across all language directories** (`.cpanel.yml` copies the English file into each language dir on deploy).
3. All text in the HTML is written in English as a fallback.
4. When a user selects a language, `language-switcher.js` loads translation JS files and swaps all text in the DOM using `data-lang-id` attributes.

### The `data-lang-id` Attribute

Every translatable element gets a `data-lang-id` attribute. The switcher reads the attribute, looks up the key in the loaded translation object, and updates the element:

- For `<p>`, `<h1>`, `<div>`, `<li>`, etc. → updates `innerHTML`
- For `<img>` → updates `alt`
- For `<input>` → updates `placeholder`
- For elements with `aria-label` → updates the aria-label attribute

```html
<h1 data-lang-id="001-splash-title">How to Make an Ecobrick</h1>
<p data-lang-id="004-lead-page-paragraph">Ecobricks can be made by anyone...</p>
<img src="../webp/eb-sky.webp" data-lang-id="003-splash-image-alt" alt="How to make an ecobrick">
<input data-lang-id="input-email" placeholder="Enter your email">
```

Values in translation files can be plain text **or** full HTML strings (including `<img>` tags, `<a>` tags, `<strong>`, etc.).

### Translation ID Naming Convention

IDs use a 3-digit numeric prefix followed by a descriptive kebab-case name:

```
NNN-{descriptive-kebab-case-name}
```

Examples:
- `001-splash-title`
- `006-block-1-opener-header`
- `013-block-1-advanced-paragraph`
- `400-visionscape-description`
- `input-email` (no number for form inputs — prefix not required for non-content elements)

Number ranges loosely correspond to page sections (001–099 = intro/splash, 100+ = content blocks, 400+ = lower page sections). Keep numbering sequential within a section.

### Translation File Structure

**Location:** `/translations/{pagename}-{lang}.js`

**Naming:** `how-en.js`, `how-es.js`, `how-fr.js`, `how-id.js`, `how-zh.js`

**Contents:**
```javascript
const en_Page_Translations = {
    '001-splash-title': 'How to Make an Ecobrick',
    '002-splash-subtitle': 'GEA 10 Step Guide',
    '003-splash-image-alt': 'A person packing plastic into a bottle',
    '004-lead-page-paragraph': 'Ecobricks can be made by anyone with a plastic bottle...',
    '006-block-1-opener-header': '1. Save, Segregate, Clean & Dry Plastics',
    // Values may contain HTML:
    '009-block-1-image-caption': '<b>Figure 1:</b> Cleaned and dried plastics ready to pack.'
}
```

**Variable naming convention:** `{lang}_Page_Translations` (e.g. `es_Page_Translations`, `fr_Page_Translations`)

### Core Translations

**Location:** `/translations/core-texts-{lang}.js`

These contain **site-wide UI strings** (navigation labels, button text, modal messages, footer vision text, etc.) that appear on every page. Variable name: `{lang}_Translations`.

### Buwana Terms

**Location:** `/translations/buwana-terms-{lang}.js`

Contains terms, policies, and philosophical glossary. Variable name: `{lang}_buwana_terms`.

### How the Switcher Merges Them

When a language is selected, the switcher merges all three objects:

```javascript
currentTranslations = { ...en_Translations, ...en_Page_Translations, ...en_buwana_terms }
```

### Meta Files (PHP, Not JS)

SEO metadata is **not** handled by the JS translation system — it's in PHP files that are loaded server-side:

**Location:** `/meta/{pagename}-{lang}.php`
**Example:** `/meta/how-en.php`, `/meta/how-es.php`

Each meta file contains: `<title>`, `<meta name="description">`, `<meta name="keywords">`, Open Graph tags (`og:title`, `og:description`, `og:image`, etc.), Twitter card tags, and `<meta name="author">`.

**Meta files must be manually created and translated for each language.** They are not auto-generated.

### Full Workflow: Adding a New Translated Page

1. **Write the page** in `/en/{pagename}.php` with all `data-lang-id` attributes on translatable elements.
2. **Create the include file** `/includes/{pagename}-inc2.php` with preloads, inline styles, meta require, and header require.
3. **Create English meta file** `/meta/{pagename}-en.php` with full SEO tags.
4. **Create English translation file** `/translations/{pagename}-en.js` with `en_Page_Translations = { ... }`.
5. **Create translation files for each language** (`-es.js`, `-fr.js`, `-id.js`, `-zh.js`) with the same keys, translated values.
6. **Create meta files for each language** (`-es.php`, `-fr.php`, `-id.php`, `-zh.php`) with translated SEO content.
7. **Update `.cpanel.yml`** to deploy the English page to each language directory on push.

### Gotcha: Every `data-lang-id` Key Must Exist in All Translation Files

If a key is present in the HTML but missing from a translation file, that element silently falls back to displaying its English HTML content. Always keep all language files in sync — same keys, translated values.

---

## Database Architecture

### Connections

Two separate databases accessed via files **not committed to the repo**:

- `ecobricks_env.php` → `$ecobricks_conn` — ecobricks.org site data
- `gobrikconn_env.php` → `$gobrik_conn` — GoBrik platform data (separate server)

### Key Tables / Views

| Table / View | Database | Purpose |
|---|---|---|
| `tb_ecobricks` | GoBrik | Individual ecobrick records |
| `tb_projects` | GoBrik | Community building projects |
| `tb_trainings` | GoBrik | Training events |
| `tb_brk_transaction` | GoBrik | Brikcoin blockchain transactions |
| `vw_gallery_feed` | GoBrik | Featured ecobrick gallery (top entries) |
| `vw_detail_sums_by_year_idr` | Ecobricks | Aggregated financial data by year |

### API Endpoints (`/api/`)

All endpoints: set `Content-Type: application/json`, use prepared statements, wrap in try/catch, return JSON errors.

| File | Purpose |
|---|---|
| `fetch_brik_transactions.php` | Blockchain transactions (DataTables-compatible: pagination, sort, search) |
| `fetch_ecobrick_details.php` | Single ecobrick record |
| `fetch_cash_trans.php` | Cash transaction records |
| `fetch_expenses_trans.php` | Expense records |
| `fetch_revenues_trans.php` | Revenue records |

### Security Rules (Non-Negotiable)

- **Always use prepared statements** — never interpolate user input into SQL
- **Always bind parameters** with `bind_param()` using correct type flags (`i`, `s`, `d`, `b`)
- **Always sanitize output** with `htmlspecialchars($var, ENT_QUOTES, 'UTF-8')` when echoing user-sourced data into HTML
- **Always `header('Content-Type: application/json')`** before output in API files

---

## Deployment

### How It Works

Deployment is via **cPanel Git Version Control** using `.cpanel.yml`. On push to the repo, cPanel runs the deployment tasks defined in that file.

The core strategy: **English is the master copy.** The `.cpanel.yml` copies English page files into each language directory on the live server using `/usr/bin/install -m 644`:

```yaml
- /usr/bin/install -m 644 en/how.php $WEBROOT/es/how.php
- /usr/bin/install -m 644 en/how.php $WEBROOT/fr/how.php
- /usr/bin/install -m 644 en/how.php $WEBROOT/id/how.php
- /usr/bin/install -m 644 en/how.php $WEBROOT/zh/how.php
```

**When you add a new page, add its deployment lines to `.cpanel.yml`** for all language directories, otherwise the language directories on the live server won't have the file.

**Live server webroot:** `/home/ecobricks/public_html`

### What Is and Is Not Auto-Deployed

- **Auto-deployed:** PHP pages (English master → all language dirs), JS files, CSS files, images, translation files, meta files, includes
- **Not auto-deployed:** Database connection files (`ecobricks_env.php`, `gobrikconn_env.php`) — these exist only on the server

---

## Gotchas & Important Patterns

### `$lang` Is Always from the URL

```php
$lang = basename(dirname($_SERVER['SCRIPT_NAME']));
```

This extracts the language code from the URL path (e.g. `/en/how.php` → `en`). Never hardcode or override this.

### Image Paths Are Relative from Language Subdirectories

Pages live in `/en/`, `/es/`, etc. so the root is one level up. Always use `../` prefix:

```html
<img src="../webp/eb-sky-400px.webp">
<link href="../css/stylesheet-2025.css">
```

### Increment `$version` When Editing CSS or JS

Browser caching is aggressive. If you make a CSS or JS change that should be visible to users, bump `$version` in the affected page file(s). Major changes can also bump the version on `header-2025.php` script/style tags directly.

### Don't Edit Language Directory Files Directly

Files in `/es/`, `/fr/`, `/id/`, `/zh/` are **overwritten on every deploy** from the English master. Always edit `/en/{page}.php` and let deployment propagate the changes.

### CSS Variables Must Be Defined in Both Theme Files

Adding a new `--my-variable` in `mode-light.css` without a matching entry in `mode-dark.css` will cause dark mode users to see `unset` / black / transparent wherever the variable is used.

### `data-lang-id` on `<img>` Updates `alt`, Not `src`

If a translated page needs a **different image** (not just different alt text), you need a different approach — the switcher only swaps `alt` on `<img>` tags. For language-specific images, use conditional logic in the translation value (putting a full `<img>` tag as the value of a `data-lang-id` on a wrapper `<div>`).

### Translation Values Can Contain Full HTML

Translation object values are set via `innerHTML`, so they can include markup:

```javascript
'009-block-caption': '<b>Note:</b> Always clean plastic before packing.',
'010-image-block': '<img src="../webp/example.webp" alt="Example" style="width:80%">',
```

This is intentional — it allows translated content to include inline formatting and images.

### Meta Files Are PHP, Not JS — Translate Them Separately

The `data-lang-id` JS system does **not** handle `<title>`, `<meta>` tags, or Open Graph tags. These are in `/meta/{page}-{lang}.php` files and are server-rendered. They must be translated and maintained manually per language.

### Database Connection Files Are Not in the Repo

If you're setting up a local environment, you'll need to create `ecobricks_env.php` and `gobrikconn_env.php` manually with the appropriate credentials. APIs will fail gracefully (try/catch returns JSON error) if these are absent.

### RTL Language Support

`language-switcher.js` applies `dir="rtl"` to the `#form-submission-box` element for Arabic (`ar`), Hebrew (`he`), Farsi (`fa`), and Urdu (`ur`). These languages are planned but not yet fully deployed. If adding RTL support to a new element, check the switcher's RTL language list.
