<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/registration.css">
    <title>Registration Page</title>
    <script src="script.js"></script>
    <link rel="icon" href="./img/logo.png">

</head>
<body>
    
    <div class="main">
    <div class="first">
    </div>
    <div class="second">
        <div class="f-text">
            <div class="welcome">
                Welcome to 
            </div>
            <div class="waste-text">
                <!-- WasteAlert -->
                <p id="waste_text"></p>
                <script>
                                
                var string = "WasteAlert"; /* type your text here */
                var array = string.split("");
                var timer;

                function frameLooper () {
                    if (array.length > 0) {
                        document.getElementById("waste-text").innerHTML += array.shift();
                    } else {
                        clearTimeout(timer);
                            }
                    loopTimer = setTimeout('frameLooper()',70); /* change 70 for speed */

                }
                frameLooper();
                </script>
            </div>
        </div>
        <p class="sign-text">Sign Up</p>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="handlesubmit()" method="POST">
            <input type="text" placeholder="Name" value="" class="name" required name="name">  <br>
            <input type="email" placeholder="Email Address" value="" class="email" required name="email"> <br>
            <input type="password" placeholder="Password" value="" class="password" name="password"> <br>
            <input type="password" placeholder="Confirm Password" value="" class="c-password" name="cpassword"> <br>
            <input type="text" placeholder="Phone number" value="" class="phone-number" name="phone_number"> <br>
            <input type="text" placeholder="Address" value="" class="address" name="address"> <br>
              
            <div class="pass-text"></div><br>
           
            <input type="submit"  class="submit" value="Sign Up" name="submit"> <br>
        </form>
        <button class="registration-btn"><a href="login.html">Alreay have a account?</a></button>
    </div> 
</div>
</body>
<!-- code for send data to database -->
<?php
    include 'connection.php';
    if(isset($_POST['submit']) && ($_POST['password'] == $_POST['cpassword'])){
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];
        $address =$_POST['address'];
        $email_query = "SELECT * from registration WHERE Email='$email'";
        $email_q = mysqli_query($con, $email_query);
        $email_count = mysqli_num_rows($email_q);
        if($email_count==0){
            $hash_pass = password_hash($password, PASSWORD_BCRYPT );
            $query = "INSERT INTO registration(Name , Email, Password, Address, Phone_number) values('$name', '$email', '$hash_pass', '$address', '$phone_number')";
            mysqli_query($con, $query);
            ?>
            <script>
                location.replace("login.php");
            </script>
                
            <?php
        }
        else {
            echo "already exist";
        }
        
       }
?>
</html>