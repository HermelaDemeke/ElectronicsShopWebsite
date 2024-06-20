<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin home</title>
	 <link rel="stylesheet" href="adminhome.css"> 
	<style>
		/* General Styles */
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
 background-image: url(../assets/images/coder\ image.jpg);
}

/* Buttons Container */
.butons {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  gap: 20px;
}

/* Navigation Buttons */
.admin {
  display: inline-block;
  padding: 16px 32px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  font-size: 18px;
  transition: background-color 0.3s ease;
}

.admin:hover {
  background-color: #45a049;
}

/* Hover Effect */
.admin:before {
  content: "";
  position: absolute;
  width: 0px;
  height: 0px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.3);
  transform: translate(-50%, -50%);
  transition: width 0.3s, height 0.3s;
}

.admin:hover:before {
  width: 200px;
  height: 200px;
}
	</style>

</head>
<body>
<?php
session_start();

// Check if the user has a valid session
if (isset($_SESSION['username'])) {
    // User has a valid session, allow access to the admin home page
?>

    <div class="butons">
          <div><a id="" class="admin" href="../index.php">Home</a></div>
          <div><a id="" class="admin" href="add_Product.php">Create Product</a></div>
          <div> <a id="" class="admin"  href="admin_dashboard.php">View Product</a></div>
          <div><a id="" class="admin"  href="order.php">Orders</a></div> 
         <div> <a id="" class="admin"  href="Users.php"> Users</a></div>  

        </div>
		<?php
} else {
    // User does not have a valid session, redirect to the login page
    header("Location: index.php");
    exit;
}
?>
	<script src="admin.js"></script>
	</body>
	</html>