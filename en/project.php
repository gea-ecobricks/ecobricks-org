<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<title>test</title>
<META charset="UTF-8">
<?php $lang='en';
error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<?php $version='2.09';?>
<?php $page='project';?>
 
<?php 

	require_once ("../includes/project-inc.php");
	include '../ecobricks_env.php';
	// include '../ssp.class.php';

	$projectId = $_GET['project_id'];

	$sql = "SELECT * FROM tb_projects WHERE project_id = '" . $projectId . "'";

    

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo 
		'<div class="splash-content-block">
			<div class="splash-box">
	
				<div class="splash-heading"><span data-lang-id="001-splash-title">Project</span> ' . htmlspecialchars($array["name"], ENT_QUOTES, 'UTF-8') . '</div>
				
				<div class="splash-sub">' . htmlspecialchars($array["description"], ENT_QUOTES, 'UTF-8') . '</div>
			</div>
			
			<div class="splash-image">
				<a href="javascript:void(0);" onclick="viewGalleryImage(\'' . htmlspecialchars($array["photo1_main"], ENT_QUOTES, 'UTF-8') . '\', \'Project ' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and logged on ' . htmlspecialchars($array["start"], ENT_QUOTES, 'UTF-8') . '\')"><img src="../' . htmlspecialchars($array["photo1_main"], ENT_QUOTES, 'UTF-8') . '" alt="Project ' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and logged on ' . htmlspecialchars($array["start"], ENT_QUOTES, 'UTF-8') . '"
			title="Project' . htmlspecialchars($array["project_id"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and started on ' . htmlspecialchars($array["start"], ENT_QUOTES, 'UTF-8') . '"></a>
			</div>    
		</div>
	
		<div id="splash-bar"></div>
		
        <div id="main-content">
            <div class="row">
                <div class="main">
                    <div class="row-details">

			            <div class="lead-page-paragraph">
                            <p><b>'. $array["name"] .' <span data-lang-id="110">is a</span>'. $array["project_type"].' project using</span>'. $array["construction_type"] .' in '. $array["location_full"] .'<span data-lang-id="112"> The project is made from '. $array["briks_used"] .' resulting in the sequestration of approxamitely </span>'. $array["est_total_weight"] .'&#8202;kg of plastic. </p>
                        </div>
                    
                        <div id="three-column-gal" class="three-column-gal">
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth1.jpg?v=2', 'Mud Mosque in Djene, Mali\')">
                                <img src="../photos/earth1.jpg?v=2" alt="Mud Mosque in Djene, Mali">
                                <p>Mud Mosque in Djene, Mali</p>
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth2.jpg', '16th Century Tudor Cob Home, England\')">
                                <img src="../photos/earth2.jpg" alt="16th Century Tudor Cob Home, England">
                                <p>16th Century Tudor Cob Home, England</p>
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth3.jpg', 'Ancient Navajo Dwelling\')">
                                <img src="../photos/earth3.jpg" alt="Ancient Navajo Dwelling">
                                <p>Ancient Navajo Dwelling, New Mexico, America</p>
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth-garden.jpeg?v=2', 'A simple raised bed garden bench.\')">
                                <img src="../photos/earth-garden.jpeg?v=2" alt="A simple raised bed garden bench.">
                                <p>A simple raised bed garden bench -- Indonesia</p>
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth-well.jpeg', 'A circular cob and ecobrick construction.\')">
                                <img src="../photos/earth-well.jpeg" alt="A circular cob and ecobrick construction.">
                                <p>A spiral cob and ecobrick construction -- UK</p>
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../photos/earth-snake.jpeg', 'An ecobrick snake play-bench for a public park.\')">
                                <img src="../photos/earth-snake.jpeg" alt="An ecobrick snake play-bench for a public park.">
                                <p>An ecobrick snake play-bench for a public park -- Philippines</p>
                            </div>
                        </div>;'

	

				

		 echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>'. $array["long_description"] .'</p>
						<br>
					</div>
				</div>';
				

			echo '
			
			// </div>
			<div id="data-chunk">
				<div class="ecobrick-data">
					<p style="margin-left: -32px;font-weight: bold;" data-lang-id="125"> +++ Raw  Data Record</p><br>
					<p>--------------------</p>
					<p data-lang-id="126">BEGIN PROJECT RECORD ></p>';

			echo ' <p><b data-lang-id="127">Started:</b> ' . $array["start"] .'</p>' ;
			echo ' <p><b data-lang-id="128">Name:</b> <var>'. $array["name"] .' &#8202;ml</var></p>' ;
			echo ' <p><b data-lang-id="129">Description:</b> <var>' . $array["description"] .'&#8202;g</var></p>' ;
			echo ' <p><b data-lang-id="130">End:</b> <var>' . $array["project_end"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b data-lang-id="131">Briks Required</b><var>' . $array["briks_required"] .' &#8202;kg</var></p>' ;
			echo ' <p><b data-lang-id="132">Project Phase:</b> <var>' . $array["project_phase"] .'&#8202;ß</var></p>' ;

			echo ' <p><b data-lang-id="133">Percent Complete:</b> <var><i>' . $array["project_per_complete"] .'</i>&#8202;%</var> </p>' ;
			echo ' <p><b data-lang-id="134">Community:</b> <var>' . $array["community"].'</var></p>' ;
			echo ' <p><b data-lang-id="135">Project type:</b> <var>' . $array["project_type"] .'</var></p>' ;
			echo ' <p><b data-lang-id="136">Construction Type</b> ' . $array["construction_type"] .'</p>' ;

			echo ' <p><b data-lang-id="137">Ecobricks Used:</b>' . $array["briks_used"] .'</p>' ;

			echo ' <p><b data-lang-id="138">Average Brik Weight:</b> <var>' . $array["est_avg_brik_weight"] .'&#8202;g</var></p>' ;
			echo ' <p><b data-lang-id="139">Location:</b> <var>' . $array["location_full"] .'</var></p>' ;
			echo ' <p><b data-lang-id="140">Geo:</b> <var>' . $array["location_geo"] .'</var></p>' ;
			echo ' <p><b data-lang-id="141">Project URL:</b> ' . $array["project_url"] .'</p>' ;
			echo ' <p><b data-lang-id="142">Admins</b> <var>' . $array["project_admins"] .'</var></p>' ;


			echo ' <p><b data-lang-id="143">Feature Photo URL:</b> ' . $array["photo1_main"] .'</var></p>' ;
			echo ' <p><b data-lang-id="144">Photo 2:</b> <var>' . $array["photo2_main"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="145">Photo 3:</b> <var>' . $array["photo3_main"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="146">Photo 4:</b> <var>' . $array["photo4_main"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="147">Photo 5:</b> <var>' . $array["photo5_main"] .'</var></p>' ;

			echo ' <p><b data-lang-id="148">Estimate Total Weight:</b> <var>' . $array["est_total_weight"] .'&#8202;kg</var></p>' ;
			echo ' <p><b data-lang-id="149">Logged</b> <var> ' . $array["data_logged_ts"] .'&#8202;kg</p>' ;
            echo ' <p><b data-lang-id="149b">Ready to Show</b> <var> ' . $array["ready_to_show"] .'</p>
			<p data-lang-id="150"> ||| END RECORD.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p data-lang-id="151">Ecobrick Applications</p></h3>
			
				<p data-lang-id="152">There are all sorts of ways to build with ecobricks!  We invite you to get inspired by our searchable arcive of ecobrick projects.  Search by location, project type, construction type and location.</p>

			    <p data-lang-id="153">Then, when you\'re ready to go, check out our ecobrick building guidelines.  We\'ve got in-depth resources on general building, modules, open space, earth building and earth building techniques.</p>
				<br>
				<p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Browse the Archive</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">The live archive of ecobrick projects around the worl.</a></p>

                <p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Ecobrick Applications</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">An overview of ecobrick applications.</a></p>


				</div>
			</div>';
			
			echo '	<div class="side">

	
                  ';

	}


} else {
   


echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub" data-lang-id="151">No results for project '. $projectId .' in our database.</div>
		</div>
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="ecobrick-data">
			<p data-lang-id="152">🚧 The data for project '. $projectId .' has not yet been migrated to the blockchain.  This could be because of transfer delay.  Normally publishing occurs within 30 seconds of authentication.  If more than 24hrs has passed, an error has occurred or this ecobrick was not authenticated.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3 data-lang-id="154">The Brikchain</h3></p>
			
				<p data-lang-id="155">When an ecobrick is authenticated, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find authenticated ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p data-lang-id="156">As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br>
				<p><a class="action-btn-blue" href="brikchain.php" data-lang-id="157">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="158">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>
		

            <?php require_once ("side-modules/good-use.php");?>

            <?php require_once ("side-modules/sequest-module.php");?>

            <?php require_once ("side-modules/signup-now.php");?>
                
            <?php require_once ("side-modules/transition-module.php");?>

            <?php require_once ("side-modules/earthen-ethics.php");?>


		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>
</body>
</html>