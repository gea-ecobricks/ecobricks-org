<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
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
	
		<div id="splash-bar"></div>';

        echo '
		
        <div id="main-content">
            <div class="row">
                <div class="main">
                    <div class="row-details">

			            <div class="lead-page-paragraph">
                            <p>'. $array["name"] .' <span data-lang-id="110">is a</span>'. $array["project_type"].' project using</span>'. $array["construction_type"] .' in '. $array["location_full"] .'<span data-lang-id="112"> The project is made from '. $array["briks_used"] .' ecobricks, resulting in the sequestration of approxamitely </span>'. $array["est_total_weight"] .'kg of plastic. </p>
                        </div>
                    
                    
                        <div id="three-column-gal" class="three-column-gal">

                            <div class="gal-photo" onclick="viewGalleryImage(\'../' . $array["photo1_main"] . '', 'Project feature photo\')">
                                <img src="../' . $array["photo1_tmb"] . '">

                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../' . $array["photo2_main"] . '', 'Project photo 2\')">
                                <img src="' . $array["photo2_tmb"] . '">
                                
                            </div>
                            <div class="gal-photo" onclick="viewGalleryImage(\'../' . $array["photo3_main"] . '', 'Project photo 3\')">
                                <img src="../' . $array["photo3_tmb"] . '" >
                            </div>

                            <div class="gal-photo" onclick="viewGalleryImage(\'../' . $array["photo4_main"] . '', 'Project photo 4\')">
                            <img src="../' . $array["photo4_tmb"] . '">
                            </div>

                            <div class="gal-photo" onclick="viewGalleryImage(\'../' . $array["photo5_main"] . '', 'Project photo 5\')">
                                <img src="../' . $array["photo5_tmb"] . '">

                            </div>

                        </div>';

	

				

		 echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>'. $array["long_description"] .'</p>
						<br>
					</div>
				</div>';
				

			echo '
			
			</div>
			<div id="data-chunk">
    <div class="ecobrick-data">
        <p style="margin-left: -32px;font-weight: bold;" data-lang-id="125"> +++ Raw  Data Record</p><br>
        <p>--------------------</p>
        <p data-lang-id="126">BEGIN PROJECT RECORD ></p>';

      
            echo ' <p><b data-lang-id="128">Project name:</b> ' . $array["name"] . '</p>';
            echo ' <p><b data-lang-id="127">Started:</b> ' . $array["start"] . '</p>';
            echo ' <p><b data-lang-id="129">Short Description:</b> ' . $array["description"] . '</p>';
            echo ' <p><b data-lang-id="130">End:</b> ' . $array["project_end"] . '</p>';
            echo ' <p><b data-lang-id="131">Briks Required:</b> ' . $array["briks_required"] . '</p>';
            echo ' <p><b data-lang-id="132">Project Phase:</b> ' . $array["project_phase"] . '</p>';
            echo ' <p><b data-lang-id="133">Percent Complete:</b> <i>' . $array["project_perc_complete"] . '</i>&#8202;%</p>';
            echo ' <p><b data-lang-id="134">Community:</b> ' . $array["community"] . '</p>';
            echo ' <p><b data-lang-id="135">Project type:</b> ' . $array["project_type"] . '</p>';
            echo ' <p><b data-lang-id="136">Construction Type:</b> ' . $array["construction_type"] . '</p>';
            echo ' <p><b data-lang-id="137">Ecobricks Used:</b> ' . $array["briks_used"] . '</p>';
            echo ' <p><b data-lang-id="138">Average Brik Weight:</b> ' . $array["est_avg_brik_weight"] . '&#8202;g</p>';
            echo ' <p><b data-lang-id="139">Location:</b> ' . $array["location_full"] . '</p>';
            // echo ' <p><b data-lang-id="140">Geo:</b> ' . $array["location_geo"] . '</p>';
            echo ' <p><b data-lang-id="141">Project URL:</b> ' . $array["project_url"] . '</p>';
            echo ' <p><b data-lang-id="142">Admins:</b> ' . $array["project_admins"] . '</p>';
            echo ' <p><b data-lang-id="143">Feature Photo URL:</b> ' . $array["photo1_main"] . '</p>';
            echo ' <p><b data-lang-id="144">Photo 2:</b> ' . $array["photo2_main"] . '</p>';
            echo ' <p><b data-lang-id="145">Photo 3:</b> ' . $array["photo3_main"] . '</p>';
            echo ' <p><b data-lang-id="146">Photo 4:</b> ' . $array["photo4_main"] . '</p>';
            echo ' <p><b data-lang-id="147">Photo 5:</b> ' . $array["photo5_main"] . '</p>';
            echo ' <p><b data-lang-id="148">Estimate Total Weight:</b> ' . $array["est_total_weight"] . '&#8202;kg</p>';
            echo ' <p><b data-lang-id="149">Logged:</b> ' . $array["date_logged_ts"] . '</p>';
            echo ' <p><b data-lang-id="149b">Ready to Show:</b> ' . $array["ready_to_show"] . '</p>';
            echo ' <p data-lang-id="150"> ||| END RECORD.</p>
    
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
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">The live archive of ecobrick projects around the world.</a></p>

                <p><a class="action-btn-blue" href="build.php" data-lang-id="154">🔎 Ecobrick Applications</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">An overview of ecobrick applications.</a></p>


				</div>
			</div>';
			

	}


} else {
   


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
                
   


		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>
</body>
</html>