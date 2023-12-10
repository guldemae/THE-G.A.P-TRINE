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
   <title>home</title>

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

<!-- home section starts  -->

<section class="home">

<div class="swiper home-slider">

   <div class="swiper-wrapper">

	  <div class="swiper-slide slide" style="background:url(images/logo1.jpg) no-repeat">
		 <div class="content">
			
		 <h3 style="color: yellow; text-shadow: 2px 2px 5px black;">GREETINGS, PSAU STUDENTS!</h3>
			<a href="package.php" class="btn">read more</a>
		 </div>
	  </div>

	  <div class="swiper-slide slide" style="background:url(images/psau2.jpg) no-repeat">
		 <div class="content">
			<span>explore, discover, learn</span>
			<h3>discover the new places</h3>
			<a href="package.php" class="btn">read more</a>
		 </div>
	  </div>

	  <div class="swiper-slide slide" style="background:url(images/psau3.jpg) no-repeat">
		 <div class="content">
			<span>explore, discover, learn</span>
			<h3>make your tour worthwhile</h3>
			<a href="package.php" class="btn">read more</a>
		 </div>
	  </div>
	  
   </div>

   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>

</div>

</section>

<!-- home section ends -->

<!-- home about section starts  -->

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

<h1 class="heading-title"> news</h1>

<div class="box-container">

   <div class="box">
	  <div class="image">
		 <img src="images/tokyo.jpg" alt="">
	  </div>
	  <div class="content">
		 <h3>PSAU ATTENDS PARTNERSHIP MEETINGS IN TOKYO</h3>
		 <p>Pampanga State Agricultural University attended partnership meetings with Tottori 
			University, Standard Link Ltd., and Hongo-Aerospace on November 15, 2023 in Tokyo, Japan.
			The said partnership meetings are about research collaborations on soil management, 
			energy-generating bacteria, nutraceutical research and artificial intelligence in agriculture.</p>
		 <a href="book.php" class="btn">read more</a>
	  </div>
   </div>

   <div class="box">
	  <div class="image">
		 <img src="images/heild.jpg" alt="">
	  </div>
	  <div class="content">
		 <h3>PSAU hailed as 2023 FOI Champion</h3>
		 <p>Pampanga State Agricultural University has been recognized as the 2023 (FOI) Champion under 
			the State Universities and Colleges Category, during the FOI Awards at Hilton Manila Hotel, Pasay City, on November 21, Tuesday.
			   Vice President for Administration, Business, and Finance (ABF) Mina Lyn G. 
				  Alviz and Supervising Administrative Officer (SAO) Jessie H. Licup, representing PSAU, accepted the said award.</p>
		 <a href="book.php" class="btn">read more</a>
	  </div>
   </div>
   
   <div class="box">
	  <div class="image">
		 <img src="images/industrys.jpg" alt="">
	  </div>
	  <div class="content">
		 <h3>adventure & tour</h3>
		 <p>The Bureau of Plant Industry - National Plant Quarantine Services Division held its 
			Year-end Review and Assessment at Pampanga State Agricultural University and also 
			conducted a University Tour visiting the Research, Development, and Extension (RDE) Centers, on December 6, 2023, Wednesday.
			Accompanied by Office of Business Affairs Director Ms. Elena Pineda, they visited the Mushroom Production Center, the Tamarind RDE Center, and the Bamboo and Rattan RDE Center.
			  </p>
		 <a href="book.php" class="btn">read more</a>
	  </div>
   </div>

</div>

<div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->
<section class="home-about">

<div class="image">
   <img src="images/pres.jpg" alt="">
</div>

<div class="content">
<h3 style="color: black;">About Us</h3>
<p style="color: black;">
 PSAU said that David is the first female to lead the university and the second president.
 Sinukuan Gazette, the official student publication of the university, said David’s appointment ended the two-year lack of leadership in the university.
 Before being named as president, David was the vice president for Academic Affairs and also the vice chairman of the Board of Regents.
</p>
   <a href="about.php" class="btn">read more</a>
</div>

</section>

<!-- home offer section starts  -->

<section class="home-offer">
<div class="content">
<p style="color: black;"> PSAU FRESHMEN ROAD TO CONCERN NEWS & UPDATES </P>
<p style="color: black;"> PSAU, Magalang, Pampanga 2011, Philippines
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