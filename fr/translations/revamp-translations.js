// Ampersand (&): Should be escaped as &amp; because it starts HTML character references.
// Less-than (<): Should be escaped as &lt; because it starts an HTML tag.
// Greater-than (>): Should be escaped as &gt; because it ends an HTML tag.
// Double quote ("): Should be escaped as &quot; when inside attribute values.
// Single quote/apostrophe ('): Should be escaped as &#39; or &apos; when inside attribute values.
// Backslash (\): Should be escaped as \\ in JavaScript strings to prevent ending the string prematurely.
// Forward slash (/): Should be escaped as \/ in </script> tags to prevent prematurely closing a script.


const translations = {
    'en': {

        /*Menu of pages curtain*/

        '001-introduction': 'Introduction',
        '002-what-are-ecobricks': 'What are Ecobricks?',
        '003-how-to': 'How to Make?',
        '004-why-ecobricks': 'Why Ecobricks?',
        '005-earth-example': 'The Earth Example',
        '006-our-principles': 'Our Earth Principles',
        '007-construction': 'Ecobrick Construction',
        '008-about-us': 'About Us',
        '009-plastic-sequestration': 'Plastic Sequestration',

        /*Search Curtain*/

        '100-search-title': 'Search',
        '101-search-intro': 'Select the languages and indexes you wish to search. To search for ecobricks use our <a style="color:var(--emblem-blue)" href="brikchain.php">brikchain search</a>.',
        '102-search-index1': 'Ecobricks.org pages: ',
        '103-search-index3': 'Ecobrick Dictionary:',
        '104-search-bottom-text': 'Dictionary definitions are shown first',

        '013-modal-header': 'A Low Tech Solution',
        '014-modal-description': 'It\'s pretty simple. An ecobrick is a plastic bottle densely packed with used plastic to create a reusable building block that achieves <b>plastic sequestration</b>. To make one, all you need is a stick and a bottle.',
        '015-back-button': '↩ Back',
        '016-next-button': 'Next ➔',
        '017-reference': 'Definition from <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a> | Go deeper: <a href="what">ecobricks.org/what</a>',
    

        /* Guided Tour Curtain */
    
        '010-modal-header': 'Welcome to Ecobricks.org!',
        '011-modal-description': 'So what is an ecobrick exactly? Take our 45 second, five-slide introduction to ecobricks. We\'ll cover the basics: what ecobricks are, how you can make one, the Earthen example we\'re following and what you can make with ecobricks once they\'re ready.',
        '012-next-button': 'Start ➔',

        'what-are-ecobricks': 'What are ecobricks?',
        'faqs-button': 'FAQ'
    },
    'fr': {

        /*Menu of pages curtain*/


        '001-introduction': 'Introduction',
        '002-what-are-ecobricks': 'Que sont les écobriques?',
        '003-how-to': 'Comment faire?',
        '004-why-ecobricks': 'Pourquoi les écobriques?',
        '005-earth-example': 'L\'exemple Terrestre',
        '006-our-principles': 'Nos principes Terrestres',
        '007-construction': 'Construction d\'éco-briques',
        '008-about-us': 'À propos de nous',
        '009-plastic-sequestration': 'Séquestration du plastique',

        /*Search Curtain*/

        '100-search-title': 'Recherche',
        '101-search-intro': 'Sélectionnez les langues et les index que vous souhaitez rechercher. Pour rechercher des écobricks, utilisez notre <a style="color:var(--emblem-blue)" href="brikchain.php">recherche brikchain</a>.',
        '102-search-index1': 'Pages Ecobricks.org : ',
        '103-search-index3': 'Dictionnaire Ecobrick :',
        '104-search-bottom-text': 'Les définitions du dictionnaire sont affichées en premier',

        /* Guide Tour Curtain */
    

            '010-modal-header': 'Bienvenue!',
            '011-modal-description': 'Alors, qu\'est-ce qu\'un écobrick exactement ? Découvrez-le dans notre introduction de 45 secondes en cinq diapositives sur les écobricks. Nous couvrirons les bases : ce que sont les écobricks, comment vous pouvez en faire un, l\'exemple terrestre que nous suivons et ce que vous pouvez réaliser avec des écobricks une fois qu\'ils sont prêts.',
            '012-next-button': 'Commencer ➔',
            '013-modal-header': 'Une Solution Low-Tech, Non-Capitale',
            '014-modal-description': 'C\'est très simple. Un écobrick est une bouteille en plastique densément remplie de plastique usagé pour créer un bloc de construction réutilisable qui permet la <b>séquestration du plastique</b>. Pour en faire un, tout ce dont vous avez besoin est un bâton et une bouteille.',
            '015-back-button': '↩ Retour',
            '016-next-button': 'Suivant ➔',
            '017-reference': 'Définition tirée de <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Pour approfondir : <a href="what">ecobricks.org/what</a>',


        'what-are-ecobricks': 'Que sont les écobriques?',
        'faqs-button': 'FAQ'
    },
    
    'es': {

        /*Menu of pages curtain*/

        '001-introduction': 'Introducción',
        '002-what-are-ecobricks': '¿Qué son los ecobricks?',
        '003-how-to': '¿Cómo hacer?',
        '004-why-ecobricks': '¿Por qué los ecobricks?',
        '005-earth-example': 'El ejemplo de la Tierra',
        '006-our-principles': 'Nuestros principios Terrestres',
        '007-construction': 'Construcción de ecobricks',
        '008-about-us': 'Acerca de nosotros',
        '009-plastic-sequestration': 'Secuestro de plástico',

        /*Search Curtain*/

        '100-search-title': 'Buscar',
        '101-search-intro': 'Seleccione los idiomas e índices que desea buscar. Para buscar ecobricks, utilice nuestra <a style="color:var(--emblem-blue)" href="brikchain.php">búsqueda brikchain</a>.',
        '102-search-index1': 'Páginas de Ecobricks.org: ',
        '103-search-index3': 'Diccionario de Ecobricks:',
        '104-search-bottom-text': 'Las definiciones del diccionario se muestran primero',

        /* Guide Tour Curtain */
    
        '010-modal-header': '¡Bienvenido a Ecobricks.org!',
        '011-modal-description': 'Entonces, ¿qué es exactamente un ecobrick? Echa un vistazo a nuestra introducción de 45 segundos en cinco diapositivas sobre los ecobricks. Cubriremos lo básico: qué son los ecobricks, cómo puedes hacer uno, el ejemplo Terrestre que seguimos y lo que puedes hacer con los ecobricks una vez que estén listos.',
        '012-next-button': 'Comenzar ➔',
        '013-modal-header': 'Una Solución de Baja Tecnología',
        '014-modal-description': 'Es bastante simple. Un ecobrick es una botella de plástico densamente rellenada con plástico usado para crear un bloque de construcción reutilizable que logra la <b>secuestro de plástico</b>. Para hacer uno, todo lo que necesitas es un palo y una botella.',
        '015-back-button': '↩ Atrás',
        '016-next-button': 'Siguiente ➔',
        '017-reference': 'Definición de <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Para profundizar: <a href="what">ecobricks.org/what</a>',    

        'what-are-ecobricks': '¿Qué son los ecobricks?',
        'faqs-button': 'FAQs'
    },

    'id': {

     /*Menu of pages curtain*/


        '001-introduction': 'Pendahuluan',
        '002-what-are-ecobricks': 'Apa itu Ecobrick?',
        '003-how-to': 'Bagaimana Cara Membuatnya?',
        '004-why-ecobricks': 'Mengapa Ecobrick?',
        '005-earth-example': 'Contoh Bumi',
        '006-our-principles': 'Prinsip Bumi Kami',
        '007-construction': 'Konstruksi Ecobrick',
        '008-about-us': 'Tentang Kami',
        '009-plastic-sequestration': 'Penyimpanan Plastik',

        /*Search Curtain*/

        '100-search-title': 'Pencarian',
        '101-search-intro': 'Pilih bahasa dan indeks yang ingin Anda cari. Untuk mencari ecobricks, gunakan <a style="color:var(--emblem-blue)" href="brikchain.php">pencarian brikchain</a> kami.',
        '102-search-index1': 'Halaman Ecobricks.org: ',
        '103-search-index3': 'Kamus Ecobrick:',
        '104-search-bottom-text': 'Definisi kamus ditampilkan terlebih dahulu',

        /* Guided Tour Curtain */

        '010-modal-header': 'Selamat Datang di Ecobricks.org!',
    '011-modal-description': 'Jadi, apa sebenarnya ecobrick itu? Ikuti pengenalan singkat kami selama 45 detik dengan lima slide tentang ecobrick. Kami akan membahas dasar-dasarnya: apa itu ecobrick, bagaimana cara membuatnya, contoh dari Bumi yang kami ikuti, dan apa yang dapat Anda buat dengan ecobrick setelah siap.',
    '012-next-button': 'Mulai ➔',
    '013-modal-header': 'Solusi Teknologi Rendah',
    '014-modal-description': 'Sangat sederhana. Ecobrick adalah botol plastik yang dipadatkan dengan plastik bekas untuk menciptakan blok bangunan yang dapat digunakan kembali yang mencapai <i>penyimpanan plastik</i>. Untuk membuatnya, yang Anda butuhkan hanyalah tongkat dan botol.',
    '015-back-button': '↩ Kembali',
    '016-next-button': 'Selanjutnya ➔',
    '017-reference': 'Definisi dari <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Pelajari lebih lanjut: <a href="what">ecobricks.org/what</a>',


        'what-are-ecobricks': 'Apa itu ecobricks?',
        'faqs-button': 'FAQ'
    }
};


const noResultsTranslations = {
    'en': '😕 Sorry, no results were found for ',
    'es': '😕 Lo siento, no se encontraron resultados para ',
    'fr': '😕 Désolé, aucun résultat trouvé pour ',
    'id': '😕 Maaf, tidak ada hasil yang ditemukan untuk '
};
