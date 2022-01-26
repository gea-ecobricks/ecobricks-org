
<?php
$servername = " localhost:3306";
$username = "ecobricks_php_api_user";
$password = "12345";
$dbname = "ecobricks_msql_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>