<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location:login.php");
}else{
    echo "Hello {$_SESSION['user']['name']},Welcome!!!<br>";
    echo "<a href="logout.php">Logout</a>";
}
?>