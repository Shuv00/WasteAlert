<?php 
session_start();
    if(isset($_SESSION['id'])==false){
        ?>
        <script>
            location.replace("login.php");
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a complain</title>
    <link rel="icon" href="./img/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="./css/complain.css?<?php echo time(); ?>"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>


<body >
    <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center bg-gray-100 ">
        <div class="bg-white border rounded p-8 shadow">
            <p class="text-gray-700 text-2xl font-bold">Submit your complain now</p> <br>
            <form action="" method="POST"> 
        <input type="text" name="type" id="" placeholder="Complain type"  class="p-2 w-full border border-gray-300 rounded shadow-sm focus:outline-none focus:ring focus:ring-green-400"> <br> <br>
        <input type="text" name="description" id="description" placeholder="Description" class="p-2 py-6 w-full border border-gray-300 rounded shadow-sm focus:outline-none focus:ring focus:ring-green-400"> <br> <br>
        <input type="text" name="location" id=""placeholder="Enter your location" class="p-2  w-full border border-gray-300 rounded shadow-sm focus:outline-none focus:ring focus:ring-green-400" > <br> <br>
        <input type="submit" value="Submit"name="submit"  class="p-2 bg-green-600 text-l font-md text-white rounded shadow-md cursor-pointer hover:bg-green-800">

       </form>
            </div>
    </div>
    <?php
include 'connection.php';
    if(isset($_POST['submit'])){
        $userid = $_SESSION['id'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $update_status = "not solved";
        $date = date(DATE_RFC822);
        $insert_query = "INSERT into complain(userid, type, description, location, updates_status, date) values('$userid', '$type', '$description', '$location', '$update_status', '$date'  )";
        $query = mysqli_query($con, $insert_query);
        if($query){
            ?>
                        <script>
                           swal("complain submited, wait for the update");  
                          
                        </script>
                        <?php
        }
        

    
        

    }
?>
</body>
</html>