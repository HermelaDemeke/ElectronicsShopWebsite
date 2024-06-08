<?php
include('connection.php');
$sql="SELECT * FROM product LIMIT 4";
$statement=$conn->prepare($sql);
$statement->execute();
$feature_pro = $statement->get_result();
?>