<?php
$version='4.7';
$lang = basename(dirname($_SERVER['SCRIPT_NAME']));
$page='welcome';
include '../ecobricks_env.php';
require_once ("../includes/welcome-inc.php");
$lang = 'es';
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<HEAD>
<META charset="UTF-8">

<!--
Ecobricks.org site version 3.0
Developed and made open source by the Global Ecobrick Alliance
See our git hub repository for the full code and to help out:
https://github.com/gea-ecobricks/ecobricks-org
-->

    <div class="feature-content-anchor-box">

        <!-- FEATURED HEADLINE CONTENT-->

    <div id="slider-content-1" class="slider-slide" >
         <div class="featured-content-shaded-box">
             <div class="featured-content-text">
                 <div class="featured-content-title" data-lang-id="300-featured-content-1-title">Free June Course</div>
                 <div class="featured-content-subtitle" data-lang-id="301-featured-content-1-subtitle">Join us for a live and free introductory course.  Learn the science, philosophy and essential techniques from GEA co-founder Russell Maier and GEA Trainer Paula Apollonia in our flagship course 'Plastic, the Biosphere & Ecobricks'.  Free.</div>

                 <a class="content-button" href="https://gobrik.com/en/register.php?id=917" data-lang-id="302-featured-content-1-button">↗️ View Course on GoBrik</a>
             </div>
         </div>
    </div>

<!--


                <div id="slider-content-3" class="slider-slide" >
                    <div class="featured-content-shaded-box">
                        <div class="featured-content-text">
                            <div class="featured-content-title" data-lang-id="300-featured-content-3-title">The Planetary Story of Plastic</div>
                            <div class="featured-content-subtitle" data-lang-id="301-featured-content-3-subtitle">Where does plastic really come from?</div>
                            <a class="content-button" href="earth-methods.php" data-lang-id="302-featured-content-3-button">🌎 Go deep!</a>
                        </div>
                    </div>
                </div>

            <div id="slider-content-4" class="slider-slide" >
                <div class="featured-content-shaded-box">
                    <div class="featured-content-text">
                        <div class="featured-content-title" data-lang-id="300-featured-content-4-title">Earth & Ecobrick Methods</div>
                        <div class="featured-content-subtitle" data-lang-id="301-featured-content-4-subtitle">In-depth Building Guidelines & Best Practices</div>
                        <a class="content-button" href="earth-methods.php" data-lang-id="302-featured-content-4-button">⚒️ Learn</a>
                    </div>
                </div>
            </div>

-->

  </div>

 <!--FEATURE BOX ONE: HAPPY DOLPHIN-->

    <div class="featured-content-2">

        <div class="feature-content-box">

            <div class="featured-content-img dolphin-pic"></div>

            <div class="feature-big-header" data-lang-id="308-featured-2-heading"><h4 data-lang-id="308-featured-2-heading">Keep Plastic Safe</h4></div>

            <div class="feature-sub-text" data-lang-id="309-featured-2-subheading">
           Ecobricking is a simple, non-capital methodology to keep your plastic safe and secure so that it can be put to good, green use.</div>
            <button type="button" class="feature-button" data-lang-id="310-featured-2-button" aria-label="A quick intro" onclick="guidedTour()">Quick Intro</button>

          <div class="feature-reference-links" data-lang-id="311-featured-2-references">
                <h6>
                <a href="what.php">Basics</a> | <a href="transition.php">Plastic Transition</a> | <a href="how.php">How to Make</a></h6>
            </div>

        </div>
    </div>

<!-- TOP TEN GALLERY-->

<div class="featured-content-top10s" style="overflow-x:clip;">
    <div class="feature-content-box">
        <div class="feature-big-header"><h4 data-lang-id="312-top10s-title">Monthly Top Tens</h4></div>
        <div class="feature-sub-text" data-lang-id="313-top10s-subtitle">Every month thousands of ecobricks are logged by ecobrickers around the world— and peer review by them too!</div>
    </div>
    <div class="gallery10-content-block">
        <div class="flex-container10">

            <?php
            $sql = "SELECT * FROM tb_ecobricks WHERE feature = 1 ORDER BY date_logged_ts DESC LIMIT 10;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

            echo '<div class="gal-photo10">
                    <a href="details-ecobrick-page.php?serial_no=' . $row["ecobrick_unique_id"] . '">
                        <img src="https://gobrik.com/' . $row["ecobrick_full_photo_url"] . '?v=1" loading="lazy" alt="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobricker_maker"] . ' in ' . $row["location_full"] . '" title="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobricker_maker"] . ' in ' . $row["location_full"] . '">
                    </a>
                    <div class="gal10-photo-text"><b>Ecobrick ' . $row["ecobrick_unique_id"] . '</b><br>By ' . $row["ecobricker_maker"] . '<br>' . $row["location_full"] . '</div>
                </div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>

        </div>
    </div>


         <!--<a href="top-tens.php" class="feature-button"  data-lang-id="313-top10s-button" aria-label="monthly rankings">🏆 Monthly Rankings</a>

                        <div class="feature-reference-links" data-lang-id="314-top10s-references">The best ecobricks this month</div>-->

    </div>


<!-- PROJECT GALLERY -->

    <div class="featured-project-gallery" style="overflow-x:clip;">

                <div class="feature-content-box">
                <div class="feature-big-header"><h4 data-lang-id="404-featured-live-heading">Ecobricks Applied</h4></div>

                    <div class="feature-sub-text" data-lang-id="405-featured-live-subheading">Ecobricks projects logged by ecobrickers from around the world.</div>
                </div>
        <div class="feed-live">
            <p data-lang-id="403-featured-live-brikchain"><span class="blink">⬤  </span>Live projects feed.  Click to preview.</p>
        </div>
        <div class="gallery-flex-container">
        <?php
    // Updated SQL query to include a WHERE clause and a LIMIT
    $sql = "SELECT * FROM tb_projects WHERE ready_to_show = 1 ORDER BY project_id DESC LIMIT 20;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="gal-project-photo">
                    <div class="photo-box">
                        <img src="' . $row["photo1_tmb"] . '?v=1" alt="' . $row["project_name"] . ' in ' . $row["location_full"] . ' has sequestered ' . $row["est_total_weight"] . ' kg of plastic using ' . $row["briks_used"] . ' ecobricks" onclick="projectPreview(\'' . $row["project_id"] . '\', \'' . $row["project_name"] . '\', \'' . $row["description_short"] . '\', \'' . $row["location_full"] . '\', \'' . $row["briks_used"] . '\', \'' . $row["start_dt"] . '\')" title="' . $row["project_name"] . ' in ' . $row["location_full"] . ' has sequestered ' . $row["est_total_weight"] . ' kg of plastic using ' . $row["briks_used"] . ' ecobricks" loading="lazy">
                    </div>
                </div>';
                //when photo is clicked the projectPreview function defined in 2024 landing scripts is called
        }
    } else {
        echo "No projects available to display.";
    }
?>

            <div class="project-photo-box-end" href="add-project.php"></div>

        </div>

       <!--
        <a href="add-project.php" class="feature-button" data-lang-id="405b-post-project-button" aria-label="Post your project">➕ Post your project</a>
        <div class="feature-reference-links">Share your ecobrick application</div>-->
    </div>



<!-- TRAININGS GALLERY -->

<div class="featured-content-gallery" style="overflow-x:clip;">

    <div class="feature-content-box">
        <div class="feature-big-header"><h4 data-lang-id="500-featured-training-heading">GEA Trainings</h4></div>
    </div>



                <div class="feature-sub-text" data-lang-id="too-featured-live-training-subheading">Our team of over 600 trainers deliver training all over the world.</div>
    <div class="feed-live">
        <p data-lang-id="500-training-feed"><span class="blink">⬤  </span>A live fee of GEA Trainings...</p>
    </div>
    <div class="gallery-flex-container">
        <?php
        // Updated SQL query to include a WHERE clause and a LIMIT
        $sql = "SELECT * FROM tb_trainings WHERE ready_to_show = 1 AND show_report = 1 ORDER BY training_id DESC LIMIT 20;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Fallback-safe values
                $photo       = htmlspecialchars($row["training_photo0_tmb"] ?? '', ENT_QUOTES);
                $photo_main  = htmlspecialchars($row["training_photo0_main"] ?? '', ENT_QUOTES);
                $title       = htmlspecialchars($row["training_title"] ?? '', ENT_QUOTES);
                $country     = htmlspecialchars($row["training_country"] ?? '', ENT_QUOTES);
                $participants = htmlspecialchars($row["no_participants"] ?? '', ENT_QUOTES);
                $trainer     = htmlspecialchars($row["lead_trainer"] ?? '', ENT_QUOTES);
                $id          = htmlspecialchars($row["training_id"] ?? '', ENT_QUOTES);

                echo '<div class="gal-project-photo">
                        <div class="photo-box">
                            <img src="https://gobrik.com/' . $photo . '?v=2"
                                 alt="' . $title . ' in ' . $country . ' had ' . $participants . ' participants"
                                 onclick="trainingPreview(\'' . $id . '\', \'' . $title . '\', \'' . $country . '\', \'' . $participants . '\', \'' . $trainer . '\', \'' . $photo_main . '\')"
                                 title="' . $title . ' in ' . $country . ' had ' . $participants . ' participants">
                        </div>
                    </div>';
            }
        } else {
            echo "No trainings available to display.";
        }
        ?>
        <div class="project-photo-box-end"></div>
    </div>



        <!-- <a href="https://gobrik.com/courses.php" target="_blank" class="feature-button" data-lang-id="500-training-join-button" aria-label="View workshops">➕ Join a workshop</a>
        <div class="feature-reference-links">View our current courses</div> -->
    </div>






<!-- FULL ECOBRICK FLOW GALLERY -->

<!--<div class="featured-content-gallery" style="overflow-x:clip;">
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
                                    <img src="https://gobrik.com/' . $row["thumb_url"] . '?v=4" alt="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" title="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" loading="lazy" onclick="ecobrickPreview(\'' . $row["ecobrick_unique_id"] . '\', \'' . $row["weight_in_g"] . '\', \'' . $row["ecobrick_owner"] . '\', \'' . $row["location"] . '\')"/>
                                </div>
                            </div>';
                    }
                } else {
                    echo "Failed to connect to the Brikchain database";
                }
             ?>
            <div class="photo-box-end" href="brikchain.php"></div>
        </div>


        <div class="feature-content-box">
            <div class="feature-big-header" data-lang-id="304-featured-live-heading">Ecobricking.  Live.</div>
            <div class="feature-sub-text" data-lang-id="305-featured-live-subheading">Ecobricks are being made, logged and validated around the world right this moment.</div>

            <a href="brikchain.php" class="feature-button"  data-lang-id="306-featured-live-button" aria-label="view brikchain">⛓️ The Brikchain</a>
            <div class="feature-reference-links"data-lang-id="307-featured-live-links">A feed & archive of authenticated ecobricks</div>

        </div>
    </div>

-->









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

  function trainingPreview(id, title, country, participants, trainer, photo) {
      // Construct the training image URL based on the provided photo path
      var imageUrl = 'https://gobrik.com/' + photo;


      const modal = document.getElementById('form-modal-message');
      const contentBox = modal.querySelector('.modal-content-box');
      const photoBox = modal.querySelector('.modal-photo-box');
      const photoContainer = modal.querySelector('.modal-photo');

      // Hide the content box and show the photo box
      contentBox.style.display = 'none';
      photoBox.style.display = 'block';

      // Clear previous content
      photoContainer.innerHTML = '';

      // Create and append training image
      var img = document.createElement('img');
      img.src = imageUrl;
      img.alt = "GEA Training: " + title;
      img.style.maxWidth = '90%';
      img.style.maxHeight = '75vh';
      img.style.minHeight = '400px';
      img.style.minWidth = '400px';
      img.style.margin = 'auto';
      photoContainer.appendChild(img);

      // Create and append training details
      var details = document.createElement('div');
      details.className = 'training-details';
      details.innerHTML = '<p>GEA Training: <strong>' + title + '</strong><br>' +
          'Country: ' + country + '<br>' +
          'Participants: ' + participants + '<br>' +
          'Lead Trainer: ' + trainer + '</p>' +
          '<a href="https://ecobricks.org/en/training.php?id=' + id + '" class="preview-btn" style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;">ℹ️ View Full Details</a>';
      photoContainer.appendChild(details);

      // Final modal setup
      modal.style.display = 'flex';
      document.getElementById('page-content')?.classList.add('blurred');
      document.getElementById('footer-full')?.classList.add('blurred');
      document.body.classList.add('modal-open');
  }
</script>

 <script src="../scripts/2024-landing-scripts.js"></script>


</body>


</html>

