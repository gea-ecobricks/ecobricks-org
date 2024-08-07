<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='3.2';?>
<?php $page='welcome';?>
<?php include '../ecobricks_env.php';?>


<!-- 
Ecobricks.org site version 3.0
Developed and made open source by the Global Ecobrick Alliance
See our git hub repository for the full code and to help out:
https://github/globalecobrickalliance/ecobricks.org
-->


<?php require_once ("../includes/welcome-inc.php");?>


<!-- FEATURED HEADLINE CONTENT -->
    <div class="feature-content-1-anchor-box">
    
    <div class="featured-content-1" >
             <div class="featured-content-shaded-box">
                 <div class="featured-content-text">
                     <div class="featured-content-title" data-lang-id="300-featured-content-1-title">Updated Guidelines</div>
                     <div class="featured-content-subtitle" data-lang-id="301-featured-content-1-subtitle">Our ecobricking guide is updated for 2024.</div>

                     <a class="content1-button" href="how.php" data-lang-id="302-featured-content-1-button">New 10-step Guide</a>
                 </div>
             </div>
         </div>
        <!-- <div class="buffer" style="height:90px;width:100%"></div> -->
    </div>



<!-- PROJECT GALLERY -->

    <div class="featured-project-gallery" style="overflow-x:clip;">
        <div class="feed-live">
            <p data-lang-id="403-featured-live-brikchain"><span class="blink">⬤  </span>Live projects feed.  Click to preview.</p>
        </div>
        <div class="gallery-flex-container">
        <?php
    // Updated SQL query to include a WHERE clause and a LIMIT
    $sql = "SELECT * FROM tb_projects WHERE ready_to_show = 1 ORDER BY project_id DESC LIMIT 25;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="gal-project-photo">
                    <div class="photo-box">
                        <img src="' . $row["photo1_tmb"] . '?v=1" alt="' . $row["project_name"] . ' in ' . $row["location_full"] . ' has sequestered ' . $row["est_total_weight"] . ' kg of plastic using ' . $row["briks_used"] . ' ecobricks" onclick="projectPreview(\'' . $row["project_id"] . '\', \'' . $row["project_name"] . '\', \'' . $row["description_short"] . '\', \'' . $row["location_full"] . '\', \'' . $row["briks_used"] . '\', \'' . $row["start_dt"] . '\')" title="' . $row["project_name"] . ' in ' . $row["location_full"] . ' has sequestered ' . $row["est_total_weight"] . ' using ' . $row["briks_used"] . ' ecobricks."> 
                    </div>
                </div>';
        }
    } else {
        echo "No projects available to display.";
    }
?>

            <div class="project-photo-box-end" href="add-project.php"></div>

        </div>
        <div class="feature-content-box">
        <div class="feature-big-header"><h4 data-lang-id="404-featured-live-heading">Ecobricks Applied</h4></div>
            
            <div class="feature-sub-text" data-lang-id="405-featured-live-subheading">Ecobricks projects logged by ecobrickers from around the world.</div>
        </div>
        <a href="add-project.php" class="feature-button" data-lang-id="405b-post-project-button" aria-label="Post your project">➕ Post your project</a>
        <div class="feature-reference-links">Share your ecobrick application</div>
    </div>


    <!--FEATURE BOX ONE: HAPPY DOLPHIN-->

    <div class="featured-content-2">
    
        <div class="feature-content-box">

            <div class="featured-content-img dolphin-pic"></div>
            
            <div class="feature-big-header" data-lang-id="308-featured-2-heading"><h4 data-lang-id="308-featured-2-heading">Keep Plastic Safe</h4></div>
            
            <div class="feature-sub-text" data-lang-id="309-featured-2-subheading">
           Ecobricking is a simple, non-capital methodology to keep your plastic safe and secure so that it can be put to good, green use.</div>
            <button type="button" class="feature-button" data-lang-id="310-featured-2-button" aria-label="A quick intro" onclick="guidedTour()">Quick Intro</button>

            <!-- <div class="feature-reference-links" data-lang-id="311-featured-2-references">
                <h6>
                <a href="what.php">Basics</a> | <a href="transition.php">Plastic Transition</a> | <a href="how.php">How to Make</a></h6>
            </div> -->
            <div class="feature-reference-links">Five slides. 45 seconds.</div>
        </div>
    </div>

<!-- FULL ECOBRICK FLOW GALLERY -->

<div class="featured-content-gallery" style="overflow-x:clip;">
        <div class="feed-live">
            <p data-lang-id="303-featured-live-brikchain"><span class="blink">⬤  </span>Live brikchain feed of authenticated ecobricks.  Click to preview.</p>
        </div>
        <div class="gallery-flex-container">
            <?php
                $sql = "SELECT * FROM vw_gallery_feed ;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="gal-photo">
                                <div class="photo-box">
                                    <img src="' . $row["thumb_url"] . '?v=1" alt="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" title="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" loading="lazy" onclick="ecobrickPreview(\'' . $row["ecobrick_unique_id"] . '\', \'' . $row["weight_in_g"] . '\', \'' . $row["ecobrick_owner"] . '\', \'' . $row["location"] . '\')"/>
                                </div>
                            </div>';
                    }
                } else {
                    echo "Failed to connect to the Brikchain database";
                }
             ?>
            <div class="photo-box-end" href="brikchain.php"></div>
        </div>

        <!-- <div class="gal-photo" style="width: 200px; padding-bottom: 20px; text-align: left; margin-bottom: auto;"><div class="feed-live"><p><span class="blink">⬤ Live Feed:</span>
        50 latest selfie briks = 34kg plastic sequestered / 150kg CO2e / 340 BRK generated</p></div></div> -->
        
        <div class="feature-content-box">
            <div class="feature-big-header" data-lang-id="304-featured-live-heading">Ecobricking.  Live.</div>
            <div class="feature-sub-text" data-lang-id="305-featured-live-subheading">Ecobricks are being made, logged and validated around the world right this moment.</div>

            <a href="brikchain.php" class="feature-button"  data-lang-id="306-featured-live-button" aria-label="view brikchain">⛓️ The Brikchain</a>
            <div class="feature-reference-links"data-lang-id="307-featured-live-links">A feed & archive of authenticated ecobricks</div>
            
        </div>
    </div>






<!-- TOP TEN GALLERY-->

<div class="featured-content-top10s" style="overflow-x:clip;">
    <div class="gallery10-content-block">             
        <div class="flex-container10">
            
            <?php
            $sql = "SELECT * FROM vw_top_10_last_month ;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

            echo '
            <div class="gal-photo10">
            <a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1" loading="lazy" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"></a>';
            echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>By '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>
                
        </div>
    </div>



    <div class="feature-content-box">
    <!-- <a href="sequest.php" class="feature-button" data-lang-id="308-featured-3-button">Brikchain</a> -->
        <div class="feature-big-header" data-lang-id="312-top10s-title">Monthly Top Tens</div>
        <div class="feature-sub-text" data-lang-id="313-top10s-subtitle">Every month thousands of ecobricks are logged by ecobrickers around the world— and peer review by them too!</div>

         <a href="top-tens.php" class="feature-button"  data-lang-id="313-top10s-button" aria-label="monthly rankings">🏆 Monthly Rankings</a>

            <div class="feature-reference-links" data-lang-id="314-top10s-references">The best ecobricks this month</div>
    </div>
    
</div>

    <div class="featured-content-3"  >
        <div class="feature-content-box">
            <div class="featured-content-img ecovillage-pic"></div>
            <div class="feature-big-header" data-lang-id="315-featured-3-heading">Put Plastic to Good Use</div>
            <div class="feature-sub-text" data-lang-id="316-featured-3-subheading">
            Ecobricks turn problematic plastic into reusable blocks.  Plastic is a problem— but its also the way to build deep green solutions.</div>

            <a href="build.php" class="feature-button" data-lang-id="317-featured-3-button" aria-label="Build with Ecobricks">🔨Ecobrick Building</a>
            
            <div class="feature-reference-links" data-lang-id="318-featured-3-references"><a href="earth.php">Earth Building</a> | <a href="modules.php">Furniture Modules</a></div>
        </div>
    </div>


 <!--FOURTH CONTENT SECTION-->


    <div class="featured-content-4"  >
        <div class="feature-content-box">
            <div class="featured-content-img earthservice-pic"></div>
            <div class="feature-big-header" data-lang-id="319-featured-4-heading">Following Earth's Example</div>
            <div class="feature-sub-text" data-lang-id="320-featured-4-subheading">
            Our ecobricking is inspired by the Igorot people of Northen Luzon, where the Global Ecobrick Alliance was founded.  Guided by their Ayyew ethos, ecobricking is fundamentally distinct from western concepts of sustainability and zero-waste.</div>
            <a href="principles.php" class="feature-button" data-lang-id="321-featured-4-button" aria-label="Our Principles">🌏 Our Earthen Principles</a>
            <div class="feature-reference-links" data-lang-id="322-featured-4-references"><a href="spiral.php">Spiral Design</a> | <a href="/ayyew/">Ayyew </a> | <a href="about.php">About Us</a>
            </div>
        </div>
    </div>


        </div><!--closes main-->
    



    
  
<!--FOOTER STARTS-->

<?php require_once ("../footer-2024.php");?>


 <!-- </div>  ends page content-->


<script>
    function slowScrollLeft(element, distance, duration) {
        const start = element.scrollLeft;
        const galleryWidth = element.scrollWidth; // Get the total width of the gallery
        let startTime = performance.now();

        function scroll(timestamp) {
            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            element.scrollLeft = start + distance * progress;

            if (progress < 1) {
                requestAnimationFrame(scroll);
            } else {
                // Reset scroll position to the beginning when it reaches the end
                element.scrollLeft = 0;
                startTime = performance.now();
                requestAnimationFrame(scroll);
            }
        }

        requestAnimationFrame(scroll);
    }

    const galleryBlock = document.querySelector('.gallery10-content-block');
    const galleryWidth = galleryBlock.scrollWidth; // Get the total width of the gallery
    slowScrollLeft(galleryBlock, galleryWidth, 45000); // Scroll the full width over 15000 milliseconds




//    function ecobrickPreview(brik_serial, weight, owner, location) {
//         // Construct the image source URL
//         var imageUrl = 'https://ecobricks.org/briks/ecobrick-' + brik_serial + '-file.jpeg';
        
//         // Open a modal with the ecobrick image and link to details-ecobrick-page
//         var modal = document.createElement('div');
//         modal.className = 'ecobrick-modal';
//         modal.innerHTML = '<span class="close-modal" onclick="closeEcobrickModal()">&times;</span>' +
//                           '<img src="' + imageUrl + '" alt="Ecobrick ' + brik_serial + '" />' +
//                           '<div class="ecobrick-details">' +
//                           '   <p>Ecobrick ' + brik_serial + ' | ' + weight + 'g of plastic sequestered by ' + owner + ' in ' + location + '.</p>' +
//                           '</div>' +
//                           '<a style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;" class="btn featured-gallery-button" href="details-ecobrick-page.php?serial_no=' + brik_serial + '">ℹ️ View Full Details</a>';
        
//         // Append the modal to the body
//         document.body.appendChild(modal);
//     }


function ecobrickPreview(brik_serial, weight, owner, location) {
    // Construct the image source URL
    var imageUrl = 'https://ecobricks.org/briks/ecobrick-' + brik_serial + '-file.jpeg';

    const modal = document.getElementById('form-modal-message');
    const contentBox = modal.querySelector('.modal-content-box'); // This is the part we want to hide
    const photoBox = modal.querySelector('.modal-photo-box'); // This is where we'll show the image
    const photoContainer = modal.querySelector('.modal-photo'); // The container for the image

    // Hide the content box and show the photo box
    contentBox.style.display = 'none'; // Hide the content box
    photoBox.style.display = 'block'; // Make sure the photo box is visible

    // Clear previous images from the photo container
    photoContainer.innerHTML = '';

    // Create and append the ecobrick image to the photo container
    var img = document.createElement('img');
    img.src = imageUrl;
    img.alt = "Ecobrick " + brik_serial;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '75vh';
    img.style.minHeight ="400px";
    img.style.minWidth ="400px";
    img.style.margin = 'auto';
    // img.style.backgroundColor ='#8080802e';
    photoContainer.appendChild(img);

    // Add ecobrick details and view details button inside photo container
    var details = document.createElement('div');
    details.className = 'ecobrick-details';
    details.innerHTML = '<p>Ecobrick ' + brik_serial + ' | ' + weight + 'g of plastic sequestered by ' + owner + ' in ' + location + '.</p>' +
                        '<a href="details-ecobrick-page.php?serial_no=' + brik_serial + '" class="btn featured-gallery-button" style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;">ℹ️ View Full Details</a>';
    photoContainer.appendChild(details);

    // Hide other parts of the modal that are not used for this preview
    modal.querySelector('.modal-content-box').style.display = 'none'; // Assuming this contains elements not needed for this preview

    // Show the modal
    modal.style.display = 'flex';

    //Blur out background
    document.getElementById('page-content')?.classList.add('blurred');
    document.getElementById('footer-full')?.classList.add('blurred');
    document.body.classList.add('modal-open');

}




function projectPreview(project_id, name, description, location_full, ecobricks_used, start) {
    // Construct the image source URL
    var imageUrl = 'https://ecobricks.org/projects/photos/project-' + project_id + '-1.webp';

    // Fetch the existing modal elements
    var modal = document.getElementById('form-modal-message');
    var photoContainer = modal.querySelector('.modal-photo');

    // Clear any existing content in the photo container
    photoContainer.innerHTML = '';

    // Create and append the project image to the photo container with specified styling
    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = "Ecobrick Project: " + name;
    img.title = "Project " + project_id + ": " + name;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '80vh';
    img.style.minHeight ="400px";
    img.style.minWidth ="400px";
    // img.style.backgroundColor ='#8080802e';
    img.style.margin = 'auto';
    photoContainer.appendChild(img);

    // Add project details inside photo container
    var details = document.createElement('div');
    details.className = 'ecobrick-details';
    details.style.margin = '20px 10% auto 10%'; // Adjust the margin as per your design
    details.innerHTML = `<p>${description} | Ecobricks used: ${ecobricks_used} | Project completed: ${start} | ${location_full}</p>`;
    photoContainer.appendChild(details);

    // Show the modal
    modal.style.display = 'flex';

    // Hide other parts of the modal not used for this preview
    modal.querySelector('.modal-content-box').style.display = 'none';

   //Blur out background
   document.getElementById('page-content')?.classList.add('blurred');
    document.getElementById('footer-full')?.classList.add('blurred');
    document.body.classList.add('modal-open');
}




//    function projectPreview(project_id, name, description, location_full, ecobricks_used, start) {
//         // Construct the image source URL
//         var imageUrl = 'https://ecobricks.org/projects/featured/featured-img-project-' + project_id + '.webp';
        
//         // Open a modal with the ecobrick image and link to details-ecobrick-page
//         var modal = document.createElement('div');
//         modal.className = 'ecobrick-modal';
//         modal.innerHTML = '<span class="close-modal" onclick="closeEcobrickModal()">&times;</span>' +
//                           '<img src="' + imageUrl + '" alt="Ecobrick Project: ' + name + '" title="Project ' + project_id + ': ' + name + '" >' +
//                           '<div class="ecobrick-details" style="margin: 20px 10% auto 10%;">' +
//                           '   <p>' + description + ' | Ecobricks used: ' + ecobricks_used + ' | Project completed: ' + start + ' | ' + location_full + '</p>                          </div>';
        
//         // Append the modal to the body
//         document.body.appendChild(modal);
//     }


    //WITH BUTTON


//    function projectPreview(project_id, name, description, location_full, ecobricks_used, start) {
//         // Construct the image source URL
//         var imageUrl = 'https://ecobricks.org/projects/featured/featured-img-project-' + project_id + '.webp';
        
//         // Open a modal with the ecobrick image and link to details-ecobrick-page
//         var modal = document.createElement('div');
//         modal.className = 'ecobrick-modal';
//         modal.innerHTML = '<span class="close-modal" onclick="closeEcobrickModal()">&times;</span>' +
//                           '<img src="' + imageUrl + '" alt="Ecobrick Project: ' + name + '" title="Project ' + project_id + ': ' + name + '" >' +
//                           '<div class="ecobrick-details">' +
//                           '   <p>' + description + ' | Ecobricks used: ' + ecobricks_used + ' | Project completed: ' + start + ' | ' + location_full + '</p>                          </div><a style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;" class="btn featured-gallery-button" href="details-project-page.php?serial_no=' + project_id + '">ℹ️ View Full Details</a>';
        
//         // Append the modal to the body
//         document.body.appendChild(modal);
//     }




    function closeEcobrickModal() {
        // Close the modal by removing it from the DOM
        var modal = document.querySelector('.ecobrick-modal');
        if (modal) {
            modal.parentNode.removeChild(modal);
        }
    }
</script>


</body>


</html>

