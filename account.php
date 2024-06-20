<?php
session_start();

include('server/connection.php');
/*
if(isset($_SESSION['logged_in'])){
    header('location:login.php');
    exit;
}
    */
if(isset($_GET['logout'])){
    if(isset($_SESSION['logged_in'])){
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        header('location:login.php');
        exit;
    }
}

if(isset($_POST['change_password'])){
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $user_email= $_SESSION['user_email'];

 //password don't match
    if ($password !== $confirmPassword) {
        header('location: account.php?error= password donot match');
    } 
    // if password is less than 8character
    else if (strlen($password) < 8) {
        header('location: account.php?error= password must be at least 8 character');
    } 
    //if there is no error
    else{
      $stmt=  $conn->prepare("UPDATE users SET user_password = ? WHERE user_email=?");
$stmt->bind_param('ss',md5($password),$user_email);

if($stmt->execute()){
    header('location:account.php? message=password has been updated successfully');
}else
header('location:account.php? error=password is not updated');

    }
}



//get orders

if(isset($_SESSION['logged_in'])){
    $user_id = $_SESSION['user_id'];
    $stmt=$conn->prepare("SELECT * FROM orders WHERE user_id = ?");
    $stmt->bind_param('i',$user_id);
    $stmt-> execute();
    $orders = $stmt->get_result();
}

?>

<?php include('outline/header.php'); ?>
<style>
    .login{
  background-image: url('assets/images/login.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

    </style>
    <!--Account-->
<section class="login">
    <div class="row">
<div class="account">
    <p style="color:green"><?php if(isset($_GET['register'])){echo $_GET['register'];} ?></p>
    <p style="color:green"><?php if(isset($_GET['login_success'])){echo $_GET['login_success'];} ?></p>
    <h3>Account info</h3>
    <hr class="">
    <div class="account-info">
<p>Name <span><?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name'];}?></span></p>
<p>Email <span><?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email'];}?></span></p>
<p><a href="#order" id="order-btn">Your Orders</a></p>
<p><a href="account.php?logout=1" id="logout-btn">Log Out</a></p>
    </div>
</div>
<div>
    <form action="account.php" id="account-form" method="POST">
        <p style ="color:red"><?php if(isset($_GET['error'])) {echo $_GET['error'];} ?></p>
        <p style ="color:green"><?php if(isset($_GET['message'])) {echo $_GET['message'];} ?></p>
        <h3>Change Password</h3>
        <hr>
        <div class="form-group">
<label for="">Password</label>
<input type="password" class="form-control" id="account-password" placeholder="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" id="account-password-confirm" placeholder="Confirmpassword" name="confirmpassword" required>
        </div>
        <div class="form-group">
<input type="submit" value="Change Password" class="btn" id="Change-pass-btn" name="change_password">
        </div>
    </form>
</div>
    </div>
</section>

<section class="orders" id="order">
    <div>
        <h2>Your Orders</h2>
        <hr>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Order Cost</th>
                <th>Order Status</th>
                <th> Order Date</th>
                <th>check out</th>
             
            </tr>
            <?php while($row = $orders->fetch_assoc()) { ?>
            <tr>
                <td>
         <p><?php echo $row['order_id'];?></p>
                </td>
                <td>
      <span>$<?php echo $row['order_cost'];?></span>
                </td>
                <td>
      <span><?php echo $row['order_status'];?></span>
                </td>

                <td>
      <span><?php echo $row['order_date'];?></span>
                </td>
                <td>
                    <form action="checkout.php" method="POST">
                        <input type="hidden" value="<?php echo $row['order_status']; ?>" name="order_status"/>
                        <input type="hidden" value="<?php echo $row['order_id']; ?>" name="order_id"/>
                        <input type="submit" class="order-detail-btn" value="details" name="detail"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>

    </div>

</section>

   <?php include('outline/footer.php'); ?>