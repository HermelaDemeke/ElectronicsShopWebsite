<?php

session_start();

include('server/connection.php');

// if user has already registered then take user to account page
/*
if(isset($_SESSION['logged_in'])){
    header('location: account.php');
    exit;
}
*/

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    //password don't match
    if ($password !== $confirmpassword) {
        header('location: register.php?error= password do not match');
    } 
    // if password is less than 8character
    else if (strlen($password) < 8) {
        header('location: register.php?error= password must be at least 8 character');
    } 
    // if there is no error
    else {
        // check whether there is a user with the same name and password
        $statement1 = $conn->prepare("SELECT count(*) FROM users where user_email=?");
        $statement1->bind_param('s', $email);
        $statement1->execute();
        $statement1->bind_result($num_rows);
        $statement1->fetch();

        // Close the prepared statement for checking email (important!)
        $statement1->close();

        if ($num_rows != 0) {
            header('location: register.php?error= user with this email has already exists');
        } else {
            //create a new user
            $statement = $conn->prepare("INSERT INTO users (user_name,user_email,user_password) VALUES (?,?,?)");
            $statement->bind_param('sss', $name, $email, md5($password)); //md5 to hash password

            //if account was created successfully
            if ($statement->execute()) {
                $user_id = $stmt->insert_id;
                $_SESSION['user_id'] =$user_id;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $name;
                $_SESSION['logged_in'] = true;
                header('location: login.php?register = You Have Registered Successfully');

                // Close the prepared statement for inserting (important!)
                $statement->close();
            } else {
                header('location: register.php?error=could not create an account');
            }
        }
    }
}
?>

<?php include('outline/header.php'); ?>
    <!--Register-->
    <section class="">
        <div class="container">
            <h2 class="">Register</h2>
            <hr>
        </div>
        <div>
            <form id="register-form" action="register.php" method="POST">
                <p style = "color: red;"><?php  if(isset( $_GET['error'])){echo $_GET['error'];}?></p>
            <div class="form-group">
                    <label>Name</label> <br>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label> <br>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label> <br>
                    <input type="password" class="form-control" id="register-password" name="password"
                        placeholder="password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label> <br>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirmpassword" placeholder="confirmpassword" required>
                </div>
                <div class="form-group"> <br>
                    <input type="submit" name="register" class="btn" id="register-btn" value="Register">
                </div>
                <div class="form-group">
                    <a id="login-url" class="btn" href="login.php">Do you have account? login</a>
                </div>
            </form>
        </div>
    </section>



   <?php include('outline/footer.php'); ?>