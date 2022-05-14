<?php
session_start();
include("connect.php");
include("function.php");
$userData = check_login($con);

?>
<html>
  <head>
    <title>my site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="alert alert-success">
  
   
    Hello <b><?php echo $userData['name'] ?></b>
    <h3>Welcome to my site</h3>
     <a href="22.mp3" download = "vampire.mp3">Download vampire.mp3 here</a>
    <?php 
    
    
   // $comm = $_POST['comment'];
   // echo  $userData['name'] . " : " . $comm;
    ?><br><br><br>
   <center><button class="btn btn-danger"> <a href="logout.php" style="text-decoration:none" class="text text-white" >logout</a></button></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>