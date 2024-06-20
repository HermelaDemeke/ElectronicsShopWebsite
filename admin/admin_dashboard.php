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
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
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

    <h2>Products</h2>
    <table>
        <tr>
            <th>product ID</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Description</th>
            <th>Product Image</th>
            <th>Product price</th>
            <th>Product special offer</th>
            <th>Product Color</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_name = $row['product_name'];
            $product_category = $row['product_category'];
            $product_description = $row['product_description'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $product_special_offer = $row['product_special_offer'];
            $product_color = $row['product_color'];
           
        ?>
            <tr>
                <td><?php echo $product_id; ?></td>
                 <td><?php echo $product_name; ?></td>
                <td><?php echo $product_category; ?></td>
                <td><?php echo $product_description; ?></td>
                <td><img src="<?php echo "../assets/images/".$product_image;?>" style ="width:70px; height: 70px " alt=""> </td>
                <td><?php echo "$". $product_price; ?></td>
                <td><?php echo  $product_special_offer."%"; ?></td>
                <td><?php echo $product_color; ?></td>
               
                <td>
                    <a href="edit.php?id=<?php echo $product_id; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $product_id; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php">Logout</a>

</body>
</html>