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
	include '../ssp.class.php';

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
			</div>;'
			
			?>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>
</body>
</html>