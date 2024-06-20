<?php
// Include database connection file
include_once "../server/connection.php";

// Check if the id parameter is set in the URL
if (isset($_GET["id"])) {
    // Get the product ID from the URL
    $order_id = $_GET["id"];

    // Fetch the product data from the database
    $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $result = $conn->query($sql);
    $order = $result->fetch_assoc();

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the updated form data
      //  $order_id = $_POST['order_id'];
        $order_cost = $_POST['order_cost'];
        $order_status = $_POST['order_status'];
        $user_id = $_POST['user_id'];
        $user_phone = $_POST['user_phone'];
        $user_city = $_POST['user_city'];
        $user_address = $_POST['user_address'];
        $order_date = $_POST['order_date'];
    

        // Prepare and execute the SQL query to update the product
        $sql = "UPDATE orders SET order_cost = '$order_cost', order_status = '$order_status'
        , user_id = '$$user_id', user_phone = '$user_phone', user_city = '$user_city', 
        user_address = '$user_address', order_date = '$order_date' WHERE order_id = '$order_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Product updated successfully.";
            header('location:order.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Error: Product ID not provided.";
    exit;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Order - MHD Electronics Shop</title>
</head>
<body>
    <h1>Edit Order</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=".$order_id;?>" enctype="multipart/form-data">
        Order Cost: <input type="text" name="order_cost" required value="<?php echo $order['order_cost'];?>"><br><br>
        Order Status: <input type="text" name="order_status" required value="<?php echo $order['order_status'];?>"><br><br>
        User Id: <input type="text" name="user_id" required value="<?php echo $order['user_id'];?>"><br><br>
        User Phone: <input type="number" name="user_phone" step="0.01" required value="<?php echo $order['user_phone']; ?>"> <br><br>
        User City: <input type="text" name="user_city"value="<?php echo $order['user_city']; ?>"><br><br>
        User Address: <input type="text" name="user_address" required value="<?php echo $order['user_address']; ?>"><br><br>
        Order Date: <input type="text" name="order_date" required value="<?php echo $order['order_date']; ?>"><br><br>
        <input type="submit" name="id" value="Update Order">
    </form>
    <br>
    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>