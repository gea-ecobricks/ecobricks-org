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


const fr_Page_Translations = {

    '001-splash-title': 'Les Écobriques',
  '002-splash-subtitle': 'Une technologie simple, low-tech et non-capitaliste pour prendre soin de notre plastique.',
  '003-splash-image-alt': '<img src="../svgs/eb-blue-no-clouds.svg" style="width: 95%" alt="Les bases de l\'écobriquage">',
  '004-lead-page-paragraph': 'L\'écobriquage est un moyen simple de prendre personnellement en charge notre plastique en le gardant hors de l\'industrie et hors de la biosphère.',
  '005-first-page-paragraph': 'Une écobrique est une bouteille en plastique remplie solidement de plastique usagé propre et sec. Les écobriques sont fabriquées manuellement à une densité définie pour <a href="sequest.php">séquestrer le plastique</a> et créer des blocs de construction réutilisables. De cette manière, les écobriques gardent le plastique loin de la <a href="/why">dégradation en toxines et microplastiques</a> et hors des processus industriels à haute énergie et à forte émission. Mais plus que tout, le processus manuel d\'écobriquage approfondit notre conscience de ces problèmes et de leurs alternatives régénératives – ce que nous appelons la <a href="transition.php">transition plastique</a>.',

  
  '006-second-page-paragraph': 'Une fois que de nombreuses écobriques sont disponibles, elles peuvent être utilisées à court terme dans des <a href="/modules">unités modulaires</a>, des <a href="/dms">meubles lego</a> et des <a href="/openspace">espaces ouverts</a>. Plus tard, nos écobriques peuvent également être utilisées à long terme dans des <a href="earth.php">jardins et structures terrestres</a>. Dans leur fabrication et leur application, les écobriques incarnent des <a href="principles.php">principes régénératifs</a> et une <a href="/ayyew">vision ayyew</a> basée sur le suivi de <a href="/plastic">l\'exemple de la Terre</a> de sécuriser le carbone libre pour verdir la biosphère.',
'007-block-1-header': 'Normes d\'écobriquage',
'008-block-1-subheader': 'La GEA maintient des normes pour l\'écobriquage qui sont divisées en six catégories.',
'009-block-1-main-p1': 'La <a href="about.php">Global Ecobrick Alliance (GEA)</a> préconise l\'écobriquage comme moyen de <a href="transition.php">transition pétro-capitaliste</a> et de <a href="sequest.php">séquestration du plastique</a>.',
'010-block-1-main-p2': 'La GEA maintient des normes pour l\'écobriquage qui sont divisées en six catégories basées sur les six <a href="sequest.php">critères de séquestration du plastique</a> de la GEA. Les normes d\'écobrique de la GEA garantissent que les critères de séquestration du plastique ont été respectés et que notre écobriquage est conforme aux principes de l\'éthique terrestre. De cette manière, nous pouvons être sûrs de suivre <a href="/plastic">l\'exemple vert de soin du carbone de la Terre</a>.',
'011-block-1-img1-alt': '<img src="../svgs/authenticated-brik.svg" width="300" style="width:100%;" alt="Une écobrique authentifiée a été validée par trois pairs" loading="lazy">',
'012-block-1-main-p3': 'Une écobrique doit remplir les critères suivants :',
'013-block-1-img2-alt': '<img src="../svgs/authenticated-brik.svg" width="125" style="width:100%;" alt="Une écobrique authentifiée a été validée par trois pairs" loading="lazy">',
'014-block-1-li-1': 'Être créée par une motivation non lucrative, pour la Terre.',
'015-block-1-li-2': 'Compacter et sécuriser manuellement le plastique usagé dans un bloc de construction transparent qui peut être réutilisé indéfiniment à court et à long terme.',
'016-block-1-li-3': 'Résulter en plus de plastique et de CO2 étant soustraits de la biosphère que ce qui a été ajouté par le processus de fabrication',
'017-block-1-li-4': 'Résulter en applications de construction qui contribuent au maintien et à l\'encouragement de la biodiversité',
'018-block-1-li-5': 'Augmenter la conscience écologique individuelle et collective de ceux impliqués dans le processus.',
'019-block-1-p1': 'Le plastique qui a été emballé selon ces normes et authentifié comme tel est considéré par la GEA comme une contribution écologique précieuse. La GEA maintient la <a href="brikcoins.php">blockchain Brikcoin</a> et la plateforme <a href="/gobrik">GoBrik</a> pour permettre l\'authentification des écobriques selon ces normes. L\'authentification résulte en la marchandisation du <a href="/aes">plastique écobriqué authentifié</a>.',
'020-block-1-p2': 'Actuellement, la GEA reconnaît trois types d\'écobriques : les écobriques régulières, les cigbriques et les ocean écobriques. Voir ci-dessous les normes techniques pour chaque type d\'écobrique.',
'021-block-1-p3': 'Les normes d\'écobriquage et de séquestration ont été développées par des écobriqueurs du monde entier et ont été affinées et sont maintenues par la GEA.',
'022-block-1-info-1': 'ℹ️ En savoir plus sur les <a href="sequest.php">critères de séquestration du plastique</a>.',
'023-block-1-info-2': 'ℹ️ En savoir plus sur <a href="/plastic">l\'exemple de la Terre</a>.',
'022-block-2-header': 'Écobriques Régulières',
'023-block-2-subheader': 'Une bouteille PET emballée avec du plastique',
'024-block-2-main-p1': 'Les écobriques normales sont fabriquées avec n\'importe quelle taille de bouteille en plastique PET transparent. La bouteille et le plastique emballé sont propres et secs pour prévenir la croissance bactérienne. Typiquement, les écobriqueurs utilisent un bâton en bois ou en bambou pour emballer manuellement le plastique dans la bouteille. Le plastique est coupé ou déchiré en petits morceaux puis emballé petit à petit, en alternant entre l\'ajout de plastique et son compactage, couche par couche. La bouteille est tournée à chaque pression pour assurer que le plastique est uniformément compacté dans toute la bouteille. Cela aide à prévenir les vides et que l\'emballage atteigne la solidité requise pour les applications de blocs de construction.',
'025-block-2-img1-alt': '<img src="../webp/brik-cascade.webp" width="150" alt="Une cascade d\'écobriques emballées avec du plastique usagé" style="width:100%;" loading="lazy">',
'026-block-2-p2': 'Les écobriques terminées sont emballées suffisamment solides pour pouvoir supporter le poids d\'une personne sans se déformer et pour interdire la flammabilité facile tout en maximisant sa durabilité et sa réutilisabilité.',
'027-block-2-main-p3': 'Pour être une écobrique, les normes suivantes doivent être respectées :',
'028-block-2-img2-alt': '<img src="https://ecobricks.org/svgs/eb-blue.svg" width="120" style="width:100%;" alt="Une écobrique en cours de fabrication" loading="lazy">',
'029-block-2-li-1': 'L\'écobrique est fabriquée en utilisant une bouteille en plastique PET transparente',
'030-block-2-li-2': 'L\'écobrique est uniquement emballée avec des plastiques usagés qui sont propres et secs.',


'031-block-2-li-3': 'La densité de l\'écobrique est supérieure à 0,33 g/ml.',
'032-block-2-li-4': 'L\'écobrique doit avoir une densité de 0,70 g/ml ou moins',
'033-block-2-li-5': 'L\'écobrique est scellée hermétiquement avec un bouchon vissé.',
'034-block-2-li-6': 'Des précautions ont été prises pour préparer l\'écobrique comme un bloc de construction réutilisable :',
'035-block-2-li-6-1': 'L\'étiquette a été retirée et écobriquée.',
'036-block-2-li-6-2': 'Une couleur de fond a été ajoutée',
'037-block-2-li-6-3': 'Le poids a été enregistré de manière permanente à l\'extérieur.',
'038-block-2-p3': 'Seules les écobriques qui répondent à ces normes peuvent être considérées comme ayant séquestré le plastique.',
'039-block-2-btn': 'ℹ️ Comment Faire',
'040-block-2-p4': 'Consultez notre guide en 10 étapes pour fabriquer une écobrique.',
'041-block-3-header': 'Cigbriques',
'042-block-3-subheader': 'Séquestration du plastique pour les filtres de cigarettes.',
'043-block-3-main-p1': 'Les cigbriques sont une catégorie d\'écobrique pour sécuriser le plastique/acétate potentiellement toxique des filtres de cigarettes - l\'un des polluants plastiques les plus répandus et les plus dommageables. Les cigbriques sont fabriquées exclusivement à partir des filtres d\'acétate emballés de mégots de cigarettes une fois que le papier et la cendre ont été entièrement retirés.',
'044-block-3-img1-alt': '<img src="../svgs/Cigbrick.svg" width="300" style="width:100%;" alt="Les cigbriques sont pour les cigarettes" loading="lazy">',
'045-block-3-main-p2': 'Pour être une cigbrique, les normes suivantes doivent être respectées :',
'046-block-3-img2-alt': '<img src="../svgs/Cigbrick.svg" width="120" style="width:100%;" alt="Les cigbriques sont pour les cigarettes" loading="lazy">',
'047-block-3-li-1': 'Une densité supérieure à 0,29 g/ml',
'048-block-3-li-2': 'Une densité maximale de 0,70 g/ml',
'049-block-3-li-3': 'Uniquement emballée avec des filtres d\'acétate de cigarettes – le papier et la cendre ayant été retirés.',
'050-block-3-li-4': 'La cigbrique est scellée hermétiquement avec un couvercle à vis.',
'051-block-3-li-5': 'Des précautions ont été prises pour préparer la cigbrique comme un bloc de construction réutilisable :',
'052-block-3-li-5-1': 'L\'étiquette a été retirée et écobriquée.',
'053-block-3-li-5-2': 'Une couleur de fond a été ajoutée',
'054-block-3-li-5-3': 'Le poids a été enregistré à l\'extérieur.',
'055-block-3-p1': 'Seules les cigbriques qui répondent à ces normes peuvent être authentifiées et considérées comme ayant séquestré le plastique.',
'056-block-3-btn': 'ℹ️ Fabriquer une Cigbrique',
'057-block-3-p2': 'En savoir plus sur les cigbriques.',
'058-block-4-header': 'Ocean Écobriques',
'059-block-4-subheader': 'Séquestration pour le plastique collecté sur les plages, dans l\'océan et les rivières.',
'060-block-4-main-p1': 'Les ocean écobriques sont une catégorie d\'écobrique conçue pour les plastiques trouvés sur les plages, les rivières et dans l\'océan. Ces plastiques ont tendance à être grands, volumineux, sales et mouillés et ne sont pas adaptés pour faire une écobrique régulière. La technique des ocean écobriques permet de transformer facilement ces plastiques en un bloc de construction pratique, utile et réutilisable.',
'061-block-4-img1-alt': '<img src="../webp/oeb-400px.webp" width="300" style="width:100%;" alt="Les ocean écobriques sont pour le plastique sale" loading="lazy">',
'062-block-4-main-p2': 'Pour être une ocean écobrique, les normes suivantes doivent être respectées :',
'063-block-4-img2-alt': '<img src="../webp/oeb-400px.webp" width="120" style="width:100%;" alt="Les ocean écobriques sont pour le plastique sale" loading="lazy">',
'064-block-4-li-1': 'Une densité supérieure à 0,25 g/ml',
'065-block-4-li-2': 'Une densité maximale de 0,70 g/ml',
'066-block-4-li-3': 'Emballée avec autant de plastique que possible',
'067-block-4-li-4': 'Scellée hermétiquement (mais pas de manière étanche à l\'air).',
'068-block-4-li-5': 'Des précautions ont été prises pour préparer l\'ocean écobrique comme un bloc de construction réutilisable :',
'069-block-4-li-5-1': 'L\'étiquette de la bouteille a été retirée et écobriquée.',
'070-block-4-li-5-2': 'Une couleur de fond a été ajoutée',
'071-block-4-li-5-3': 'Le poids a été enregistré à l\'extérieur.',
'072-block-4-p1': 'Seules les ocean écobriques qui répondent à ces normes peuvent être authentifiées et considérées comme ayant séquestré le plastique.',
'073-block-4-btn': 'ℹ️ Fabriquer une Ocean Écobrique',
'074-block-4-p2': 'Consultez notre page tout sur les Ocean Écobriques.',
'075-final-paragraph-header': 'Autonomisation Personnelle & Communautaire',
'076-final-paragraph-content1': 'L\'écobriquage est à la fois une entreprise individuelle et collaborative. Il unit les classes, les continents et les cultures autour de l\'intention partagée de prendre soin de la biosphère locale et mondiale. Le processus d\'écobriquage personnel sensibilise aux conséquences de la consommation et aux dangers du plastique pour accélérer la <a href="transition.php">transition plastique</a>. Le processus collaboratif offre aux individus et aux communautés une expérience pratique de la <a href="principles.php">vie régénérative</a> et oriente vers d\'autres technologies régénératives, telles que la <a href="earth.php">construction terrestre</a> et la permaculture.',
'077-learn-more-header': 'Pour En Savoir Plus',
'078-learn-more-content': 'La Global Ecobrick Alliance a développé des ressources étendues, gratuites et open source (comme cette page !) pour bien commencer l\'écobriquage. Notre objectif est de vous donner, à vous et à votre communauté, le savoir-faire nécessaire pour fabriquer des écobriques et construire avec elles. Les pages de ce site sont le résultat de nombreuses années de recherche, d\'expérimentation et d\'essais et d\'erreurs par les leaders de la transition plastique à travers le monde.',
'079-list-item1': '<a href="/why">Pourquoi fabriquer des écobriques ?</a>',
'080-list-item2': '<a href="how.php">Comment écobriquer ?</a>',
'081-list-item3': '<a href="spiral.php">Conception en Spirale</a>',
'082-list-item4': '<a href="build.php">Construire avec des écobriques</a>',
'083-list-item5': '<a href="/movement">Le Mouvement</a>',
'084-list-item6': '<a href="/dropoff">Déposer des écobriques ?</a>',
'085-list-item7': '<a href="/trainings">Formations sur l\'Écobriquage</a>',


    
}
        
      