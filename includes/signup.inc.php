<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["repeatpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (strlen($name) < 5){
        header("location:../signup.php?error=fullnametooshort");
        exit();
    }

    if (InvalidFullName($name) !== false){
        header("location:../signup.php?error=invalidfullname");
    }


    //my trial

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !==false){
        header( "location:../signup.php?error=fieldscannotbeblank");
        exit();
    }

    if (invalidUsername($username) !==false){
        header("location:../signup.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !==false){
        header("location:../signup.php?error=invalidemail");
        exit();
    }
    if (strlen($pwd) < 8){
        header("location:../signup.php?error=passwordtooshort");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !==false){
        header("location:../signup.php?error=passworddontmatch");
        exit();

    }
    if (uidExist($connection, $email, $username) !==false) {
        header("location:../signup.php?error=usernameexists");
        exit();
    }
    createUser($connection, $name, $email, $username, $pwd);
}else{
    header("location:../signup.php");
}