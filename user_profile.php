<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
   <link rel="stylesheet" href="css/user_p.css">
   <link rel="icon" href="./img/logo.png">

</head>
<?php
include 'connection.php';
    $id= $_SESSION['id'];
    $get_query="SELECT * FROM registration where Id='$id'";
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
    <h1>User Profile</h1> <br>
        <div class="name">
        <p class="name-label">Name</p>
            <p  class="name-data"><?php echo $data['Name']; ?></p> <br>
        </div>
        <div class="name">
        <p class="name-label">Email</p>
            <p  class="name-data"><?php echo $data['Email']; ?></p>
        <br>
        <p class="name-label">Phone number</p>
            <p  class="name-data"><?php echo $data['Phone_number']; ?></p>
        <br>
        <p class="name-label">Address</p>
            <p  class="name-data"><?php echo $data['Address']; ?></p>
        </div>  <br>
       <div class="btn" style="padding:10px; width:100px"><a href="user_profile_edit.php">Edit profile</a>
    </div>
</div> 
</div>
</div>
</body>
</html>
