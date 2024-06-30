<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M'); // Increase memory limit

include '../ecobricks_env.php';

$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['training_id'])) {
    $training_id = $_POST['training_id'];
    include '../project-photo-functions.php';

    // Handle training deletion
    if (isset($_POST['action']) && $_POST['action'] == 'delete_training') {
        $deleteResult = deleteTraining($training_id, $conn);
        if ($deleteResult === true) {
            echo "<script>alert('Training has been successfully deleted.'); window.location.href='add-training.php';</script>";
            exit;
        } else {
            echo "<script>alert('" . $deleteResult . "');</script>";
            exit;
        }
    }

    $upload_dir = '../trainings/photos/';
    $thumbnail_dir = '../trainings/tmbs/';

    $db_fields = [];
    $db_values = [];
    $db_types = "";

    // Upload photos from training_photo0_main to training_photo6_main
    for ($i = 0; $i <= 6; $i++) {
        $file_input_name = "training_photo{$i}_main";
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] == UPLOAD_ERR_OK) {
            $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
            $new_file_name_webp = 'training-' . $training_id . '-' . $i . '.webp';
            $targetPath = $upload_dir . $new_file_name_webp;

            if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 88)) {
                createNonSquareThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 250, 250, 77);
                $full_urls[] = $targetPath;
                $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp;
                $main_file_sizes[] = filesize($targetPath) / 1024;
                $thumbnail_file_sizes[] = filesize($thumbnail_dir . $new_file_name_webp) / 1024;

                array_push($db_fields, "training_photo{$i}_main", "training_photo{$i}_tmb");
                array_push($db_values, $targetPath, $thumbnail_dir . $new_file_name_webp);
                $db_types .= "ss";
            } else {
                $error_message .= "Error processing image {$i}. Please try again.<br>";
            }
        }
    }

    if (!empty($db_fields) && empty($error_message)) {
        // Fetch the briks_made and avg_brik_weight for the current training
        $fetch_sql = "SELECT briks_made, avg_brik_weight FROM tb_trainings WHERE training_id = ?";
        $fetch_stmt = $conn->prepare($fetch_sql);
        $fetch_stmt->bind_param("i", $training_id);
        $fetch_stmt->execute();
        $fetch_stmt->bind_result($briks_made, $avg_brik_weight);
        $fetch_stmt->fetch();
        $fetch_stmt->close();

        // Calculate est_plastic_packed in kg
        $est_plastic_packed = round(($briks_made * $avg_brik_weight) / 1000, 1);

        array_push($db_fields, "training_logged", "ready_to_show", "est_plastic_packed");
        array_push($db_values, date("Y-m-d H:i:s"), 1, $est_plastic_packed);
        $db_types .= "sis";

        $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
        $update_sql = "UPDATE tb_trainings SET {$fields_for_update} WHERE training_id = ?";
        $db_values[] = $training_id;
        $db_types .= "i";

        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param($db_types, ...$db_values);
        if (!$update_stmt->execute()) {
            $error_message .= "Database update failed: " . $update_stmt->error;
        }
        $update_stmt->close();
    }

    if (!empty($error_message)) {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
        exit;
    } else {
        $response = array(
            'training_id' => $training_id,
            'full_urls' => $full_urls,
            'thumbnail_paths' => $thumbnail_paths,
            'main_file_sizes' => $main_file_sizes,
            'thumbnail_file_sizes' => $thumbnail_file_sizes
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

?>