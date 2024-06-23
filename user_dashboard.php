<!-- <?php session_start();
if(isset($_SESSION['name'])==false){
    ?>
    <script>
        location.replace("login.php");
    </script>
    <?php
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./img/logo.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="./css/user_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
    


    
    <div class="welcome" style="margin:0 auto">
        
     <div >  <img src="./img/animation2.gif" alt=""></div> 
     
     <p style="font-size:20px; text-align:center; font-weight:bold;">
            Hello, welcome <br> <?php
                echo $_SESSION['name'];
            ?>
        </p>
    </div> </div>
</body>
</html>