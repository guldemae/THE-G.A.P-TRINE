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
   <title>concerns</title>

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
   <h1 class="heading-title">order</h1>
   <form action="concerns.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span style="color: black;">name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span style="color: black;">email :</span>
            <input type="email" placeholder="enter your email" >
         </div>
         <div class="inputBox">
            <span style="color: black;">phone :</span>
            <input type="number" placeholder="enter your number" >
         </div>
         <div class="inputBox">
            <span style="color: black;">address :</span>
            <input type="text" placeholder="enter your address" >
         </div>
         <div class="inputBox">
            <span style="color: black;">whats order</span>
            <input type="text" placeholder="whats order" >
         </div>
         <div class="inputBox">
            <span style="color: black;">  how many :</span>
            <input type="number" placeholder="how many :">
         </div>
         <div class="inputBox">
            <input type="submit" value="submit" class="btn">
         </div>
      </div>
   </form>
</section>

<section class="booking">
   <h1 class="heading-title">concerns</h1>
   <form action="concerns.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span style="color: black;">name :</span>
            <input type="text" placeholder="enter your name" >
         </div>
         <div class="inputBox">
            <span style="color: black;">email :</span>
            <input type="email" placeholder="enter your email" >
         </div>
         <div class="inputBox">
            <span style="color: black;">phone :</span>
            <input type="number" placeholder="enter your number">
         </div>
         <div class="inputBox">
            <span style="color: black;">address :</span>
            <input type="text" placeholder="enter your address">
         </div>
         <div class="inputBox">
            <span style="color: black;">about</span>
            <input type="text" placeholder="about">
         </div>
         <div class="inputBox">
            <span style="color: black;">message </span>
            <input type="text" placeholder="message :">
         </div>
         <div class="inputBox">
            <input type="submit" value="submit" class="btn">
         </div>
      </div>
   </form>
</section>

<!-- home offer section starts  -->
<section class="home-offer">
   <div class="content">
      <p style="color: black;"> PSAU FRESHMEN ROAD TO CONCERN NEWS & UPDATES </P>
      <p style="color: black;">PSAU, Magalang, Pampanga 2011, Philippines
         Office of the President: officeofthepresident@psau.edu.ph
         Office of the Vice President for Academic Affairs: vpaa@psau.edu.ph
         Office of the Admission and Registration Services: admissionsoffice@psau.edu.ph
         Office of the Registrar: registrar@psau.edu.ph
         Office of the Graduate Studies: gs@psau.edu.ph
      </p>
   </div>
</section>

<!-- home offer section ends -->
<!-- footer section starts  -->
<section class="footer">
   <div class="credit"> <span>Pampanga State Agricultural University - all rights reserved!</span> </div>
</section>

<!-- footer section ends -->




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
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>
</body>
</html>