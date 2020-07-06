<?php
session_start();
$connection = mysqli_connect("localhost","root","","virtuablog");

if(isset($_POST['pastef'])) 
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $country = $_POST['country'];
   $phone = $_POST['phone'];
  $date = $_POST['date'];
   $picture = $_POST['photo'];


    $query = "INSERT INTO teamup (name,email,country,phone,date,picture) 
    VALUES('$name','$email','$country','$phone','$date','$picture') ";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['success'] = "Thank you for joining us!";
        header('Location: index.html');
    }else {
     $_SESSION['status'] = "You are not added, verify your info";
     header('Location: index.html');
    }
 
   } 



?> 