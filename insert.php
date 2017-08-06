




<?php

      $link = mysqli_connect("localhost", "root", "", "signupdb");

  

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

  
    $Name = mysqli_real_escape_string($link, $_POST['Name']);
   
	$phone = mysqli_real_escape_string($link, $_POST['phone']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
	$passwd = mysqli_real_escape_string($link, $_POST['passwd']);
	
	
    $sql = "INSERT INTO signupdb (Name, phone ,email ,passwd) VALUES ('$Name',  '$phone' ,'$email' , '$passwd')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    }
    // close connection
    mysqli_close($link);
?>