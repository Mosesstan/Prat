<?php
function check_login($con){
  if (isset($_SESSION['name'])) {
    $id = $_SESSION['name'];
    //$query = 
    $result = mysqli_query($con, " select * from Log where name = '$id' limit 1");
    if ($result && mysqli_num_rows($result) > 0) {
      $userData = mysqli_fetch_assoc($result);
      return $userData;
    }
  }
      header("location:login.php");
      die;
}