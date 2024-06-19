<?php
session_start();
/*
// Check if the admin is logged in, otherwise redirect to login page
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
*/
// Include database connection file
include_once "../server/connection.php";

// Fetch all products from the database
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <!-- <link rel="stylesheet" href="css/admin.css"> -->
    <style>
        table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

td {
  vertical-align: middle;
}

td img {
  max-width: 100%;
  height: auto;
}

a {
  color: blue;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

.add-product,.logout {
  display: block;
  margin-top: 20px;
  text-align: right;
}
    </style>
</head>
<body>
    <h1>MHD Electronics Shop</h1>

    <h2>Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Order Cost</th>
            <th>Order Status</th>
            <th>User Id</th>
            <th>User Phone</th>
            <th>User City</th>
            <th>User Address</th>
            <th>Order Date</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $order_id = $row['order_id'];
            $order_cost = $row['order_cost'];
            $order_status = $row['order_status'];
            $user_id = $row['user_id'];
            $user_phone = $row['user_phone'];
            $user_city = $row['user_city'];
            $user_address = $row['user_address'];
            $order_date = $row['order_date'];
           
        ?>
            <tr>
                <td><?php echo $order_id; ?></td>
                 <td><?php echo $order_cost; ?></td>
                <td><?php echo $order_status; ?></td>
                <td><?php echo  $user_id; ?></td>
                <td><?php echo  $user_phone; ?></td>
                <td><?php echo   $user_city; ?></td>
                <td><?php echo  $user_address; ?></td>
                <td><?php echo  $order_date; ?></td>
               
                <td>
                    <a href="orderedit.php?id=<?php echo $order_id; ?>">Edit</a>
                    <a href="orderdelete.php?id=<?php echo $order_id; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php">Logout</a>

</body>
</html>