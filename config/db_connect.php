<?php
    //sql connection to the database
    $conn = mysqli_connect('localhost', 'root','1234','pizza_database');

    //Test connection to the database
    if (!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
    }
?>