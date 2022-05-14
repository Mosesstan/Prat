<?php
session_start();
include("connect.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  if (!empty($name) && !empty($password) && !is_numeric($name)) {
    // save
    mysqli_query($con, "insert into Log(name, password) values('$name', '$password')");
    header("location:login.php");
    die;
  }else {
    echo("please enter a valid data");
  }
}
?>

<html>
  <title>signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="alert alert-info">
    <div class="container">
      
    
    <form method="post" class="alert alert-primary">
    <center>  <h3>SIGNUP</h3>
      <input type="text" name="name" size="27px"><br><br>
      <input type="password" name="password" size="27px"><br><br>
      <input type="submit" value="signup" class="btn btn-danger"><br><br>
      <a href="login.php">Have an account? Login instead</a>
      </center>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>