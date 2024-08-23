<?php

  include('config/db_connect.php');

  //GET = shows the data sent in the url
  // if(isset($_GET["submit"])){
  //   echo $_GET['email'];
  //   echo $_GET['title'];
  //   echo $_GET['ingredients'];
  // }

  //Post - runs in the background
  if(isset($_POST["submit"])) {

    //Show data on the form on the browser
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    //post to the database
    $email =  $_POST['email'];
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];

    //write sql query
    $sql = "INSERT INTO pizzas(email, title, ingredients) VALUES('$email', '$title' , '$ingredients')";

    //execute the query and log error 
    // if(mysqli_query($conn, $sql)) {
    //   echo "<script>alert('Pizza added successfully!');</script>";
    // } else {
    //   //error
    //   echo "<script>alert('Query Error!: " . mysqli_error($conn) ."');</script>";
    // }

    //execute query without logging errors
    mysqli_query($conn,$sql);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>

  <section class="container grey-text">
    <h4 class="center"> Add a Pizza</h4>
    <form class="white" action="add.php" method="POST" >
      <label for="">Your Email:</label>
      <input type="text" name="email">
      <label for=""> Pizza Title: </label>
      <input type="text" name="title">
      <label for="">Ingredients (comma separated):</label>
      <input type="text" name="ingredients">
      <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>
    </form>
  </section>

  <?php include('templates/footer.php'); ?>
</html>