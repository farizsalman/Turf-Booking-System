<?php
include 'connection.php';
if(isset($_POST['mail'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['mob'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $mob=$_POST['mob'];
            $sql3=mysqli_query($conn,"insert into mail(name,email,mob,message) values('$name','$email','$mob','$message')");
            if($sql3){
              echo "<script>window.location.href='contact.php'; </script>";
              echo "<script>alert('login id is '$log_id'');</script>";
            }else{
              header("Location: contact.php");
              exit();
            }
        }
    }
// }
?>
<head>
<meta charset="UTF-8" />
<title>Take Your Turf</title>
<link rel="shortcut icon" href="emblem.png" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="about.css">
</head>

<body>
<header>
  
  <div class="main">

    <div class="logo">
    <img src="logo.png" alt="">
    </div>
    <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Logout</a></li> 
    </ul>
</div>
</header>
  <section>
    <h2>Contact Us</h2>
    <p>
      Have questions or need assistance? Feel free to get in touch with us using the contact form below.
    </p>

    <form action="" method="POST">
      <label for="name">Your Name:</label>
      <input type="text"  name="name" required>

      <label for="email">Your Email:</label>
      <input type="email"  name="email" required>

      <label for="mob">Your Mobilenumber:</label>
      <input type="text"  name="mob" required>

      <label for="message">Your Message:</label>
      <textarea  name="message" rows="4" required></textarea>
    
      <input type="submit" name ="mail" value="Submit">
      </form>
  </section>

  <footer>
    &copy; 2023 Take Your Turf. All rights reserved.
  </footer>
</body>
</html>