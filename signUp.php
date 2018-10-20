<?php

  $link = mysqli_connect("localhost", "root", "", "demo");
  if( mysqli_connect_error()){
    die("Connection to database failed");
  }

  if(array_key_exists("email", $_POST) OR array_key_exists("pwd", $_POST)){

    if($_POST["email"] == '')
      print_r("Email Address is required<br>");


    elseif($_POST["pwd"] == '')
      print_r("Password is required");

    else{
      $query = "SELECT * FROM  `users2` WHERE `email` = '".$_POST['email']."'";
      $result = mysqli_query($link, $query);

      if(mysqli_num_rows($result) > 0){

        print_r("The Username has already been taken");

      }
      else{


      	$regno = mysqli_real_escape_string($link, $_POST["regno"]);
      	$fname = mysqli_real_escape_string($link, $_POST["fname"]);
      	$lname = mysqli_real_escape_string($link, $_POST["lname"]);
      	$mobnum = mysqli_real_escape_string($link, $_POST["phone"]);
      	$email = mysqli_real_escape_string($link, $_POST["email"]);
      	$pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
      	

        $query = "INSERT INTO users2(`email`, `pwd`, `regno`, `fname`, `lname`, `phone`) values ('".$email."', '".$pwd."','".$regno."','".$fname."','".$lname."','".$mobnum."')";

        echo "Sign up successfull";


        $result = mysqli_query($link, $query);

      }
    }
  }
?>