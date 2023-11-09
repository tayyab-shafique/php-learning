<?php
require_once "submit.php";
$error = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $first_name = $_POST['fName'];
  $last_name = $_POST['lName'];
  $username = $_POST['username'];
  $password_1 = $_POST['password1'];
  $password_2 = $_POST['password2'];
  $gender = $_POST['gender'];

  if ($first_name == "" || $last_name == "" || $username == "" || $password_1 == "" || $password_2 == "") {
    $error = 1;
    die("something went wrong");
  }else{
    die('form submitted successfully');
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container w-50 bg-light p-3 border border-success">
    <div class="row d-flex justify-content-center">
      <div class="col">
        <h2>Registration Form</h2>
        <hr>
        <form action="" method="post">
          <div class="form-group">
            <label for="fName">First Name</label>
            <input type="text" name="fName" class="form-control" id="fName" aria-describedby="emailHelp">
            <?php
            if ($error == 1) {
            ?>
              <p>First name is required.</p>
            <?php
            }
            ?>
          </div>
          <div class="form-group">
            <label for="lName">Last Name</label>
            <input type="text" name="lName" class="form-control" id="lName" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password1" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" name="password2" class="form-control" id="exampleInputPassword2">
          </div>

          <div class="form-check form-group form-check-inline">
            <label class="form-check-label" for="inlineRadio1">Male</label>
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1" checked>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">Female</label>
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
          </div>
          <div class="submit">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>