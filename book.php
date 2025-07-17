<?php
include 'connection.php';
if(isset($_POST['signin'])){
    if(isset($_POST['name']) && isset($_POST['time']) && isset($_POST['phonenumber']) ){
        $name=$_POST['name'];
        $email=$_POST['time'];
        $phonenumber=$_POST['phonenumber'];
            $sql1=mysqli_query($conn,"insert into book(name,time,phoneno,place) values('$name','$email','$phonenumber','Lakana Perinthalmanna')");
            if($sql1){
                echo "<script>alert('BOOKING Successfully Completed');</script>";
            echo"<script>window.location.href='home.php';</script>";
             
            }else{
                echo "<script>alert('BOOKING failed');</script>";
                echo"<script>window.location.href='book.php';</script>";
            }
        }}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<title>Take Your Turf</title>
<link rel="shortcut icon" href="emblem.png" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="signin.css">
</head>
<body>
<div class="h">
    <div class="wrapper">
        <form action="" method="POST">
            <h1>BOOK NOW</h1>
            <div class="input-box">
                <input type="text"
                placeholder="name"
                name="name" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="text" 
                placeholder="time"
                name="time" required>
            </div>
            <div class="input-box">
                    <input type="text" 
                    placeholder="phone number"
                    name="phonenumber" required>
                    <i class='bx bxs-phone' ></i>
            </div>
           
            <button type="submit" class="btn" name="signin">Submit</button>
            </form>
    </div>
</div>
</body>
</html>