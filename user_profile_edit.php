<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
   <link rel="stylesheet" href="css/user_p.css">
   <link rel="icon" href="./img/logo.png">

</head>
<?php
include 'connection.php';
$id = $_SESSION['id'];
$get_query = "SELECT * FROM registration where Id='$id'";
$query = mysqli_query($con, $get_query);
$data = mysqli_fetch_assoc($query);
?>
<body>
<div class="main">
    <div class="nav">
        <h1>User dashboard</h1>
        <div class="user-profile">
            <a href="user_profile.php">Profile</a>
</div>
<div class="complain">
            <a href="complain.php">Submit complain</a>
</div>
<div class="statistics">
            <a href="statistic.php">Statistics</a>
</div>
    <div class="logout">
            <a href="logout.php">Logout</a>
</div>
 </div>
<div class="contatiner">
    <div class="profile">
    <h1>Edit Profile</h1> <br>
    <form action="" method="POST">
        <div class="name">
        <p class="name-label">Name</p>
            <input type="text"  name="name" class="name-data" value="<?php echo $data[
                'Name'
            ]; ?>"> <br>
        </div>
        <div class="name">
        <p class="name-label">Email</p>
        <input type="text"  name="email" class="name-data" value="<?php echo $data[
            'Email'
        ]; ?>"> <br>
        <p class="name-label">Password</p>
        <input type="password"  name="password" class="name-data" > <br>

        <p class="name-label">Phone number</p>
        <input type="text"  name="phone_number" class="name-data" value="<?php echo $data[
            'Phone_number'
        ]; ?>"> <br>

        <p class="name-label">Address</p>
        <input type="text"  name="address" class="name-data" value="<?php echo $data[
            'Address'
        ]; ?>"> <br>
        </div>  <br> 
        <input type="submit" value="Save" name="submit" class="btn">
</form>
    </div>
</div> 
</div>
</div>
</body>
<?php if (isset($_POST['submit'])) {
    include 'connection.php';
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (strlen($password) == 0) {
        $password = $data['Password'];
    }
    $hash_pass = password_hash($password, PASSWORD_BCRYPT);
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $update_query = "UPDATE registration SET Name='$name', Email='$email', Password='$hash_pass', Phone_number='$phone_number', Address='$address' ";
    mysqli_query($con, $update_query);
} ?>
</html>
