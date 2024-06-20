<?php
// Include database connection file
include_once "../server/connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
   // $product_id=$_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_category = $_POST["product_category"];
    $product_description = $_POST["product_description"];
    $product_image = $_FILES["product_image"]["name"];
    $product_image2 = $_FILES["product_image2"]["name"];
    $product_image3 = $_FILES["product_image3"]["name"];
    $product_image4 = $_FILES["product_image4"]["name"];
    $product_price = $_POST["product_price"];
    $product_special_offer = $_POST["product_special_offer"];
    $product_color = $_POST["product_color"];

    // Move the uploaded image to the assets/images folder
    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
    
    $target_file1 = $target_dir . basename($_FILES["product_image2"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file1);

    $target_file2 = $target_dir . basename($_FILES["product_image3"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file2);

    $target_file3 = $target_dir . basename($_FILES["product_image4"]["name"]);
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file3);
    // Prepare and execute the SQL query to insert the new product
    $sql = "INSERT INTO product (product_name, product_category, product_description, product_image,product_image2,product_image3,product_image4, product_price, product_special_offer, product_color)
            VALUES ('$product_name', '$product_category', '$product_description', '$product_image','$product_image2','$product_image3','$product_image4', $product_price, '$product_special_offer', '$product_color')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product - MHD Electronics Shop</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

h1 {
  text-align: center;
  color: #333;
  margin-top: 30px;
}

form {
  background-color: white;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 600px;
  margin: 0 auto;
}

input[type="text"],
textarea,
input[type="number"],
input[type="file"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: block;
  margin: 0 auto;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

a {
  display: block;
  text-align: center;
  margin-top: 20px;
  color: #333;
  text-decoration: none;
}

a:hover {
  color: #4CAF50;
}
    </style>
</head>
<body>
    <h1>Add Product</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        Product Name: <input type="text" name="product_name" required><br><br>
        Product Category: <input type="text" name="product_category" required><br><br>
        Product Description: <textarea name="product_description" required></textarea><br><br>
        Product Image: <input type="file" name="product_image" required><br><br>
        Product Image2: <input type="file" name="product_image2" required><br><br>
        Product Image3: <input type="file" name="product_image3" required><br><br>
        Product Image4: <input type="file" name="product_image4" required><br><br>
        Product Price: <input type="number" name="product_price" step="0.01" required><br><br>
        Product Special Offer: <input type="text" name="product_special_offer"><br><br>
        Product Color: <input type="text" name="product_color" required><br><br>
        <input type="submit" name="submit" value="Add Product">
    </form>
    <br>
    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>