<?php
session_start();

$username = "";
$password = "";
$err = "";
$conn = mysqli_connect("localhost", "root", "", "electronicsshop");

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, store the username in the session
        $_SESSION['username'] = $username;
         echo'correct';
        // Redirect the user to the admin home page
        header("Location: adminhome.php");
        
    } else {
        $err = "Username or password error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <link rel="stylesheet" href="admin.css"> 
    <script type="text/javascript" src="admin.js"></script>
</head>
<body>
    <div class="admin">
        <h1> Admin Login</h1>
        <div class="error">
            <?php echo $err; ?>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="username" placeholder="Enter username" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <section class="button">
                <input type="submit" value="Login" name="login" required id="input" >

                <input type="reset" name="reset" id="input">
            </section>
        </form>
    </div>
</body>
</html>