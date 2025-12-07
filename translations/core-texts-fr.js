/*-----------------------------------

FRENCH SNIPPETS FOR ECOBRICKS.ORG


-----------------------------------*/


// Ampersand (&): Should be escaped as &amp; because it starts HTML character references.
// Less-than (<): Should be escaped as &lt; because it starts an HTML tag.
// Greater-than (>): Should be escaped as &gt; because it ends an HTML tag.
// Double quote ("): Should be escaped as &quot; when inside attribute values.
// Single quote/apostrophe ('): Should be escaped as &#39; or &apos; when inside attribute values.
// Backslash (\): Should be escaped as \\ in JavaScript strings to prevent ending the string prematurely.
// Forward slash (/): Should be escaped as \/ in </script> tags to prevent prematurely closing a script.


const fr_Translations = {


    /*Menu of pages*/


    "000a-menu-0-main-item": 'FAQs sur les Écobriques<span class="circle" title="Cette page est traduite à 100% en français" style="color:green !important; font-size:12px;padding-right:5px; ">●</span>',
    "000a-menu-1-trans-text-1": '🏴 faqs.php a été traduit à 100% | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/faqs-fr-translation.js" class="translate-link">traduction ⇗</a> | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/faqs.php" class="translate-link">code ⇗</a>',
    "000b-menu-0-main-item": 'Introduction aux Écobriques<span class="circle" title="Cette page est traduite à 100% en français" style="color:green !important; font-size:12px;padding-right:5px; ">●</span>',
    "00b-menu-1-trans-text-1": '🏴 guidedTour.js a été traduit à 100% | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/core-texts-fr.js" class="translate-link">traduction ⇗</a> | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/guidedTour.js" class="translate-link">code ⇗</a>',


    


    "001-menu-1-main-item": "<b>Les bases de l'écobrique</b><span class=\"toggle-icon\">+</span>",
    "002-menu-1-sub-item-1": '<a href="what.php">Écobriques et normes</a><span class="circle" title="Cette page est traduite à 60%" style="color:yellow ;">●</span>',
    "003-menu-1-trans-text-1": '🇫🇷 what.php a été traduit à 50% | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/what-fr-translation.js" class="translate-link">traduction ⇗</a> | <a href="https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/what.php" class="translate-link">code ⇗</a>',
    "004-menu-1-sub-item-2": '<a href="/cigbricks">Cigbriques</a><span class="circle" title="Cette page est traduite à 0% " style="color:red;">●</span>',
    "005-menu-1-trans-text-2": '🇫🇷 /cigbricks a été traduit à 0% | migration vers le nouveau site git en attente',

    "004-menu-1-sub-item-3": '<a href="/ocean">Ecobricks Océaniques</a><span class="circle" title="Cette page est traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red">●</span>',
    "005-menu-1-trans-text-3": "🏴 /ocean a été traduit à 0% | migration vers le nouveau site git en attente",
    "006-menu-1-sub-item-4": '<a href="plastic.php">La Longue Histoire du Plastique</a><span class="circle" title="Cette page est traduite à 0% et est dans notre format non-git. Migration en cours" style="color:red;  ">●</span>',
    "005-menu-1-trans-text-4": "🏴 /plastic a été traduit à 0% | migration vers le nouveau site git en cours !",


    /*BUILD*/

    "007-menu-2-main-item": "Construction",
    "008-menu-2-sub-item-1": '<a href="build.php">Applications d\'Ecobricks</a><span class="circle" title="Cette page a été traduite à 10%" style="color:yellow;  ">●</span>',
    "009-menu-2-trans-text-1": "🏴 build.php a été traduit à 10% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/build-fr-translation.js\" class=\"translate-link\">traduction ⇗  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/build.php\" class=\"translate-link\">code ⇗</a>",
    
    "010-menu-2-sub-item-2": '<a href="modules.php">Modules Milstein</a><span class="circle" title="Cette page a été traduite à 10" style="color:yellow;  ">●</span>',
    "011-menu-2-trans-text-2": "🏴 modules.php a été traduit à 10% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/modules-fr-translation.js\" class=\"translate-link\">traduction ⇗  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/en/modules.php\" class=\"translate-link\">code ⇗</a>",
    "020-menu-2-sub-item-7": '<a href="/dms">Modules Dieleman</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git.   En attente de migration." style="color:red">●</span>',
    "021-menu-2-trans-text-7": "🏴 /earth-methods a été traduit à 0% | migration vers le nouveau site git en attente",
    "012-menu-2-sub-item-3": '<a href="earth.php">Construction Terrestre</a><span class="circle" title="Cette page a été traduite à 15%" style="color:yellow;  ">●</span>',
    "013-menu-2-trans-text-3": "earth.php a été traduit à 15% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/earth-fr-translation.js\" class=\"translate-link\">aidez à éditer ⇗</a>",

    "022-menu-2-sub-item-8": '<a href="ecojoiners.php">Ecojoiners</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "023-menu-2-trans-text-8": "🇫🇷 ecojoiners.php a été traduit à 100% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/ecojoiners-fr.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/en/ecojoiners.php\" class=\"translate-link\">code ⇗</a>",

    "014-menu-2-sub-item-4": '<a href="/earth-methods">Méthodes de Construction Terrestre</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git.   En attente de migration." style="color:red">●</span>',
    "015-menu-2-trans-text-4": "🏴 /earth-methods a été traduit à 0% | migration vers le nouveau site git en attente",
    "018-menu-2-sub-item-6": '<a href="/openspace">Espaces Ouverts</a><span class="circle" title="Cette page a été traduite à 100% en anglais mais dans notre format non-git.   En attente de migration." style="color:red">●</span>',
    "019-menu-2-trans-text-6": "🏴 /openspace a été traduit à 0% | migration vers le nouveau site git en attente",
    "016-menu-2-sub-item-5": '<a href="/fire">Sécurité Incendie</a><span class="circle" title="Cette page a été traduite à 0% en anglais et est dans notre format non-git.   En attente de migration." style="color:red">●</span>',
    "017-menu-2-trans-text-5": "🏴 /fire a été traduit à 0% | migration vers le nouveau site git en attente",



/*MAKING */


"022-menu-3-main-item": "Fabrication d'écobriques",
    "023-menu-3-sub-item-1": '<a href="how.php">Notre guide en 10 étapes</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "024-menu-3-trans-text-1": "🇫🇷 how.php a été traduit à 100% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/how-fr-translation.js\">traduction ⇗  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/how.php\" class=\"translate-link\">code ⇗</a>",

    "025-menu-3-sub-item-2": '<a href="earthwand.php">Earthwands (Bâtons d\'écobriquage)</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "026-menu-3-trans-text-2": "🏴 earthwand.php a été traduit à 100% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/earthwand-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/earthwand.php\" class=\"translate-link\">code ⇗</a>",
    "027-menu-3-sub-item-3": '<a href="transition.php">Transition Plastique</a><span class="circle" title="Cette page a été traduite à 50%" style="color:yellow;  ">●</span>',
    "028-menu-3-trans-text-3": "🏴 transition.php a été traduit à 50% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/transition-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/transition.php\" class=\"translate-link\">code ⇗</a>",

    "029-menu-4-main-item": "Nos Principes",
    "030-menu-4-sub-item-1": '<a href="principles.php">Principes Terrestre et Regeneratives</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "031-menu-4-trans-text-1": "🇫🇷 principles.php a été traduit à 100% |  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/principles-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/principles.php\" class=\"translate-link\">code ⇗</a>",

    "032-menu-4-sub-item-2": '<a href="sequest.php">Séquestration du plastique</a><span class="circle" title="Cette page a été traduite à 100%" style="color:yellow;  ">●</span>',
    "033-menu-4-trans-text-2": "🇫🇷 sequest.php a été traduit à 10% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/sequest-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/sequest.php\" class=\"translate-link\">code ⇗</a>",
    "034-menu-4-sub-item-3": '<a href="brickable.php">Conception Brikable</a><span class="circle" title="Cette page a été traduite à 10%" style="color:orange;  ">●</span>',
    "035-menu-4-trans-text-3": "🏴 brickable.php a été traduit à 10%  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/brickable-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/brickable.php\" class=\"translate-link\">code ⇗</a>",
    "036-menu-4-sub-item-4": '<a href="spiral.php">Conception en spirale</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "037-menu-4-trans-text-4": "🏴 spiral.php a été traduit à 100%  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/spiral-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/spiral.php\" class=\"translate-link\">code ⇗</a>",
    "038-menu-4-sub-item-5": '<a href="/ayyew">Ayyew</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "039-menu-4-trans-text-5": "🏴 /ayyew a été traduit à 0% | migration vers le nouveau site git en attente",
    "040-menu-4-sub-item-6": '<a href="/mandalic">Collaboration mandalique</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "041-menu-4-trans-text-6": "🏴 /mandalic a été traduit à 0% | migration vers le nouveau site git en attente",


/*GEA*/

"042-menu-5-main-item": "Alliance Globale d'Écobriques",
    "043-menu-5-sub-item-1": '<a href="about.php">À propos de nous</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "044-menu-5-trans-text-1": "🏴 about.php a été traduit à 100%  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/about-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/about.php\" class=\"translate-link\">code ⇗</a>",
    "045-menu-5-sub-item-2": '<a href="/story">Notre Histoire</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "046-menu-5-trans-text-2": "🏴 /story a été traduit à 0% | migration vers le nouveau site git en attente",
    "047-menu-5-sub-item-3": '<a href="/gobrik">Notre Projet GoBrik</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "048-menu-5-trans-text-3": "🏴 /gobrik a été traduit à 0% | migration vers le nouveau site git en attente",
    "051-menu-5-sub-item-5": '<a href="/trainings">Nos Formations</a><span class="circle" title="Cette page a été traduite à 0% mais dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "052-menu-5-trans-text-5": "🏴 /trainings a été traduit à 0% | migration vers le nouveau site git en attente",
    "057-menu-5-sub-item-8": '<a href="open-books.php">Nos Livres Ouverts</a><span class="circle" title="Cette page a été traduite à 20%" style="color:yellow;  ">●</span>',
    "058-menu-5-trans-text-8": "🏴 open-books.php a été traduit à 20%  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/open-books-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/open-books.php\" class=\"translate-link\">code ⇗</a>",
    "065-menu-5-sub-item-12": '<a href="regenreports.php">Nos Rapports de Régénération</a><span class="circle" title="Cette page a été traduite à 10% " style="color:orange;  ">●</span>',
    "066-menu-5-trans-text-12": "🏴 regenreports.php a été traduit à 15%  | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/regenreports-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/regenreports.php\" class=\"translate-link\">code ⇗</a>",
    "067-menu-5-sub-item-13": '<a href="coefficients.php">Nos Coefficients Plastiques</a><span class="circle" title="Cette page a été traduite à 10%" style="color:orange;  ">●</span>',
    "068-menu-5-trans-text-13": "🏴 est à 10% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/coefficients-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/coeffecients.php\" class=\"translate-link\">code ⇗</a>",
    "059-menu-5-sub-item-9": '<a href="movement.php">Le Mouvement</a><span class="circle" title="Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "060-menu-5-trans-text-9": "🏴  /movement est à 0%  et est est dans notre système non-git | en attente de transition",


    /*PLATFORMS*/

    
    "061-menu-1-main-item": "Plateformes & Projets",
    "062-menu-5-sub-item-4": '<a href="/aes">Plastique AES</a><span class="circle" title=" 🏴 Cette page a été traduite à 0% et est dans notre format non-git. En attente de migration." style="color:red; ">●</span>',
    "063-menu-5-trans-text-4": "/aes a été traduit à 0% et est dans notre format non-git. En attente de migration",
    "064-menu-5-sub-item-6": '<a href="brikcoins.php">Brikcoins</a><span class="circle" title="Cette page a été traduite à 10%" style="color:yellow;  ">●</span>',
    "065-menu-5-trans-text-6": "🏴 brikcoins.php a été traduit à 100% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/brikcoins-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/brikcoins.php\" class=\"translate-link\">code ⇗</a>",
    "066-menu-5-sub-item-7": '<a href="brikchain.php">Brikchain</a><span class="circle" title="Cette page a été traduite à 10% en anglais" style="color:yellow;  ">●</span>',
    "067-menu-5-trans-text-7": "🏴 brikchain.php a été traduit à 10% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/brikchain-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/brikchain.php\" class=\"translate-link\">code ⇗</a>",
    "068-menu-5-sub-item-7": '<a href="offsets.php">Compensation Plastique</a><span class="circle" title="Cette page a été traduite à 100%" style="color:green;  ">●</span>',
    "069-menu-5-trans-text-7": "🏴 offsets.php a été traduit à 100% | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/translations/offsetting-fr-translation.js\" class=\"translate-link\">traduction ⇗</a> | <a href=\"https://github.com/gea-ecobricks/ecobricks-org/blob/main/fr/offsets.php\" class=\"translate-link\">code ⇗</a>",












            /*General Texts*/
            '1000-learn-more': 'Apprendre encore plus',
            '1001-what-are-ecobricks': 'Introduction',
            '1002-faqs-button': 'FAQ',
            '1003-reset-preferences': '❌ réinitialiser le site',
            "1004-gea-vision": "Nous envisageons une transition dans nos foyers, nos communautés et nos entreprises, du plastique vers une harmonie toujours plus verte avec les cycles de la Terre.",
  

    
    
    

    
    /*  INTERFACE CURTAINS  */
    
            /*Search Curtain*/
    
            '100-search-title': 'Recherche',
            '101-search-intro': 'Sélectionnez les langues et les index que vous souhaitez rechercher. Pour rechercher des écobriques, utilisez notre <a href="brikchain.php">recherche brikchain</a>.',
            '102-search-index1': 'Pages : ',
            '103-search-index3': 'Dictionnaires :',
            '104-search-bottom-text': 'Les définitions du dictionnaire sont affichées en dernier',
    
            /* Subscribtion Curtain */
    
            "105-subscription-registration": "",
            "106-hide-subscription-registration": "",
            "107-hide-subscription-image-alt": "Masquer l'inscription à la newsletter Earthen",
            "108-subscription-image-alt-desktop": "Inscription à la newsletter Earthen Ecobrick",
            "110-subscription-title": "Abonnez-vous à Earthen",
            "111-subscription-subtitle": "Suivez notre travail régénératif et nos actualités en vous abonnant à notre newsletter Earthen.",
            "112-subscription-email-placeholder": "Votre e-mail...",
            "113-subscription-name-placeholder": "Votre nom...",
            "114-subscription-caption": "Nous envoyons une nouvelle fois par mois ou selon <a href=\"javascript:void(0)\" onclick=\"previewPrivacy()\">notre stricte politique de confidentialité</a>.",
            "115-subscription-do-not-show-again": "Je me suis déjà inscrit ou je ne suis pas intéressé - ne plus afficher",
            "116-privacy-title": "Vos données sont en sécurité",
            "117-privacy-subtitle": "En tant qu'entreprise terrestre à but non lucratif, nous ne participons en principe à aucune publicité tierce, ni ne connectons vos données à des plateformes sociales qui le font. Vos données ne seront ni vendues ni échangées. Nous utilisons fièrement la plateforme open source Ghost.org pour notre newsletter, que nous hébergeons sur nos propres serveurs. Nos newsletters sont envoyées généralement une fois par mois, nous nous engageons à ne pas dépasser plus d'une par semaine.",
            "118-full-privacy-link": "Notre politique complète",
          
            /* Guided Tour Curtain */
    
            '200-tour-1-header-welcome': 'Bienvenue sur Ecobricks.org !',
            '201-tour-1-description': 'Alors, qu\'est-ce qu\'un écobrique exactement ? Découvrez notre introduction en cinq diapositives de 45 secondes sur les écobriques. Nous couvrirons les bases : ce que sont les écobriques, comment en fabriquer un, l\'exemple terrestre que nous suivons et ce que vous pouvez réaliser avec les écobriques une fois prêts.',
            '202-tour-start-button': 'Commencer ➔',
            '203-tour-2-header': 'Une solution low-tech',
            '204-tour-2-description': 'C\'est assez simple. Un écobrique est une bouteille en plastique densément remplie de plastique utilisé pour créer un bloc de construction réutilisable qui permet la <b>séquestration du plastique</b>. Pour en fabriquer un, tout ce dont vous avez besoin est un bâton et une bouteille.',
            '205-tour-back-button': '↩ Retour',
            '206-tour-next-button': 'Suivant ➔',
            '207-tour-2-reference': 'Définition tirée de <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a> | Pour approfondir : <a href="what">ecobricks.org/what</a>',
            '208-tour-3-header': 'La séquestration du plastique ?',
            '209-tour-3-description': 'Les écobriques suivent l\'exemple de la Terre. Au cours des derniers milliards d\'années, la Terre a progressivement capturé le carbone libre pour le concentrer et le séquestrer sous la terre, permettant ainsi à la vie de prospérer. Nous faisons de même avec notre plastique libre (qui est en fait fabriqué à partir de ce carbone ancien !) en l\'emballant et en le séquestrant dans un écobrique.',
            '210-reference-tour-3-description': 'L\'histoire longue du plastique : <a href="/plastic/">ecobricks.org/plastic</a>',
            '211-tour-4-header': 'Plus qu\'éco',
            '212-tour-4-description': 'Les écobriques font plus que simplement empêcher le plastique de polluer la biosphère. L\'écobriqueing empêche également le plastique d\'être traité industriellement - ce qui crée souvent plus de problèmes qu\'il n\'en résout. Le meilleur de tout, les écobriques peuvent être utilisés localement pour construire toutes sortes de belles choses vertes !',
            '213-tour-4-reference': 'Pourquoi nous faisons des écobriques : <a href="build">ecobricks.org/why</a>',
            '214-tour-5-header': 'Construire vert et grandiose',
            '215-tour-5-description': 'Les écobriques sont utilisés de toutes sortes de manières par la communauté mondiale. Aux Philippines, nous construisons des parcs de jeux en forêt alimentaire avec eux. Au Royaume-Uni, nous construisons des maisons rondes en terre. En Indonésie, nous fabriquons des meubles modulaires pour les maisons et les cafés. Assurez-vous de consulter les sections de construction de notre site pour des idées.',
            '216-tour-5-reference': 'Notre page sur les méthodes de construction : <a href="build">ecobricks.org/build</a>',
            '217-tour-6-header': 'Des questions ?',
            '218-tour-6-description': 'Nous sommes là pour aider ! L\'Alliance Globale des Ecobricks est une entreprise de la Terre qui fait avancer le mouvement de transition plastique en maintenant la philosophie et la technologie du mouvement. Nous ne sommes pas là pour le profit. Nous ne sommes pas non plus sponsorisés par des gouvernements ou des entreprises. Nous le faisons pour les gens et la planète.',
            '219-tour-done-button': '✓ Terminé',
            '220-tour-6-reference': 'En savoir plus sur nous <a href="/about">ecobricks.org/about</a>',    
    
    
            
            /* FOOTER TEXTS*/

            
                "400-visionscape-description": "Nous envisageons une grande transition verte passant des méthodes polluantes à des méthodes enrichissantes. Et cela commence avec notre plastique.",
                "401-wikipedia-description": "<img src=\"../icons/wikipedia.svg\" style=\"width:100%\" alt=\"Un article de Wikipedia approfondi sur l'histoire, le concept et la méthodologie de l'écobrique.\" title=\"Un article de Wikipedia approfondi sur l'histoire, le concept et la méthodologie de l'écobrique.\">",
                "402-gobrik description": "<img src=\"../icons/gobrik-icon-white.svg\" style=\"width:100%\" alt=\"Gobrik est une plateforme pour gérer votre écobriquage, vos projets de construction et la transition plastique.\" title=\"Gobrik est une plateforme pour gérer votre écobriquage, vos projets de construction et la transition plastique.\">",
                "403-medium-description": "<img src=\"../icons/medium.svg\" style=\"width:100%\" alt=\"Suivez notre publication Earthen sur Medium\" title=\"Suivez notre publication Earthen sur Medium\">",
                "404-github description": "<img src=\"../icons/github.svg\" style=\"width:100%\" alt=\"Contribuez à notre dépôt Github Ecobricks.org\" title=\"Contribuez à notre dépôt Github Ecobricks.org\">",
                "405-facebook description": "<img src=\"../icons/facebook.svg\" style=\"width:100%\" alt=\"Suivez notre page Facebook\" title=\"Suivez notre page Facebook\">",
                "406-youtube description": "<img src=\"../icons/youtube.svg\" style=\"width:100%\" alt=\"Abonnez-vous à notre chaîne YouTube Ecobricks\" title=\"Abonnez-vous à notre chaîne YouTube Ecobricks\">",
                "407-instagram description": "<img src=\"../icons/instagram.svg\" style=\"width:100%\" alt=\"Instagram: Ecobricks.Plastic.Transition\" title=\"Description de 407-facebook\">",
              
                "409-wikipedia-text": "Également connu sous le nom de Eco Bricks, Eco-Bricks, Ecolladrillos, briks, briques de bouteilles et ecobriques, l'Alliance Globale Ecobrick et <a href=\"https://en.wikipedia.org/wiki/Ecobricks\" target=\"_blank\" rel=\"noopener\">Wikipedia</a> approuvent l'orthographe 'ecobrick' pour désigner la <a href=\"https://en.wikipedia.org/wiki/Plastic_Sequestration\" target=\"_blank\" rel=\"noopener\">séquestration du plastique</a> dans une bouteille PET pour en faire un bloc de construction réutilisable.",
                "410-gobrik-title": "Notre Application Gobrik",
                "411-gobrik-text": "<a href=\"https://gobrik.com\" target=\"_blank\" rel=\"noopener\">GoBrik</a> est une application web servant le mouvement de transition plastique local et mondial. Elle est maintenue et développée par l'Alliance Globale Ecobrick. Apprenez-en plus sur notre <a href=\"https://ecobricks.org/gobrik\">projet Gobrik</a>.",
                "412-earthen-service-title": "Entreprise Terrestre",
                "413-earthen-service-text": "L'<a href=\"https://ecobricks.org/about\" target=\"_blank\">alliance Globale Ecobrick</a> est une entreprise pour la Terre, à but non lucratif, basée en Indonésie. Nous opérons sous <a href=\"https://ecobricks.org/principles\">des principes régénératifs</a>. Par conséquent, nous n'avons aucun parrainage d'entreprise, de société ou de gouvernement. Nos revenus sont générés en fournissant un <a href=\"aes\">service écologique</a> et des <a href=\"trainings\">expériences éducatives</a>",
                "414-tech-partners-title": "Partenaires Technologiques",
                "415-tech-partners-text": "Notre vision de la transition du plastique et du pétrocapital est une collaboration mondiale ! Nous sommes reconnaissants à nos partenaires qui nous ont donné un accès complet à leurs technologies impressionnantes. Merci à <a href=\"https://www.dewaweb.com/\" target=\"_blank\" rel=\"noopener\">DewaWeb Hosting</a> dont les serveurs hébergent nos sites et à <a href=\"https://svgator.com\" target=\"_blank\" rel=\"noopener\">SVGator</a> dont la plateforme d'animation donne vie à nos graphiques.",
              
                "416-banner-earth-enterprise": "<a href=\"https://ecobricks.org/about\" target=\"_blank\"><img src=\"../webp/banners/forearth-dark-350px.webp\" style=\"width:300px\" alt=\"En savoir plus sur notre structure d'Entreprise Terrestre\" loading=\"lazy\" title=\"En savoir plus sur notre structure d'Entreprise Terrestre\"></a>",
                "417-banner-eco-impacts": "<a href=\"https://ecobricks.org/regenreports\" target=\"_blank\"><img src=\"../webp/banners/762-disclose-dark-350px.webp\" style=\"width:300px\" alt=\"Cliquez pour voir le détail complet et en direct de nos impacts écologiques de 2023 sur GoBrik.com\" loading=\"lazy\" title=\"Cliquez pour voir le détail complet et en direct de nos impacts écologiques de 2023 sur GoBrik.com\"></a>",
                "418-banner-open-books": "<a href=\"https://ecobricks.org/open-books\" target=\"_blank\"><img src=\"../webp/banners/openbooks-dark-350px.webp\" style=\"width:300px\" alt=\"Cliquez pour voir notre suivi financier en direct\" loading=\"lazy\" title=\"Cliquez pour voir notre suivi financier en direct\"></a>",
                "419-conclusion-disclosure": "Nous suivons et divulguons notre impact écologique net-vert. Voir notre <a href=\"https://ecobricks.org/en/regenreports.php\" target=\"_blank\">Rapport de Régénération</a> et notre <a href=\"https://www.gobrik.com/#my-catalyst/enterprise-disclosure/5e1f513586a7fe0015e77628/\" target=\"_blank\">comptabilité d'impact dynamique pour 2025.</a>",
                "420-conclusion-contribute": "Le site Ecobricks.org est codé à la main en HTML, PHP MYSQL, CSS et Javascript open source. Contribuez à améliorer cette page en laissant un rapport de bug ou une demande de push sur Github :",
                "421-conclusion-data": "Tout le contenu éducatif de notre site (photos, vidéos et textes) est mis à disposition pour le partage par l'Alliance Ecobrick sous une <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">Licence Creative Commons Attribution-Partage dans les Mêmes Conditions 4.0 International</a>.<br>Veuillez attribuer toute utilisation à \"The Global Ecobrick Alliance, ecobricks.org\" en utilisant la même licence.",
                "422-conclusion-copyright": "Les logos et emblèmes d'Ecobricks.org, GEA, Earthen, AES et Gobrik sont protégés par le droit d'auteur 2010-2025 par l'Alliance Globale Ecobrick."
            
}
        
      