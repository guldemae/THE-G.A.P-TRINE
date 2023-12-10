<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">Pampanga State Agricultural University</a>

<nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="concerns.php">concerns</a>
      <p> <a href="index.php?logout='1'">logout</a> </p>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
                                          <!-- PICTURE NG BULKAN -->
<div class="heading" style="background:url(images/BULKAN.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <!-- PICTURE NG LOGO SIDE NG MISSION VISSION -->
   </div>

   <div class="content">

      <h3>HISTORY</h3>

      <p style="color: black;"> Pampanga State Agricultural University (PSAU), formerly Pampanga Agricultural College (PAC), 
         is a state university occupying a 500-hectare agricultural land in Magalang, Pampanga. The institution 
         traces back its roots to Estacion Pecuaria, an agricultural experiment station established in 1885. 
         From the station, it was renamed as Magalang Farm School.</p>

      <h3>MISSION</h3>
      <p style="color: black;"> PSAU: An agricultural University that enables and empowers employees,students and other skateholders toward greatness.</p>
      
      <h3>VISION</h3>
      <p style="color: black;">  To be a Responsive Premier State Agricultural University for Humane And Blissful Development </p>

      <h3> Core Values </h3>
      <p style="color: black;">  Community of handworking and dedicate constituents, inspired by a culture of unity and teamwork for excellence, guided by the Almighty. </p>
      
      <h3>PSAU Map Guide</h3>
      <p> <img src="images/map.png" alt=""> </p>

      <h3> PSAU Toda & Jeep Terminal </h3>
      <img src="images/toda.jpg" alt="">

   </div>


</section>

<!-- about section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
   <p style="color: black;">PSAU, Magalang, Pampanga 2011, Philippines
 	   Office of the President: officeofthepresident@psau.edu.ph
   	Office of the Vice President for Academic Affairs: vpaa@psau.edu.ph
       Office of the Admission and Registration Services: admissionsoffice@psau.edu.ph
   	Office of the Registrar: registrar@psau.edu.ph
   Office of the Graduate Studies: gs@psau.edu.ph</p>
   </div>
</section>

<!-- home offer section ends -->


<!-- footer section starts  -->

<section class="footer">
<div class="credit"> <span>Pampanga State Agricultural University - all rights reserved!</span> </div>
   
</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>

</body>
</html>