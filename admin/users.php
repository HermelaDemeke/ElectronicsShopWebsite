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
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
            <th>User Id</th>
            <th>User name</th>
            <th>User email</th>
            <th>User password</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];
           
        ?>
            <tr>
               
                <td><?php echo  $user_id; ?></td>
                <td><?php echo  $user_name; ?></td>
                <td><?php echo   $user_email; ?></td>
                <td><?php echo  $user_password; ?></td>
               
                <td>
                    <a href="edit.php?id=<?php echo $order_id; ?>">Edit</a>
                    <a href="delete.php?delete_id=<?php echo $order_id; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php">Logout</a>

</body>
</html>