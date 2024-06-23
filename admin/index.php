<?php session_start();
if(isset($_SESSION['email'])){
    ?>
    <script>
        location.replace("admin_dashboard.php");
    </script>
    <?php
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
        <link rel="icon" href="../img/logo.png">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="../css/admin_login.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <?php
        include "../connection.php";
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $email_query = "SELECT * FROM admin WHERE Email='$email'";
                $email_q = mysqli_query($con, $email_query);
                $email_count = mysqli_num_rows($email_q);
                if($email_count > 0){
                    $user = mysqli_fetch_assoc($email_q);
                    $db_password = $user['Password'];

                    if($db_password == $password){
                        $_SESSION['email'] = $user['Email']; // Added missing semi-colon
                        ?>
                        <script>
                            location.replace("admin_dashboard.php");
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                           swal("Wrong email and password");  
                        </script>
                        <?php
                    }
                } else {
                    ?>
                    <script>
                       swal("Email not found");  
                    </script>
                    <?php
                }
            }
        ?>
        <div class="main">
            <div class="first">
                <p>Login to your account</p>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <input type="text" name="email" placeholder="Email"> <br>
                    <input type="password" name="password" placeholder="Password">
                    <a href="#">Forget password?</a>
                    
                    <input type="submit" value="Log in" class="login-btn" name="submit">
                </form>
            </div>
            <div class="second" style="background:url('../img/login_bg-01.jpg')">
                <!-- <img src="./img/login_bg-01.jpg" alt=""> -->
            </div>
        </div>
    </body>
</html>
