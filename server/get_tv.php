<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product WHERE product_category='tv' ");
$statement->execute();
$tv = $statement->get_result();
?>