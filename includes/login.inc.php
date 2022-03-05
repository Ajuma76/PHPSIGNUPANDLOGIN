<?php

if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwd = md5($pwd);

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if (emptyLogin($username, $pwd) !==false){
        header("location:../login.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $username, $pwd);

}
else{
    header("location:../login.php");
    exit();
}