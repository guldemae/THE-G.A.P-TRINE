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
   <title>package</title>

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

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">news & psau products</h1>

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
            <a href="concerns.php" class="btn">read more</a>
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
            <a href="concerns.php" class="btn">read more</a>
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
            <a href="concerns.php" class="btn">read more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mushroom.png" alt="">
         </div>
         <div class="content">
            <h3>mushroom chips</h3>
            <p>Aside from eating the vegetable in different menu ideas, mushrooms can also be best enjoyed when processed into chips that Filipinos would love to munch as favorite snacks. This product of Odessa Foods comes in 8 flavors: original, spicy, salted egg, garlic, sour cream, bbq, hot chilli, and cheese.</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/tamarind.png" alt="">
         </div>
         <div class="content">
            <h3>tamarind wine</h3>
            <p>Tamarind Wine made from the first ever sweet tamarind variety registered in the Philippines. It has a sweet and sour taste, with a hint of bitterness.</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ice.png" alt="">
         </div>
         <div class="content">
            <h3>tamarind ice cream</h3>
            <p>Here at Pampanga State Agricultural University, other than tamarind wine and tamarind juice, we also boast our very own sweet tamarind ice cream. PSAU’s tamarind ice cream is made up of the Aglibut Sweet tamarind puree that is known to be good for the heart and digestive system. Thus, this is a dream come true for ice cream lovers and health-conscious people!</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/suka.png" alt="">
         </div>
         <div class="content">
            <h3>fruit vinegar</h3>
            <p>Fruit Vinegar is a sour-tasting, acetic acid-containing liquid that can be used as a condiment or for pickling. It is produced by fermenting diluted alcoholic drinks.Utilizing the Vinegar Acetator (DOST ITDI technology) to finish the natural fermentation process and produce 4-5% acetic acid.</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/juice.png" alt="">
         </div>
         <div class="content">
            <h3>tamadarind juice</h3>
            <p>Here at Pampanga State Agricultural University, we produce organic fruit juice made from our very own plant variety - the Aglibut Sweet. It is cost-effective and has more nutritional benefits compared to the existing fruit juices available in the market.</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/home.png" alt="">
         </div>
         <div class="content">
            <h3>home made buru</h3>
            <p>Matched with a variety of some vegetables like fresh mustasa leaves, boiled eggplant, ampalaya, and okra, our “burung asan” can be a side dish for fried or grilled freshwater fish like tilapia, dalag (mudfish), and hito (catfish).</p>
            <a href="concerns.php" class="btn">order now</a>
         </div>
      </div>
   </div>


   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->


<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <p> PSAU FRESHMEN ROAD TO CONCERN NEWS & UPDATES </P>
      <p> PSAU, Magalang, Pampanga 2011, Philippines
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
</div>
</body>
</html>