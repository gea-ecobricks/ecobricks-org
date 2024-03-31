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


const en_Page_Translations = {

//     '001-splash-title': 'Ecobricks',
//     '002-splash-subtitle': 'A simple, low-tech, non-capital technology to take care of our plastic.',
//     '003-splash-image-alt': '<img src="../svgs/eb-blue-no-clouds.svg" style="width: 95%" alt="The basics of ecobricking">',
//     '004-lead-page-paragraph': 'Ecobricking is a simple way to take personal responsibility for our plastic by keeping it out of industry and out of the biosphere.',
//     '005-first-page-paragraph': 'An ecobrick is a plastic bottle packed solid with clean and dry used plastic. Ecobricks are made manually to a set density to <a href="sequest.php">sequester plastic</a> and create reusable building blocks. In this way ecobricks keep plastic from <a href="/why">degrading into toxins and microplastics</a> and out of high-energy, high-emission industrial processes. But most of all, the hands-on process of ecobricking deepens our awareness of these issues and their regenerative alternatives– what we call <a href="transition.php">plastic transition</a>.',
//     '006-second-page-paragraph': 'Once many ecobricks are available, they can be put to short-term use in <a href="/modules">modular units</a>, <a href="/dms">lego-furniture</a> and <a href="/openspace">open spaces.</a> Later, our ecobrick can also be put to long-term use in <a href="earth.php">earthen gardens and structures</a>. In their making and application, ecobricks embody <a href="principles.php">regenerative principles</a> and an <a href="/ayyew">ayyew vision</a> that is based on following the <a href="/plastic">Earth\'s example</a> of securing loose carbon to green the biosphere.',

//     '007-block-1-header': 'Ecobricking Standards',
//     '008-block-1-subheader': 'The GEA maintains standards for ecobricking that are divided into six categories.',
//     '009-block-1-main-p1': 'The <a href="about.php">Global Ecobrick Alliance (GEA)</a> advocates ecobricking as means of <a href="transition.php">petro-capital transition</a> and <a href="sequest.php">plastic sequestration.</a>',
//     '010-block-1-main-p2': 'The GEA maintains standards for ecobricking that are divided into six categories based on the GEA’s six <a href="sequest.php">criteria for plastic sequestration</a>.  The GEA\'s ecobrick standards ensure that the criteria of plastic sequestration have been met and that our ecobriking is in line with the principles of Earthen Ethics.  This way, we can be sure we are following <a href="/plastic">Earth’s example of green, carbon care.</a>',
//     '011-block-1-img1-alt': '<img src="../svgs/authenticated-brik.svg" width="300" style="width:100%;" alt="An authenticated ecobrick has been validated by three peers" loading="lazy">',
//     '012-block-1-main-p3': 'An ecobrick must fulfil the following criteria:',
//     '013-block-1-img2-alt': '<img src="../svgs/authenticated-brik.svg" width="125" style="width:100%;" alt="An authenticated ecobrick has been validated by three peers" loading="lazy">',

//     '014-block-1-li-1': 'Be created by a not-for-profit, for-Earth motivation.',
// '015-block-1-li-2': 'Manually compact and secure used plastic into a transparent, building block that can be indefinitely reused in the short and long term.',
// '016-block-1-li-3': 'Result in more plastic and CO2 being subtracted from the biosphere than was added by the process of making',
// '017-block-1-li-4': 'Result in building applications that contribute to the maintenance and encouragement of biodiversity',
// '018-block-1-li-5': 'Raise the individual and collective ecological consciousness of those involved in the process.',
// '019-block-1-p1': 'Plastic that has been packed according to these standards and authenticated as such is considered by the GEA as a valuable ecological contribution.  The GEA maintains the <a href="brikcoins.php">Brikcoin blockchain</a> and the <a href="/gobrik">GoBrik platform</a> to enable the authentication of ecobricks according to these standards.  Authentication results in commodification of <a href="/aes">authenticated ecobricked plastic.</a>',
// '020-block-1-p2': 'Currently, the GEA recognizes three types of ecobricks: regular ecobricks, cigbricks, and ocean ecobricks. See below the technical standards for each type of ecobrick.',
// '021-block-1-p3': 'Ecobricking and sequestration standards were developed by ecobrickers around the world and have been refined and are maintained by the GEA.',
// '022-block-1-info-1': 'ℹ️ Learn more about <a href="sequest.php">criteria of plastic sequestration</a>.',
// '023-block-1-info-2': 'ℹ️ Learn more about <a href="/plastic">Earth\'s example</a>.',
// '022-block-2-header': 'Regular Ecobricks',
// '023-block-2-subheader': 'A PET bottle packed with plastic',
// '024-block-2-main-p1': 'Normal ecobricks are made with any size of transparent PET plastic bottle. The bottle and the packed plastic are clean and dry to prevent the growth of bacteria. Typically, ecobrickers use a wood or bamboo stick to manually pack plastic into the plastic bottle. Plastic is cut or ripped into small pieces then packed little by little, alternating between adding the plastic and compacting it, layer by layer. The bottle is rotated with each press to ensure the plastic is evenly compacted throughout the bottle. This helps prevent voids and that the packing reaches the requisite solidity needed for building block applications.',
// '025-block-2-img1-alt': '<img src="../webp/brik-cascade.webp" width="150" alt="A cascade of ecobricks packed with used plastic" style="width:100%;" loading="lazy">',
// '026-block-2-p2': 'Completed ecobricks are packed solid enough that they can bear the weight of a person without deforming and to prohibit easy flammability while maximizing its durability and re-usability.',
// '027-block-2-main-p3': 'To be an ecobrick, the following standards must be met:',
// '028-block-2-img2-alt': '<img src="https://ecobricks.org/svgs/eb-blue.svg" width="120" style="width:100%;" alt="An ecobrick being made" loading="lazy">',
// '029-block-2-li-1': 'The ecobrick is made using a transparent PET bottle',
// '030-block-2-li-2': 'The ecobrick is only packed with used plastics that are clean and dry.',
// '031-block-2-li-3': 'The ecobrick’s density is higher than 0.33g/ml.',
// '032-block-2-li-4': 'The ecobrick must have a density of 0.70g/ml or less',
// '033-block-2-li-5': 'The ecobrick is sealed tight with a screw-down lid.',
// '034-block-2-li-6': 'Care has been taken to prepare the ecobrick as a reusable building block:',
// '035-block-2-li-6-1': 'The label has been removed and ecobricked.',
// '036-block-2-li-6-2': 'A bottom color has been added',
// '037-block-2-li-6-3': 'The weight has been permanently recorded on the outside.',
// '038-block-2-p3': 'Only when these ecobrick standards are met can the plastic inside be considered to be sequestered.',
// '039-block-2-btn': 'ℹ️ How to Make',
// '040-block-2-p4': 'View our 10 Step Guide on Making an Ecobrick.',
// '041-block-3-header': 'Cigbricks',
// '042-block-3-subheader': 'Plastic sequestration for cigarette filers.',
// '043-block-3-main-p1': 'Cigbricks are a class of ecobrick to secure the potentially toxic plastic/acetate of the cigarette filters-- one of the most prevalent and damaging of all plastic pollutants. Cigbricks are made exclusively from the packed acetate filters of cigarette butts once the paper and ash has been fully removed.',
// '044-block-3-img1-alt': '<img src="../svgs/Cigbrick.svg" width="300" style="width:100%;" alt="Cigbricks are for cigarettes" loading="lazy">',
// '045-block-3-main-p2': 'To be a Cigbrick the following standards must be met:',
// '046-block-3-img2-alt': '<img src="../svgs/Cigbrick.svg" width="120" style="width:100%;" alt="Cigbricks are for cigarettes" loading="lazy">',
// '047-block-3-li-1': 'A density higher than 0.29 g/ml',
// '048-block-3-li-2': 'A maximum density of 0.70g/ml',
// '049-block-3-li-3': 'Only packed with acetate cigarette butts – the paper and ash have been removed.',
// '050-block-3-li-4': 'The cigbrick is sealed tight with a screw-down lid.',
// '051-block-3-li-5': 'Care has been taken to prepare the cigbrick as a reusable building block:',
// '052-block-3-li-5-1': 'The label has been removed and ecobricked.',
// '053-block-3-li-5-2': 'A bottom color has been added',
// '054-block-3-li-5-3': 'The weight has been recorded on the outside.',
// '055-block-3-p1': 'Only cigbricks that meet these standards can be authenticated and count as sequestered plastic.',
// '056-block-3-btn': 'ℹ️ Make a Cigbrick',
// '057-block-3-p2': 'Learn more about Cibricks.',

// '058-block-4-header': 'Ocean Ecobricks',
// '059-block-4-subheader': 'Sequestration for plastic collected from beaches, ocean and rivers.',
// '060-block-4-main-p1': 'Ocean Ecobricks are a class of ecobrick designed for plastics found on beaches, rivers, and in the ocean. These plastics tend to be large, chunky, dirty, and wet and are not suited to make a regular ecobrick. The Ocean Ecobrick technique enables these plastics to be easily transformed into a practical, useful, and reusable building block.',
// '061-block-4-img1-alt': '<img src="../webp/oeb-400px.webp" width="300" style="width:100%;" alt="Ocean Ecobricks are for dirty plastic" loading="lazy">',
// '062-block-4-main-p2': 'To be an Ocean Ecobrick the following standards must be met:',
// '063-block-4-img2-alt': '<img src="../webp/oeb-400px.webp" width="120" style="width:100%;" alt="Ocean Ecobricks are for dirty plastic" loading="lazy">',
// '064-block-4-li-1': 'A density higher than 0.25 g/ml',
// '065-block-4-li-2': 'A maximum density of 0.70 g/ml',
// '066-block-4-li-3': 'Are packed with as much plastic as possible',
// '067-block-4-li-4': 'Sealed tight (but not air tight).',
// '068-block-4-li-5': 'Care has been taken to prepare the ocean ecobrick as a reusable building block:',
// '069-block-4-li-5-1': 'The bottle\'s label has been removed and ecobricked.',
// '070-block-4-li-5-2': 'A bottom color has been added',
// '071-block-4-li-5-3': 'The weight has been recorded on the outside.',
// '072-block-4-p1': 'Only ocean ecobricks that meet these standards can be authenticated and count as <a href="sequest.php">sequestered plastic</a>.',
// '073-block-4-btn': 'ℹ️ Make an Ocean Ecobrick',
// '074-block-4-p2': 'Check our page all about Ocean Ecobricks.',
// '075-final-paragraph-header': 'Personal & Community Empowerment',
// '076-final-paragraph-content1': 'Ecobricking is both an individual and collaborative endeavour. It unites across class, continents, and cultures around the shared intention of caring for the local and global biosphere. The personal ecobricking process raises awareness of the consequences of consumption and the dangers of plastic to accelerate <a href="transition.php">plastic transition</a>. The collaborative process gives individuals and communities hands-on experience of <a href="principles.php">regenerative living</a> and points in the direction of other regenerative technologies, such as <a href="earth.php">earth building</a> and permaculture.',
// '077-learn-more-header': 'Learn More',
// '078-learn-more-content': 'The Global Ecobrick Alliance has developed extensive, free, and open-source resources (like this page!) to get you started ecobricking right. Our goal is to empower you and your community with the know-how to make ecobricks and build with them. The pages on this site are the result of years of research, experimentation, and trial and error by plastic transition leaders around the world.',
// '079-list-item1': '<a href="/why">Why Make Ecobricks?</a>',
// '080-list-item2': '<a href="how.php">How to Ecobrick?</a>',
// '081-list-item3': '<a href="spiral.php">Spiral Design</a>',
// '082-list-item4': '<a href="build.php">Building with Ecobricks</a>',
// '083-list-item5': '<a href="/movement">The Movement</a>',
// '084-list-item6': '<a href="/dropoff">Dropping off ecobricks?</a>',
// '085-list-item7': '<a href="/trainings">Ecobrick Trainings</a>',
   
  

    
}
        
      