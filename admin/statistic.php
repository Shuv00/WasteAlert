<?php 
session_start();
if(isset($_SESSION['email'])==false){
    ?>
    <script>
        location.replace("admin/index.php");
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_statistic.css">
    <link rel="icon" href="../img/logo.png">

</head>

<body>
    
        <div class="up-nav">
            <img src="../img/logo.png" alt="" srcset="">
        </div>
    <div class="main">
    <div class="nav">
        <h1>Admin Dashboard</h1>
        <div class="nav-data" id="nav-data1" >
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg> <p><a href="#">Dashboard</a></p>
    </div>
    <div class="nav-data">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M720-440v-80h160v80H720Zm48 280-128-96 48-64 128 96-48 64Zm-80-480-48-64 128-96 48 64-128 96ZM200-200v-160h-40q-33 0-56.5-23.5T80-440v-80q0-33 23.5-56.5T160-600h160l200-120v480L320-360h-40v160h-80Zm240-182v-196l-98 58H160v80h182l98 58Zm120 36v-268q27 24 43.5 58.5T620-480q0 41-16.5 75.5T560-346ZM300-480Z"/></svg>
    <p><a href="view_complain.php">Complain</a></p>
    </div>
    <div class="nav-data">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
    <p><a href="user_managment.php">User managment</a></p>
    </div>
    <div class="nav-data" id="nav-active">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M280-280h80v-200h-80v200Zm320 0h80v-400h-80v400Zm-160 0h80v-120h-80v120Zm0-200h80v-80h-80v80ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
    <p><a href="#">Statistic</a></p>
    </div>
    <div class="nav-data">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
    <p><a href="logout.php">Statistic</a></p>
    </div>
    </div>
    <div class="body-content">
        <div class="card">
            <h1>Total Complain</h1>
            <p><?php
            include '../connection.php';
            $query = mysqli_query(  $con ,"SELECT * from complain");
            $count_total = mysqli_num_rows($query);
            echo $count_total;
            ?></p>
        </div>
        <div class="card">
        <h1>Solved Complain</h1>
            <p>
            <?php
            $s = "solved";
            $sec_query = mysqli_query($con ,"SELECT * from complain where updates_status='$s' ");
            $count_not = mysqli_num_rows($sec_query);
            echo $count_not;
            ?>
            </p>
        </div>
        <div class="card">
        <h1>Pending Complain</h1>
            <p>
            <?php
            $a = "not solved";
            $t_query = mysqli_query($con ,"SELECT * from complain where updates_status='$a' ");
            $count_yes = mysqli_num_rows($t_query);
            echo $count_yes;
            ?>
            </p>
        </div>
    </div>
    </div>
</body>
</html>