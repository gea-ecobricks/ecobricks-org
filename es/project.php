<!DOCTYPE html>
<HTML lang="es"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='es';
error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<?php $version='2.14
';?>
<?php $page='project';?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>


<?php 
require_once ("../includes/project-inc.php");
include '../ecobricks_env.php';

$conn->set_charset("utf8mb4");


$projectId = $_GET['project_id'];

$sql = "SELECT * FROM tb_projects WHERE project_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $projectId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $array = $result->fetch_assoc();

		echo 
		'<div class="splash-content-block">
			<div class="splash-box">
	
				<div class="splash-heading">' . htmlspecialchars($array["project_name"], ENT_QUOTES, 'UTF-8') . '</div>
				
				<div class="splash-sub">' . htmlspecialchars($array["description_short"], ENT_QUOTES, 'UTF-8') . '</div>
			</div>
			
			<div class="splash-image">
				<a href="javascript:void(0);" onclick="viewGalleryImage(\'' . htmlspecialchars($array["photo1_main"], ENT_QUOTES, 'UTF-8') . '\', \'Project ' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and started on ' . htmlspecialchars($array["start_dt"], ENT_QUOTES, 'UTF-8') . '\')"><img src="../' . htmlspecialchars($array["photo1_main"], ENT_QUOTES, 'UTF-8') . '" alt="Project ' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and started on ' . htmlspecialchars($array["start_dt"], ENT_QUOTES, 'UTF-8') . '"
			title="Project' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and started on ' . htmlspecialchars($array["start_dt"], ENT_QUOTES, 'UTF-8') . '"></a>
			</div>    
		</div>
	
		<div id="splash-bar"></div>';

        echo '
		<div id="main-content">
            <div class="row">
                <div class="main">
                    <div class="row-details">

			            <div class="lead-page-paragraph">
                            <p>'. $array["project_name"] .'<span data-lang-id="110"> is a </span>'. $array["construction_type"] .' '. $array["project_type"].' <span data-lang-id="111">project in </span>'. $array["location_full"] .'<span data-lang-id="112">.  The project is made from </span>'. $array["briks_used"] .'<span data-lang-id="113"> ecobricks, resulting in the sequestration of approxamitely </span>'. $array["est_total_weight"] .'&#8202;kg <span data-lang-id="114">of plastic. </p>
                        </div>
                   
                        <div id="three-column-gal" class="three-column-gal" style="margin-top:40px">';
 
                         // Loop through the available photos (up to 5)
						 for ($i = 1; $i <= 6; $i++) {
                            $photo_main = $array["photo{$i}_main"];
                            $photo_tmb = $array["photo{$i}_tmb"];
                            
                            // Check if the photo exists
                            if (!empty($photo_main) && !empty($photo_tmb)) {
                                echo '<div class="gal-photo" onclick="viewGalleryImage(\'../' . $photo_main . '\', \'Project photo ' . $i . ' | '. $array["project_name"] .' \')">
                                        <img src="../' . $photo_tmb . '">
                                    </div>';
                            }
                        }
  echo '
</div>';

		 echo ' <div class="main-details">
					
		 <div class="page-paragraph">
		 <p>'. nl2br(htmlspecialchars($array["description_long"], ENT_QUOTES, 'UTF-8')) .'</p>
		 <br>
	 </div>

				</div>
				<br>';

				
				require_once ("../includes/project-inc.php");
				include '../ecobricks_env.php';
				
				$projectId = $_GET['project_id'];
				
				$sql = "SELECT * FROM tb_projects WHERE project_id = ?";
				$stmt = $conn->prepare($sql);
				$stmt->bind_param("i", $projectId);
				$stmt->execute();
				$result = $stmt->get_result();
				
				if ($result->num_rows > 0) {
					$array = $result->fetch_assoc();
				
				
				
					echo '<div class="featured-content-gallery" style="width:100%;">
							<div class="feed-live">
								<p>Ecobricks used in project. Click to view.</p>
							</div>
								<div class="gallery-flex-container">';
				
					$connected_ecobricks = $array['connected_ecobricks'];
					$serial_numbers = explode(',', $connected_ecobricks);
					$serial_numbers = array_map('trim', $serial_numbers);
					$placeholders = implode(',', array_fill(0, count($serial_numbers), '?'));
				
					$sql_ecobricks = "SELECT * FROM tb_ecobricks WHERE ecobrick_unique_id IN (" . str_repeat('?,', count($serial_numbers) - 1) . "?)";
					$stmt_ecobricks = $conn->prepare($sql_ecobricks);
					$stmt_ecobricks->bind_param(str_repeat('s', count($serial_numbers)), ...$serial_numbers);
					$stmt_ecobricks->execute();
					$result_ecobricks = $stmt_ecobricks->get_result();
				
					if ($result_ecobricks->num_rows > 0) {
						while ($row = $result_ecobricks->fetch_assoc()) {
							echo '<div class="gal-photo">
									<div class="photo-box">
										<img src="' . htmlspecialchars($row["ecobrick_thumb_photo_url"], ENT_QUOTES, 'UTF-8') . '?v=1" alt="Ecobrick ' . htmlspecialchars($row["ecobrick_unique_id"], ENT_QUOTES, 'UTF-8') . ' by ' . htmlspecialchars($row["owner"], ENT_QUOTES, 'UTF-8') . '" title="Ecobrick ' . htmlspecialchars($row["ecobrick_unique_id"], ENT_QUOTES, 'UTF-8') . ' by ' . htmlspecialchars($row["owner"], ENT_QUOTES, 'UTF-8') . '" loading="lazy" onclick="ecobrickPreview(\'' . htmlspecialchars($row["ecobrick_unique_id"], ENT_QUOTES, 'UTF-8') . '\', \'' . htmlspecialchars($row["weight_g"], ENT_QUOTES, 'UTF-8') . '\', \'' . htmlspecialchars($row["owner"], ENT_QUOTES, 'UTF-8') . '\', \'' . htmlspecialchars($row["location_full"], ENT_QUOTES, 'UTF-8') . '\')"/>
									</div>
								</div>';
						}
					} else {
						echo "<p>No ecobricks found for this project.</p>";
					}
					$stmt_ecobricks->close();
					echo '</div></div></div>';
				} else {
					echo "<p>Project not found.</p>";
				}
				
	
				
				

			echo '
			

			<div id="data-chunk">
    <div class="ecobrick-data">
        <p style="margin-left: -32px;font-weight: bold;" data-lang-id="125"> +++ Raw  Data Record</p><br>
        <p>--------------------</p>
        <p data-lang-id="126">BEGIN PROJECT RECORD ></p>';

      
            echo ' <p><b data-lang-id="128">Project name:</b> ' . $array["project_name"] . '</p>';
            echo ' <p><b data-lang-id="127">Started:</b> ' . $array["start_dt"] . '</p>';
            echo ' <p><b data-lang-id="129">Short Description:</b> ' . $array["description_short"] . '</p>';
            // echo ' <p><b data-lang-id="130">End:</b> ' . $array["end_dt"] . '</p>';
            // echo ' <p><b data-lang-id="131">Briks Required:</b> ' . $array["briks_required"] . '</p>';
            echo ' <p><b data-lang-id="132">Project Phase:</b> ' . $array["project_phase"] . '</p>';
            echo ' <p><b data-lang-id="133">Percent Complete:</b> <i>' . $array["project_perc_complete"] . '</i>&#8202;%</p>';
            echo ' <p><b data-lang-id="134">Community:</b> ' . $array["community"] . '</p>';
            echo ' <p><b data-lang-id="135">Project type:</b> ' . $array["project_type"] . '</p>';
            echo ' <p><b data-lang-id="136">Construction Type:</b> ' . $array["construction_type"] . '</p>';
            echo ' <p><b data-lang-id="137">No. of Ecobricks Used:</b> ' . $array["briks_used"] . '</p>';
			echo ' <p><b data-lang-id="137">Ecobricks Used:</b> ' . $array["connected_ecobricks"] . '</p>';
            echo ' <p><b data-lang-id="138">Average Brik Weight:</b> ' . $array["est_avg_brik_weight"] . '&#8202;g</p>';
            echo ' <p><b data-lang-id="139">Location:</b> ' . $array["location_full"] . '</p>';

			echo ' <p><b data-lang-id="140">Lattitude:</b> ' . $array["location_lat"] . '</p>';
			echo ' <p><b data-lang-id="140b">Longitude:</b> ' . $array["location_long"] . '</p>';
			echo ' <p><b data-lang-id="141">Project URL:</b> ' . $array["project_url"] . '</p>';
            echo ' <p><b data-lang-id="142">Admins:</b> ' . $array["project_admins"] . '</p>';
            echo ' <p><b data-lang-id="143">Feature Photo URL:</b> ' . $array["photo1_main"] . '</p>';
            echo ' <p><b data-lang-id="144">Photo 2:</b> ' . $array["photo2_main"] . '</p>';
            echo ' <p><b data-lang-id="145">Photo 3:</b> ' . $array["photo3_main"] . '</p>';
            echo ' <p><b data-lang-id="146">Photo 4:</b> ' . $array["photo4_main"] . '</p>';
            echo ' <p><b data-lang-id="147">Photo 5:</b> ' . $array["photo5_main"] . '</p>';
            echo ' <p><b data-lang-id="148">Plastic Sequestered:</b> ' . $array["est_total_weight"] . '&#8202;kg</p>';
            echo ' <p><b data-lang-id="149">Logged:</b> ' . $array["logged_ts"] . '</p>';
            echo ' <p><b data-lang-id="149b">Ready to Show:</b> ' . $array["ready_to_show"] . ' | <a href="edit-project.php?project_id=' . $array["project_id"] . '">e</a></p>';
            echo ' <p data-lang-id="150">|||  END RECORD.</p>
    
    </div>
</div>

			' ;


			$projectId = $_GET['project_id'] ?? 0; // Default to 0 if not set
			if ($projectId) {
				// Updated SQL to directly use location_lat and location_long
				$sql = "SELECT project_name, location_full, description_long, location_lat AS latitude, location_long AS longitude FROM tb_projects WHERE project_id = ?";
				$stmt = $conn->prepare($sql);
				$stmt->bind_param('i', $projectId);
				$stmt->execute();
				$result = $stmt->get_result();
				$array = $result->fetch_assoc();
			
				if ($array && $array['latitude'] && $array['longitude']) {
					echo '
					
						<div id="map" style="width: 100%; height: 300px;padding:10px;"></div>
						<script>
							var map = L.map("map").setView([' . $array['latitude'] . ', ' . $array['longitude'] . '], 13);
							L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
								maxZoom: 19,
								attribution: "© OpenStreetMap"
							}).addTo(map);
							L.marker([' . $array['latitude'] . ', ' . $array['longitude'] . ']).addTo(map)
								.bindPopup("' . htmlspecialchars($array['project_name'], ENT_QUOTES, 'UTF-8') . '")
								.openPopup();
						</script>';
				} else {
					echo 'Project not found or no location data available.';
				}
			} else {
				echo 'Invalid project ID.';
			}


			echo '
			<p style="font-size:smaller">Project Location:</p>
			<p style="font-size:normal">' . $array["location_full"] . '</p><br>
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p data-lang-id="151">Ecobrick Applications</p></h3>
			
				<p data-lang-id="152">There are all sorts of ways to build with ecobricks!  We invite you to get inspired by our searchable arcive of ecobrick projects.  Search by location, project type, construction type and location.</p>

			    <p data-lang-id="153">Then, when you\'re ready to go, check out our ecobrick building guidelines.  We\'ve got in-depth resources on general building, modules, open space, earth building and earth building techniques.</p>
				<br>
				<p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Browse the Archive</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">The live archive of ecobrick projects around the world.</a></p>
                <br>
                <p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Ecobrick Applications</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">An overview of ecobrick applications.</a></p>


				</div>
			</div>';	
			

	}


else {
   


echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub" data-lang-id="151">There are no results for project '. $projectId .' in our database.</div>
		</div>
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;border:none;box-shadow:none;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="lead-page-paragraph">
			<p data-lang-id="152">🚧  It seems project '. $projectId .' has not been published to the ecobricks.org database.  This could be because of a publication error.  It could also be because the project ID is mis-entered in the URL.
				</p></div><br><hr><br>
				
				<div class="page-paragraph">
				<h4 data-lang-id="151">Ecobrick Applications</h4>
			
				<p data-lang-id="152">There are all sorts of ways to build with ecobricks!  We invite you to get inspired by our searchable arcive of ecobrick projects.  Search by location, project type, construction type and location.</p>

			    <p data-lang-id="153">Then, when you\'re ready to go, check out our ecobrick building guidelines.  We\'ve got in-depth resources on general building, modules, open space, earth building and earth building techniques.</p>
				<br>
				<p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Browse the Archive</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">The live archive of ecobrick projects around the world.</a></p>
                <br>
                <p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Ecobrick Applications</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">An overview of ecobrick applications.</a></p>


				</div>
			</div>';

	
		}
		$conn->close();

		?>
		
        <div class="side">

            <?php require_once ("side-modules/good-use.php");?>

            <?php require_once ("side-modules/sequest-module.php");?>

            <?php require_once ("side-modules/signup-now.php");?>

			<div class="side-module-desktop-mobile">

			<img src="../svgs/building-methods.svg" width="300" style="width:80%" loading="lazy" alt="eco brik and earth building can make circular benches with trees planted in the middle">

			<br><br>
			<a class="module-btn" href="add-project.php">Post your project</a>
				<h6 style="font-size:smaller">Share your ecobrick application</h6>

			</div>
                
   


		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>



<script>

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
</script>


</body>
</html>