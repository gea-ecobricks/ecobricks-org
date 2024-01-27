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

 

        /* Guided Tour Curtain */
    
        '010-modal-header': 'Welcome to Ecobricks.org!',
        '011-modal-description': 'So what is an ecobrick exactly? Take our 45 second, five-slide introduction to ecobricks. We\'ll cover the basics: what ecobricks are, how you can make one, the Earthen example we\'re following and what you can make with ecobricks once they\'re ready.',
        '012-next-button': 'Start ➔',
        '013-modal-header': 'A Low Tech Solution',
        '014-modal-description': 'It\'s pretty simple. An ecobrick is a plastic bottle densely packed with used plastic to create a reusable building block that achieves <b>plastic sequestration</b>. To make one, all you need is a stick and a bottle.',
        '015-back-button': '↩ Back',
        '016-next-button': 'Next ➔',
        '017-reference': 'Definition from <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a> | Go deeper: <a href="what">ecobricks.org/what</a>',
    


        /*  INTERFACE CURTAINS  */

        /*Search Curtain*/

        '100-search-title': 'Search',
        '101-search-intro': 'Select the languages and indexes you wish to search. To search for ecobricks use our <a style="color:var(--emblem-blue)" href="brikchain.php">brikchain search</a>.',
        '102-search-index1': 'Pages: ',
        '103-search-index3': 'Glossaries:',
        '104-search-bottom-text': 'Dictionary definitions are shown last',

        /* Subscribtion Curtain */
        '105-subscription-registration': 'Newsletter Registration',
        '106-hide-subscription-registration': 'Hide Newsletter Registration',
        '107-hide-subscription-image-alt': 'Hide Earthen Ecobrick Newsletter registration',
        '108-subscription-image-alt-desktop': 'Earthen Ecobrick Newsletter subscription',
        '109-subscription-image-alt-mobile': 'Earthen Ecobrick Newsletter subscription',
        '110-subscription-title': 'Subscribe to Earthen',
        '111-subscription-subtitle': 'Follow our regenerative innovations by subscribing to our Ecobricks.org Earthen newsletter.',
        '112-subscription-email-placeholder': 'Your e-mail...',
        '113-subscription-name-placeholder': 'Your name...',
        '114-subscription-caption': 'We send out a news once every month or so.',
        '115-subscription-do-not-show-again': 'I\'ve already signed up or I am not interested - don\'t show again',

        /*Feature Content Slides*/

        '200-featured-content-1-title': '2024 Ecobricking Guidelines',
        '201-featured-content-1-subtitle': 'Fully updated 10-Step guide for the new year',
    


    


 
        /*General Texts*/
        '1000-learn-more': 'Learn More',
        '1001-what-are-ecobricks': 'What are ecobricks?',
        '1002-faqs-button': 'FAQ'



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

/*  INTERFACE CURTAINS  */

        /*Search Curtain*/

        '100-search-title': 'Recherche',
        '101-search-intro': 'Sélectionnez les langues et les index que vous souhaitez rechercher. Pour rechercher des écobricks, utilisez notre <a href="brikchain.php">recherche brikchain</a>.',
        '102-search-index1': 'Pages : ',
        '103-search-index3': 'Dictionnaires :',
        '104-search-bottom-text': 'Les définitions du dictionnaire sont affichées en dernier',

        /* Subscribtion Curtain */

        '105-subscription-registration': 'Inscription à la Newsletter',
        '106-hide-subscription-registration': 'Masquer l\'inscription à la Newsletter',
        '107-hide-subscription-image-alt': 'Masquer l\'inscription à la Newsletter d\'Ecobricks en terre',
        '108-subscription-image-alt-desktop': 'Inscription à la Newsletter d\'Ecobricks en terre',
        '109-subscription-image-alt-mobile': 'Inscription à la Newsletter d\'Ecobricks en terre',
        '110-subscription-title': 'Abonnez-vous à Earthen',
        '111-subscription-subtitle': 'Suivez nos innovations régénératives en vous abonnant à notre newsletter Earthen sur Ecobricks.org.',
        '112-subscription-email-placeholder': 'Votre e-mail...',
        '113-subscription-name-placeholder': 'Votre nom...',
        '114-subscription-caption': 'Nous envoyons une newsletter environ une fois par mois.',
        '115-subscription-do-not-show-again': 'Je me suis déjà inscrit ou je ne suis pas intéressé - ne plus afficher',

        /*Feature Content Slides*/

        '200-featured-content-1-title': 'Directives pour l\'Écobriquage 2024',
        '201-featured-content-1-subtitle': 'Guide en 10 étapes entièrement mis à jour pour la nouvelle année',
    
    
        /* Guide Tour Curtain */
    

            '010-modal-header': 'Bienvenue!',
            '011-modal-description': 'Alors, qu\'est-ce qu\'un écobrick exactement ? Découvrez-le dans notre introduction de 45 secondes en cinq diapositives sur les écobricks. Nous couvrirons les bases : ce que sont les écobricks, comment vous pouvez en faire un, l\'exemple terrestre que nous suivons et ce que vous pouvez réaliser avec des écobricks une fois qu\'ils sont prêts.',
            '012-next-button': 'Commencer ➔',
            '013-modal-header': 'Une Solution Low-Tech, Non-Capitale',
            '014-modal-description': 'C\'est très simple. Un écobrick est une bouteille en plastique densément remplie de plastique usagé pour créer un bloc de construction réutilisable qui permet la <b>séquestration du plastique</b>. Pour en faire un, tout ce dont vous avez besoin est un bâton et une bouteille.',
            '015-back-button': '↩ Retour',
            '016-next-button': 'Suivant ➔',
            '017-reference': 'Définition tirée de <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Pour approfondir : <a href="what">ecobricks.org/what</a>',

        /*General Texts*/
        '1000-learn-more': 'Apprendre encore plus',
        '1001-what-are-ecobricks': 'Que sont les écobriques?',
        '1002-faqs-button': 'FAQ'

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

         /* Subscribtion Curtain */

         '105-subscription-registration': 'Inscripción al Boletín',
         '106-hide-subscription-registration': 'Ocultar Inscripción al Boletín',
         '107-hide-subscription-image-alt': 'Ocultar inscripción al boletín de Ecobricks de tierra',
         '108-subscription-image-alt-desktop': 'Inscripción al Boletín de Ecobricks de tierra',
         '109-subscription-image-alt-mobile': 'Inscripción al Boletín de Ecobricks de tierra',
         '110-subscription-title': 'Suscríbete a Earthen',
         '111-subscription-subtitle': 'Sigue nuestras innovaciones regenerativas suscribiéndote a nuestro boletín Earthen de Ecobricks.org.',
         '112-subscription-email-placeholder': 'Tu correo electrónico...',
         '113-subscription-name-placeholder': 'Tu nombre...',
         '114-subscription-caption': 'Enviamos noticias una vez al mes o así.',
         '115-subscription-do-not-show-again': 'Ya me he inscrito o no estoy interesado - no mostrar de nuevo',
     

        /*Search Curtain*/

        '100-search-title': 'Buscar',
        '101-search-intro': 'Seleccione los idiomas e índices que desea buscar. Para buscar ecobricks, utilice nuestra <a style="color:var(--emblem-blue)" href="brikchain.php">búsqueda brikchain</a>.',
        '102-search-index1': 'Páginas: ',
        '103-search-index3': 'Diccionarios:',
        '104-search-bottom-text': 'Las definiciones del diccionario se muestran al final',

       /*Feature Content Slides*/

       '200-featured-content-1-title': 'Guía de Ecobricolaje 2024',
       '201-featured-content-1-subtitle': 'Guía actualizada de 10 pasos para el nuevo año',
   

        /* Guide Tour Curtain */
    
        '010-modal-header': '¡Bienvenido a Ecobricks.org!',
        '011-modal-description': 'Entonces, ¿qué es exactamente un ecobrick? Echa un vistazo a nuestra introducción de 45 segundos en cinco diapositivas sobre los ecobricks. Cubriremos lo básico: qué son los ecobricks, cómo puedes hacer uno, el ejemplo Terrestre que seguimos y lo que puedes hacer con los ecobricks una vez que estén listos.',
        '012-next-button': 'Comenzar ➔',
        '013-modal-header': 'Una Solución de Baja Tecnología',
        '014-modal-description': 'Es bastante simple. Un ecobrick es una botella de plástico densamente rellenada con plástico usado para crear un bloque de construcción reutilizable que logra la <b>secuestro de plástico</b>. Para hacer uno, todo lo que necesitas es un palo y una botella.',
        '015-back-button': '↩ Atrás',
        '016-next-button': 'Siguiente ➔',
        '017-reference': 'Definición de <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Para profundizar: <a href="what">ecobricks.org/what</a>',    


        /*General Texts*/
        '1000-learn-more': 'Aprende más',
        '1001-what-are-ecobricks': '¿Qué son los ecobricks?',
        '1002-faqs-button': 'FAQ'

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

         /* Subscribtion Curtain */

         '105-subscription-registration': 'Registrasi Newsletter',
         '106-hide-subscription-registration': 'Sembunyikan Registrasi Newsletter',
         '107-hide-subscription-image-alt': 'Sembunyikan registrasi newsletter Ecobrick Bumi',
         '108-subscription-image-alt-desktop': 'Registrasi Newsletter Ecobrick Bumi',
         '109-subscription-image-alt-mobile': 'Registrasi Newsletter Ecobrick Bumi',
         '110-subscription-title': 'Berlangganan ke Earthen',
         '111-subscription-subtitle': 'Ikuti inovasi regeneratif kami dengan berlangganan ke newsletter Earthen dari Ecobricks.org.',
         '112-subscription-email-placeholder': 'Email Anda...',
         '113-subscription-name-placeholder': 'Nama Anda...',
         '114-subscription-caption': 'Kami mengirimkan buletin berbahasa Inggris sebulan sekali',
         '115-subscription-do-not-show-again': 'Saya sudah mendaftar atau saya tidak tertarik - jangan tampilkan lagi',
     


        /*Search Curtain*/

        '100-search-title': 'Pencarian',
        '101-search-intro': 'Pilih bahasa dan indeks yang ingin Anda cari. Untuk mencari ecobricks, gunakan <a style="color:var(--emblem-blue)" href="brikchain.php">pencarian brikchain</a> kami.',
        '102-search-index1': 'Halaman: ',
        '103-search-index3': 'Kamus:',
        '104-search-bottom-text': 'Definisi kamus ditampilkan terakhir',

     /*Feature Content Slides*/

     '200-featured-content-1-title': 'Panduan Ecobricking 2024',
     '201-featured-content-1-subtitle': 'Panduan 10 langkah yang sepenuhnya diperbarui untuk tahun baru',
 

        /* Guided Tour Curtain */

        '010-modal-header': 'Selamat Datang di Ecobricks.org!',
    '011-modal-description': 'Jadi, apa sebenarnya ecobrick itu? Ikuti pengenalan singkat kami selama 45 detik dengan lima slide tentang ecobrick. Kami akan membahas dasar-dasarnya: apa itu ecobrick, bagaimana cara membuatnya, contoh dari Bumi yang kami ikuti, dan apa yang dapat Anda buat dengan ecobrick setelah siap.',
    '012-next-button': 'Mulai ➔',
    '013-modal-header': 'Solusi Teknologi Rendah',
    '014-modal-description': 'Sangat sederhana. Ecobrick adalah botol plastik yang dipadatkan dengan plastik bekas untuk menciptakan blok bangunan yang dapat digunakan kembali yang mencapai <i>penyimpanan plastik</i>. Untuk membuatnya, yang Anda butuhkan hanyalah tongkat dan botol.',
    '015-back-button': '↩ Kembali',
    '016-next-button': 'Selanjutnya ➔',
    '017-reference': 'Definisi dari <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Pelajari lebih lanjut: <a href="what">ecobricks.org/what</a>',


        /*General Texts*/
        '1000-learn-more': 'Belajarlah lagi',
        '1001-what-are-ecobricks': 'Apa itu ecobricks?',
        '1002-faqs-button': 'FAQ'
        

    }
};



