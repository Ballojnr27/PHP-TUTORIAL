<?php
  // MySQLi or PDO can be used to connect to database
  
  // connect to database
  $conn = mysqli_connect('localhost', 'Abdulgafar', 'test1234','amazon designs');

  // check connection
  if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
  }  

?>