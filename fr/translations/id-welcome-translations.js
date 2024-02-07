/*-----------------------------------

INDONESIAN SNIPPETS FOR ECOBRICKS.ORG


-----------------------------------*/


// Ampersand (&): Should be escaped as &amp; because it starts HTML character references.
// Less-than (<): Should be escaped as &lt; because it starts an HTML tag.
// Greater-than (>): Should be escaped as &gt; because it ends an HTML tag.
// Double quote ("): Should be escaped as &quot; when inside attribute values.
// Single quote/apostrophe ('): Should be escaped as &#39; or &apos; when inside attribute values.
// Backslash (\): Should be escaped as \\ in JavaScript strings to prevent ending the string prematurely.
// Forward slash (/): Should be escaped as \/ in </script> tags to prevent prematurely closing a script.


const id_Translations = {
  
   
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
   
            "105-subscription-registration": "",
            "106-hide-subscription-registration": "",
            "107-hide-subscription-image-alt": "Sembunyikan pendaftaran newsletter Earthen",
            "108-subscription-image-alt-desktop": "Pendaftaran newsletter Earthen Ecobrick",
            "110-subscription-title": "Berlangganan ke Earthen",
            "111-subscription-subtitle": "Ikuti pekerjaan regeneratif kami dan berita terbaru dengan berlangganan newsletter Earthen kami.",
            "112-subscription-email-placeholder": "Email Anda...",
            "113-subscription-name-placeholder": "Nama Anda...",
            "114-subscription-caption": "Kami mengirimkan berita sekali setiap bulan atau sesuai dengan <a href=\"javascript:void(0)\" onclick=\"previewPrivacy()\">kebijakan privasi ketat kami</a>.",
            "115-subscription-do-not-show-again": "Saya sudah mendaftar atau saya tidak tertarik - jangan tampilkan lagi",
            "116-privacy-title": "Data Anda Aman",
            "117-privacy-subtitle": "Sebagai usaha bumi non-profit, kami secara prinsip tidak mengambil bagian dalam iklan pihak ketiga, atau menghubungkan data Anda ke platform sosial yang melakukannya. Data Anda tidak akan dijual atau ditukar. Kami dengan bangga menggunakan platform open source Ghost.org untuk newsletter kami, yang kami host di server kami sendiri. Newsletter kami biasanya dikirim sekali sebulan, kami berkomitmen untuk tidak melebihi lebih dari satu per minggu.",
            "118-full-privacy-link": ">Kebijakan Privasi Lengkap",
   
   
           /*Search Curtain*/
   
           '100-search-title': 'Pencarian',
           '101-search-intro': 'Pilih bahasa dan indeks yang ingin Anda cari. Untuk mencari ecobricks, gunakan <a style="color:var(--emblem-blue)" href="brikchain.php">pencarian brikchain</a> kami.',
           '102-search-index1': 'Halaman: ',
           '103-search-index3': 'Kamus:',
           '104-search-bottom-text': 'Definisi kamus ditampilkan terakhir',
   
           /* Guided Tour Curtain */
           // '200-tour-1-header-welcome': 'Selamat Datang di Ecobricks.org!',
           // '201-tour-1-description': 'Jadi, apa sebenarnya ecobrick itu? Ikuti pengenalan kami yang berdurasi 45 detik dengan lima slide tentang ecobrick. Kami akan membahas dasar-dasarnya: apa itu ecobrick, bagaimana cara membuatnya, contoh Bumi yang kami ikuti dan apa yang bisa Anda buat dengan ecobrick setelah siap.',
           // '202-tour-start-button': 'Mulai ➔',
           // '203-tour-2-header': 'Solusi Teknologi Rendah',
           // '204-tour-2-description': 'Sangat sederhana. Ecobrick adalah botol plastik yang dipadatkan dengan plastik bekas untuk menciptakan blok bangunan yang dapat digunakan kembali yang mencapai <b>penyimpanan plastik</b>. Untuk membuatnya, yang Anda butuhkan hanyalah tongkat dan botol.',
           // '205-tour-back-button': '↩ Kembali',
           // '206-tour-next-button': 'Berikutnya ➔',
           // '207-tour-2-reference': 'Definisi dari wikipedia/wiki/ecobricks | Untuk lebih dalam: ecobricks.org/what',
           // '208-tour-3-header': 'Penyimpanan Plastik?',
           // '209-tour-3-description': 'Ecobrick mengikuti contoh Bumi. Selama beberapa miliar tahun terakhir, Bumi telah secara bertahap menangkap karbon longgar untuk mengkonsentrasikannya dan menyimpannya di bawah bumi sehingga kehidupan dapat berkembang. Kami melakukan hal yang sama dengan plastik longgar kami (yang sebenarnya terbuat dari karbon kuno itu!) dengan memadatkannya dan menyimpannya dalam ecobrick.',
           // '210-tour-4-header': 'Lebih dari Eco',
           // '211-tour-4-description': 'Ecobrick melakukan lebih dari sekedar mencegah plastik mencemari biosfer. Membuat ecobrick juga mencegah plastik diproses secara industri - yang sering kali menciptakan lebih banyak masalah daripada yang dipecahkannya. Terbaik dari semuanya, ecobrick dapat dimanfaatkan secara lokal untuk membangun berbagai hal hijau yang hebat!',
           // '212-tour-4-reference': 'Mengapa kami membuat ecobrick: ecobricks.org/why',
           // '213-tour-5-header': 'Bangun Hijau dan Hebat',
           // '214-tour-5-description': 'Ecobrick digunakan dalam berbagai cara oleh komunitas global. Di Filipina, kami membangun taman bermain hutan makanan dengan mereka. Di Inggris, kami membangun rumah bundar bumi. Di Indonesia, kami membuat furnitur modular untuk rumah dan kafe. Pastikan untuk memeriksa bagian bangunan di situs kami untuk ide-ide.',
           // '215-tour-5-reference': 'Halaman kami tentang metode pembangunan: ecobricks.org/build',
           // '216-tour-6-header': 'Ada pertanyaan?',
           // '217-tour-6-description': 'Kami di sini untuk membantu! Global Ecobrick Alliance adalah perusahaan Bumi yang mendukung gerakan transisi plastik global dengan mempertahankan inti filosofis dan teknologi gerakan tersebut. Kami tidak melakukannya untuk keuntungan, atau disponsori oleh pemerintah atau perusahaan manapun. Kami melakukannya untuk manusia dan planet.',
           // '218-tour-6-reference': 'Pelajari lebih lanjut tentang kami: ecobricks.org/about',
           // '219-tour-done-button': '✓ Selesai',
    
   
           /*Feature Content Slides*/
   
           '300-featured-content-1-title': 'Panduan Ecobricking 2024',
           '301-featured-content-1-subtitle': 'Panduan 10 langkah yang sepenuhnya diperbarui untuk tahun baru',
       
           '302-featured-2-heading': 'Jaga Plastik Anda dengan Aman',
           '303-featured-2-subheading': 'Ketika plastik terlepas ke biosfer, itu mengkontaminasi dan meracuni. Ketika plastik diproses oleh industri, itu menghasilkan emisi dan mendorong konsumsi serta produksi plastik lebih banyak lagi. Ecobricking adalah metode sederhana dan non-kapitalis untuk menjaga plastik Anda tetap aman dan terjamin sehingga dapat digunakan untuk tujuan hijau yang baik.',
           '304-featured-2-button': 'Pengantar ke Ecobricking',
           '305-featured-2-rreferences': '<a href="/what">Dasar-dasar</a> | <a href="/why/">Mengapa?</a> | <a href="/transition">Transisi Plastik</a> | <a href="/how">Cara Membuat</a>',
           
           '306-featured-3-heading': 'Aplikasi yang Luar Biasa',
           '307-featured-3-subheading': 'Ecobricks mengubah plastik bermasalah menjadi blok yang dapat digunakan kembali yang dapat dimanfaatkan dalam aplikasi bangunan yang semakin hijau. Mulai dari furnitur, kebun, hingga struktur, aplikasi yang kami rekomendasikan mewujudkan prinsip desain spiral. Plastik tidak harus menjadi masalah - ini adalah awal dari solusi.',
           '308-featured-3-button': 'Bangunan Ecobrick',
           '309-featured-3-references': '<a href="earth.php">Bangunan Bumi</a> | <a href="/earth-methods">Metode Bumi</a> | <a href="/modules">Modul Furnitur</a> | <a href="/spiral">Desain Spiral</a> | <a href="/openspaces">Ruang Terbuka</a> | <a href="/fire">Keamanan Kebakaran</a>',
       
           '310-featured-4-heading': 'Mengikuti Contoh Bumi',
           '311-featured-4-subheading': 'Ecobricking regeneratif muncul sepuluh tahun yang lalu dari tanah orang Igorot di Filipina Utara. Terinspirasi oleh ethos ekologis Ayyew mereka, ecobricking secara mendasar berbeda dari konsep keberlanjutan dan nol-sampah Barat. Sebaliknya, semua metode dan aplikasi kami dirancang dari dasar untuk mengikuti contoh Bumi.',
           '312-featured-4-button': 'Prinsip-prinsip Bumi Kami',
           '313-featured-4-references': '<a href="spiral.php">Desain Spiral</a> | <a href="/ayyew/">Ayyew</a> | <a href="/about">Tentang Kami</a> | <a href="/story/">Sejarah</a>',
           
           
           /*General Texts*/
           '1000-learn-more': 'Belajarlah lagi',
           '1001-what-are-ecobricks': 'Apa itu ecobricks?',
           '1002-faqs-button': 'FAQ',
           '1003-reset-preferences': '❌ Reiniciar preferencias'
           
   
}