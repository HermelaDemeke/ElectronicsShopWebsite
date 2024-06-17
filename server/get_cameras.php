<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product WHERE product_category='Camera' ");
$statement->execute();
$camera = $statement->get_result();
?>