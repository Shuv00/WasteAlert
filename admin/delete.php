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
<?php
include '../connection.php';
$id = $_GET['id'];
$d_query = "DELETE from registration  where Id='$id' ";
mysqli_query($con, $d_query);
?>
<script>
    location.replace("admin/user_managment.php");
</script>
<?php

?>