<?php 
  session_start();
  $conn = new mysqli("db", "root", "example", "ems_db");

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$_SESSION['id']=$uid;
    $_SESSION['pwd']=$pwd;


    $sql = "SELECT role FROM users_tab WHERE userid = '$uid' && password = '$pwd'";
    $result = $conn->query($sql);
    $row_users = $result->fetch_assoc();
    $_SESSION['role'] = $row_users['role'];
   
   
    if($_SESSION['role']=='student')
        header('Location:Student.php');
    elseif($_SESSION['role']=='faculty')
        header('Location:Faculty.php');
    elseif($_SESSION['role']=='admin')
        header('Location:Admin.php');
    else   
        echo("Invalid Login"); 

?>