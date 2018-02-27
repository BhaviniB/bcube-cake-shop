<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style type="text/css">
    
    .form-custom {
      width: 30%;
      margin: 0 auto;
      margin-top: 10%;
    }


    .homepage a {
      text-decoration: none;
      color: white;
    }


</style>
</head>


<body>


<form class="form-custom">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
  <button type="submit" class="btn btn-primary justify-content-center homepage"><a href="index.html">Go back to Homepage</a></button>
</form>


<?php
session_start();

$name = $_POST['email'];


echo "Hello" . $name;
?>
</body>
</html>