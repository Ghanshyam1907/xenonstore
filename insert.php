<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "db_shop";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

// echo "web are in insert";

  
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mb'];
     $msg = $_POST['msg'];
    //  echo $_REQUEST['name'];
     $sql = "INSERT INTO contact (name,email,mobile,message)
     VALUES ('$name','$email','$mobile','$msg')";
     if (mysqli_query($conn, $sql)) {
        echo " Submited!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>