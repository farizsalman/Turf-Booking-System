<?php
include 'connection.php';

if(isset($_POST['login'])){

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Take Your Turf</title>
<link rel="shortcut icon" href="emblem.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Your Turf</title>
    <link rel="stylesheet" href="home.css">

</head>
<body>

    <header>
  
      <div class="main">

        <div class="logo">
        <img src="logo.png" alt="">
        </div>
        <ul>
       <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#turfsc2">Tournaments</a></li>
            <li><a href="#turfsc">Turfs</a></li>
            <li><a href="login.php">Logout</a></li> 
        </ul>
    </div>

    <div class="title">
      <h1>BOOK YOUR TURF</h1>
    </div>

    <div class="button">
    <a href="#turfsc" class="btn">BOOK NOW</a>
  </div>
    </header>

<!------------TURFS new section ---------------->

<img src="2.jpg" alt="" srcset="" width="100%" height="auto">

<form action="" method="post">
<section class="turfsection" id="turfsc">
    <div class="title2">
    <h1>AVAILABLE TURFS</h1>
    <div class="line"></div>
  </div>
<div class="row">
  <div class="col">
    <img class="turfimg" src="Turf 1.JPG" alt="">
   <h4>Lakana Perinthalmanna</h4>
   <p>7s  Available</p>
   <p>Per Hour Rate:Rs1800</p>
   <a href="book.php" class="ctn" value="1">BOOK NOW</a>
  </div>

  <div class="col">
    <img  class="turfimg" src="Turf 2.JPG" alt="">
   <h4>Era Puthanangadi</h4>
   <p>5s Available</p>
   <p>Per Hour Rate:Rs800</p>
   <a href="book2.php" class="ctn">BOOK NOW</a>
  </div>

  <div class="col">
    <img class="turfimg" src="Turf 3.JPG" alt="">
   <h4>Greens Turf Perinthalmanna</h4>
   <p>7s and 5s Available</p>
   <p>Per Hour Rate:Rs1100</p>
   <a href="book3.php" class="ctn">BOOK NOW</a>
  </div>

  <div class="col">
    <img class="turfimg" src="Turf 4.JPG" alt="">
   <h4>Club Arena Melattur</h4>
   <p>7s and 5s Available</p>
   <p>Per Hour Rate:Rs1200</p>
   <a href="book4.php" class="ctn">BOOK NOW</a>
  </div>
</div>
</section>
</form>

<img src="3.jpg" alt="" srcset="" width="100%" height="auto">

<form action="" method="post">
<section class="tourneysection" id="turfsc2">
  <div class="title2">
    <h1>UPCOMING TOURNAMNETS</h1>
    <div class="line"></div>
  </div>
<div class="row">
  <div class="col2">
    <img class="tourneyimg" src="turn1.jpg" alt="">
   <h4>Panthattam</h4>
   <p> Date:12/12/2023</p>
   <p> Prize:10K</p>
   <a href="#" class="ctn">REGISTER NOW</a>
  </div>

  <div class="col2">
    <img class="tourneyimg" src="Turn2.JPG" alt="">
   <h4>Kaallumala Kali</h4>
   <p>Date:20/12/2023</p>
   <p> Prize:5K</p>
   <a href="#" class="ctn">REGISTER NOW</a>
  </div>


  <div class="col2">
    <img class="tourneyimg" src="Turn3.JPG" alt="">
   <h4>SoftBall Cricket tourney</h4>
   <p>Date:26/12/2023</p>
   <p> Prize:4K</p>
   <a href="#" class="ctn">REGISTER NOW</a>
  </div>
</div>

</section>
</form>
<footer>
    &copy; 2023 Take Your Turf. All rights reserved.
  </footer>
</body>
</html>
