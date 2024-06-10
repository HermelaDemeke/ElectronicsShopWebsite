<?php
include('connection.php');
$statement=$conn->prepare("SELECT * FROM product LIMIT 4");
$statement->execute();
$feature_pro = $statement->get_result();
?>