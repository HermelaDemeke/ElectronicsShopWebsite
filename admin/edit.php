<?php
// Include database connection file
include_once "../server/connection.php";

// Check if the id parameter is set in the URL
if (isset($_GET["id"])) {
    // Get the product ID from the URL
    $product_id = $_GET["id"];

    // Fetch the product data from the database
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the updated form data
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

        // Prepare and execute the SQL query to update the product
        $sql = "UPDATE product SET product_name = '$product_name', product_category = '$product_category'
        , product_description = '$product_description', product_image = '$product_image', product_price = $product_price, 
        product_special_offer = '$product_special_offer', product_color = '$product_color' WHERE product_id = '$product_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Product updated successfully.";
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
    <title>Edit Product - MHD Electronics Shop</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=".$product_id;?>" enctype="multipart/form-data">
        Product Name: <input type="text" name="product_name" required value="<?php echo $product['product_name'];?>"><br><br>
        Product Category: <input type="text" name="product_category" required value="<?php echo $product['product_category'];?>"><br><br>
        Product Description: <textarea name="product_description" required><?php echo $product['product_description']; ?></textarea><br><br>
        Product Image: <input type="file" name="product_image" required ><br><br>
        Product Image2: <input type="file" name="product_image2" required ><br><br>
        Product Image3: <input type="file" name="product_image3" required ><br><br>
        Product Image4: <input type="file" name="product_image4" required ><br><br>
        Product Price: <input type="number" name="product_price" step="0.01" required value="<?php echo $product['product_price']; ?>"> <br><br>
        Product Special Offer: <input type="text" name="product_special_offer"value="<?php echo $product['product_special_offer']; ?>"><br><br>
        Product Color: <input type="text" name="product_color" required value="<?php echo $product['product_color']; ?>"><br><br>
        <input type="submit" name="id" value="Update Product">
    </form>
    <br>
    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>