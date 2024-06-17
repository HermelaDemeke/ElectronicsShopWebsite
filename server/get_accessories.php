<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product WHERE product_category='Accessories' ");
$statement->execute();
$accessories = $statement->get_result();
?>