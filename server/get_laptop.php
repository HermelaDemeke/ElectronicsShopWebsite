<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product WHERE product_category='Laptop' ");
$statement->execute();
$laptop = $statement->get_result();
?>