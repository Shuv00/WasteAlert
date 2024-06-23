<?php 
session_start();
if(isset($_SESSION['name'])==false){
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
    <title>WasteAlert</title>
	<link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
	<link href="scrpit.js">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
    <!-- nav start here -->
    <div class="main-nav" style="background:url('./img/nav_bg.png')"  >
    <div class="nav">
        <div class="logo">
           <a href="index.html"> <img src="./img/logo.png" alt=""></a>
        </div>
        <div class="nav-bar">
            <a href="#">HOME</a>
            <a href="index.html">SUBMIT COMPLIAN</a>
            <a href="#">NOTICE</a>
            <a href="#">TRACK TRASHVAN</a>
            <a href="#">ABOUT US</a>
        </div>
        <div class="btn-nav">
            <button>
                <a href="logout.php">LOGOUT</a>
            </button>
            <button><a href="user_dashboard.php">VIEW PROFILE</a></button>
        </div>
        
    </div>
    <div class="text">
        <p>
            RELIENCE <br>
            & AFFORABLE <br>
            WASTE SERVICES
        </p>
        <button><a href="complain.php">SUBMIT COMPLAIN</a></button>
    </div>
    </div>
    <!-- nav end here -->
    <div class="body-text">
        WasteAlert is a groundbreaking and initiative that harness the power of technology <br>
        to transform waste management within chittagong city
    </div>
    <div class="imp">
       <p>Our Impact</p>
    </div>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&display=swap');
	.card{
		display:flex;
		gap:10px;
	}
	.card-data{
		height:150px;
		width: 150px;
		border:3px solid #F0F2F5;
		align-items:center;
		text-align:center;
		margin:auto 0;
		
	}
	.card-data svg{
		margin-top:30px;
	}
	.card-data p{
		color:#528D4B;
		font-family:Inter;
		font-size:20px;
		font-weight:bold;

	}
</style>
<script>
  AOS.init();
</script>
   <div class="card-v1">
   <div class="card-data-v1" data-aos="fade-up">
   <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#528D4B"><path d="M0-240v-53q0-38.57 41.5-62.78Q83-380 150.38-380q12.16 0 23.39.5t22.23 2.15q-8 17.35-12 35.17-4 17.81-4 37.18v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-19.86-3.5-37.43T765-377.27q11-1.73 22.17-2.23 11.17-.5 22.83-.5 67.5 0 108.75 23.77T960-293v53H780Zm-480-60h360v-6q0-37-50.5-60.5T480-390q-79 0-129.5 23.5T300-305v5ZM149.57-410q-28.57 0-49.07-20.56Q80-451.13 80-480q0-29 20.56-49.5Q121.13-550 150-550q29 0 49.5 20.5t20.5 49.93q0 28.57-20.5 49.07T149.57-410Zm660 0q-28.57 0-49.07-20.56Q740-451.13 740-480q0-29 20.56-49.5Q781.13-550 810-550q29 0 49.5 20.5t20.5 49.93q0 28.57-20.5 49.07T809.57-410ZM480-480q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm.35-60Q506-540 523-557.35t17-43Q540-626 522.85-643t-42.5-17q-25.35 0-42.85 17.15t-17.5 42.5q0 25.35 17.35 42.85t43 17.5ZM480-300Zm0-300Z"/></svg>
		<p>100+ Teams</p>
	</div>
	<div class="card-data-v1" data-aos="fade-up">
	<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#528D4B"><path d="m368-592 89-147-59-98q-12-20-34.5-20T329-837l-98 163 137 82Zm387 272-89-148 139-80 64 107q11 17 12 38t-9 39q-10 20-29.5 32T800-320h-45ZM640-40 480-200l160-160v80h190l-58 116q-11 20-30 32t-42 12h-60v80Zm-387-80q-20 0-36.5-10.5T192-158q-8-16-7.5-33.5T194-224l34-56h172v160H253Zm-99-114L89-364q-9-18-8.5-38.5T92-441l16-27-68-41 219-55 55 220-69-42-91 152Zm540-342-219-55 69-41-125-208h141q21 0 39.5 10.5T629-841l52 87 68-42-55 220Z"/></svg>
		<p>60+ Trash Van</p>
	</div>
	<div class="card-data-v1" data-aos="fade-up">
	<svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill="#528D4B"><path d="M120-120v-560h160v-160h400v320h160v400H520v-160h-80v160H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z"/></svg>
		<p>Clean City</p>
</div>

</div>
<div class="ani">
	<img style="width:100%;"src="./img/animation3.gif" alt="">
</div>
<!-- footer -->
<div class="footer">
	<ul>
		<li><a href="index.php">Home</a></li>
	</ul>
</div>
<!-- end line -->
  

</body>
</html>