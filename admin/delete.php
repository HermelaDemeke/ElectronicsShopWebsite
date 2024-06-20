
 <?php

// Initialize the session
session_start();
/*

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
    */
require"../server/connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM product WHERE product_id='$id'";
if ($conn->query($sql) === TRUE) {
    $message= "Record deleted successfully";
    $status="Deleted";
    header("location:admin_dashboard.php");
} else {
    $message="Error deleting record: " . $conn->error;
    $status="Not";
}

$conn->close();
?>







