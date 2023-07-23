<?php 
  
  $dbserver ="localhost:3310";
  $db_user ="root";
  $db_pass ="";
  $db_name="businessdb";
  $conn="";


  try {

    $conn = mysqli_connect($dbserver, $db_user, $db_pass,$db_name);
    
  }
  catch(mysqli_sql_exception){
    echo"Could not connect <br>";
  }
?>