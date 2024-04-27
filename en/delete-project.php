<?php
// Include the database and error handling setup
include '../ecobricks_env.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete_project' && isset($_POST['project_id'])) {
    $project_id = $_POST['project_id'];

    // Prepare the SQL statement for deletion
    $deleteStmt = $conn->prepare("DELETE FROM tb_projects WHERE project_id = ?");
    $deleteStmt->bind_param("i", $project_id);
    if ($deleteStmt->execute()) {
        echo "<script>alert('Project has been successfully deleted.'); window.location.href='projects_list.php';</script>";
    } else {
        echo "<script>alert('Error deleting project: " . $deleteStmt->error . "');</script>";
    }
    $deleteStmt->close();
    exit; // Stop script execution after handling the request
}
?>
