<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product WHERE product_category= 'Phones' ");
$statement->execute();
$phone = $statement->get_result();
?>