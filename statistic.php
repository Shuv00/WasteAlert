<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" href="./css/statistic.css">
    <link rel="icon" href="./img/logo.png">

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
    <div class="card">
        <div class="card-1">
        <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill=" #FFA831"><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/></svg>
      <p>Total complain <br>
        <?php
        include 'connection.php';
            $id_user = $_SESSION['id'];
            $total_query = "SELECT * from complain where userid='$id_user' ";
            $count_total_query = mysqli_query($con, $total_query);
            $total = mysqli_num_rows($count_total_query);
            echo $total;

        ?>
      </p>
   
        </div>
        <div class="card-2">
        <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill=" #FFA831"><path d="M691-80q-78.43 0-133.72-55.28Q502-190.57 502-269t55.28-133.72Q612.57-458 691-458t133.72 55.28Q880-347.43 880-269t-55.28 133.72Q769.43-80 691-80Zm58.24-88L777-196l-75-75v-112h-39v126l86.24 89ZM180-120q-24.75 0-42.37-17.63Q120-155.25 120-180v-600q0-26 17-43t43-17h202q7-35 34.5-57.5T480-920q36 0 63.5 22.5T578-840h202q26 0 43 17t17 43v308q-15-9-29.52-15.48Q795.97-493.96 780-499v-281h-60v90H240v-90h-60v600h280q5 15 12 29.5t17 30.5H180Zm300-660q17 0 28.5-11.5T520-820q0-17-11.5-28.5T480-860q-17 0-28.5 11.5T440-820q0 17 11.5 28.5T480-780Z"/></svg>
      <p>Pending complain <br>
        <?php
        include 'connection.php';
            $id_user = $_SESSION['id'];
            $update_status = "not solved";
            $total_query = "SELECT * from complain where userid='$id_user' and updates_status='$update_status' ";
            $count_total_query = mysqli_query($con, $total_query);
            $total = mysqli_num_rows($count_total_query);
            echo $total;
        ?>
      </p>
   
        </div>
        <div class="card-3">
        <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill="#FFA831"><path d="m438-240 226-226-58-58-169 169-84-84-57 57 142 142ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
              <p>Solved complain <br>
        <?php
        include 'connection.php';
            $id_user = $_SESSION['id'];
            $update_status = "solved";
            $total_query = "SELECT * from complain where userid='$id_user' and updates_status='$update_status' ";
            $count_total_query = mysqli_query($con, $total_query);
            $total = mysqli_num_rows($count_total_query);
            echo $total;
        ?>
      </p>
   
        </div>
    </div>
</body>
</html>