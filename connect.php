<?php

  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['number'];

  //Database connection
  $conn = new mysqli('localhost' , 'root' ,'' ,'test');
  if($conn->connect_error) {
    die('connection Failed : '.$conn->connect-error);

  } else {
     $stmt = $conn->prepare("insert into registration( firstName,lastName,gender,email,password,number)
      values(?,?,?,?,?,?)");
      $stmt->bind_param("sssssi" ,$FirstName,$LastName,$gender,$email,$password , $number);
      $stmt->execute();
      echo "regitration Successfully...You will receive a message in email from International Scholorship Company";
      $stmt->close();
      $conn->close();
  }
?>