# Ecobricks-Org Stack Breakdown

## Purpose

**Ecobricks.org** is the official website for the **Global Ecobrick Alliance (GEA)**, a not-for-profit based in Indonesia. Its mission is to:

- Promote **ecobricking** — the practice of packing plastic waste into PET bottles to create reusable building blocks, safely sequestering plastic from the biosphere
- Educate the global community on regenerative, plastic-free living
- Connect thousands of ecobrickers worldwide via its sister platform, **GoBrik**
- Advance the **"Ayyew"** philosophy — an indigenous Indonesian concept of ecological harmony

It is fundamentally an environmental education and community platform, not a commercial site.

---

## Code Structure

The codebase is **vanilla, hand-coded PHP** with no framework (no Laravel, Symfony, etc.). It uses a **procedural, template-based** approach.

```
/ecobricks-org/
├── /en/, /es/, /fr/, /id/     # Language-specific page directories (~48 pages × 5 languages)
├── /includes/                  # Per-page PHP header/meta includes (~70 files)
├── /meta/                      # SEO metadata per language (300+ files)
├── /translations/              # JS localization objects (100+ files)
├── /api/                       # RESTful JSON endpoints (5–6 files)
├── /js/                        # Frontend JavaScript modules
├── /css/                       # Stylesheets (light/dark mode, layout)
├── /photos/, /webp/, /pngs/   # Image assets
├── /menus/, /footers/          # Shared navigation/footer components
├── /page-modules/              # Modular content blocks
├── header-2025.php             # Global page header/nav template
├── footer-2025.php             # Footer template
├── ecobricks_env.php           # Main DB connection (ecobricks.org DB)
├── gobrikconn_env.php          # Secondary DB (GoBrik platform)
└── .cpanel.yml                 # cPanel deployment config
```

**626 PHP files, 202 JS files, 15 CSS files**

---

## Key Technical Details

| Aspect | Detail |
|--------|--------|
| **Language** | PHP (procedural) + vanilla JS + CSS |
| **Database** | Two MySQLi connections — ecobricks.org DB + GoBrik DB |
| **Multilingual** | 5 languages (EN/ES/FR/ID/ZH) via directory structure + JS translation objects |
| **Theming** | Light/dark mode via CSS + JS toggle |
| **APIs** | JSON endpoints for ecobrick transactions, financial data, blockchain records |
| **Deployment** | cPanel via `.cpanel.yml`, copies English pages to language dirs |
| **Security** | Prepared statements, `htmlspecialchars()`, input validation |

---

## PHP Architecture

Each main page follows a consistent bootstrapping pattern:

```php
<?php
$version = '6.7';
$lang = basename(dirname($_SERVER['SCRIPT_NAME']));
$page = 'index';
include '../ecobricks_env.php';
?>
```

- **No ORM** — direct MySQLi queries with prepared statements
- **Component includes** — header, footer, and navigation are required dynamically
- **Two database connections**: `ecobricks_env.php` (main site) and `gobrikconn_env.php` (GoBrik platform, separate server)

---

## Frontend Stack

| Component | Detail |
|-----------|--------|
| **CSS** | `stylesheet-2025.css`, `content-styles-2025.css`, `mode-light.css`, `mode-dark.css` |
| **JS modules** | `2025-landing-scripts.js`, `language-switcher.js`, `site-search.js`, `guided-tour.js`, `core-scripts-2025.js`, `accordion-scripts.js` |
| **Dark mode** | `mode-toggle.mjs.js` (ES6 module) |
| **Animations** | SVGator for animated graphics |

---

## Multilingual System

- **5 languages**: English, Spanish, French, Indonesian, Chinese (ZH partial)
- **Directory structure**: `/en/`, `/es/`, `/fr/`, `/id/` each contain the full set of ~48 pages
- **PHP metadata**: `/meta/index-en.php`, `/meta/index-es.php`, etc. for per-language SEO
- **JS translations**: `/translations/404-en.js`, etc. — JavaScript objects keyed by `data-lang-id` HTML attributes
- **Deployment**: `.cpanel.yml` copies English source pages into language directories on deploy

---

## API Endpoints (`/api/`)

| File | Purpose |
|------|---------|
| `fetch_brik_transactions.php` | DataTables-compatible blockchain transaction feed (paginated, sortable, searchable) |
| `fetch_ecobrick_details.php` | Individual ecobrick data |
| `fetch_cash_trans.php` | Cash transaction queries |
| `fetch_expenses_trans.php` | Expense tracking |
| `fetch_revenues_trans.php` | Revenue tracking |

All endpoints return **JSON** and use MySQLi prepared statements.

---

## Key Database Tables

| Table / View | Purpose |
|--------------|---------|
| `tb_ecobricks` | Individual ecobrick records |
| `tb_projects` | Community building projects |
| `tb_trainings` | Training events |
| `tb_brk_transaction` | Brikcoin blockchain transactions |
| `vw_gallery_feed` | Featured ecobrick gallery view |
| `vw_detail_sums_by_year_idr` | Aggregated financial data |

---

## Notable Features

- **Brikcoin Blockchain** — a manual blockchain system to track authenticated ecobricks (AES)
- **Open Books** — fully transparent financial accounting (revenue, expenses, carbon tracking)
- **Regenerative Reports** — ecological impact metrics
- **Live GoBrik Feeds** — gallery of logged ecobricks, community projects, training events
- **GD Library image processing** — server-side thumbnail generation for project/training photos (JPEG, PNG, WebP)
- **Guided tours** — interactive onboarding for new visitors
- **Earthen.io RSS integration** — fetches regenerative content dynamically via `file_get_contents`/cURL
- **PWA support** — Apple mobile web app meta tags

---

## Key Pages (English, replicated per language)

| Page | Purpose |
|------|---------|
| `index.php` | Homepage — gallery, projects, trainings, sliders |
| `how.php` | 10-step guide to making ecobricks |
| `what.php` | What are ecobricks? |
| `plastic.php` | "The Stellar Story of Plastic" |
| `build.php` | Building with ecobricks |
| `earth.php` / `earth-methods.php` | Earthen building techniques |
| `brikchain.php` | Blockchain explorer for authenticated ecobricks |
| `brikcoins.php` | Brikcoin digital currency system |
| `sequest.php` | Plastic sequestration information |
| `ayyew.php` | Indigenous Ayyew ecological philosophy |
| `principles.php` | GEA regenerative principles |
| `open-books.php` | Transparent financial accounting |
| `regenreports.php` | Ecological impact reporting |
| `training.php` | GEA training programs |
| `project.php` | Community ecobrick projects |
| `404.php` | Custom error page |

---

## Deployment

- **Host**: DewaWeb (cPanel-based)
- **Webroot**: `/home/ecobricks/public_html`
- **Config**: `.cpanel.yml` automates file deployment from this repository
- **Version control**: Git / GitHub (open-source)
