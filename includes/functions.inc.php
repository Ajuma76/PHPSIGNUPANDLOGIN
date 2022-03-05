<?php


function InvalidFullName($name){
    $results;
    if (!preg_match("/^[a-zA-Z ]*$/", $name)){
        $results = true;
    }else{
        $results = false;

    }
    return $results;
}



function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function uidExist($connection, $email, $username) {
    $sql = "SELECT * FROM `users` WHERE usersUid ='$username' OR usersEmail = '$email'";
    $userCount = mysqli_query($connection, $sql);
    if (mysqli_num_rows($userCount) > 0 ){
        return true;
    }else{
        return false;
    }
}

function createUser($connection, $name, $email, $username, $pwd){
    $pwd = md5($pwd);
    $sql = "INSERT INTO `users` (usersName, usersEmail, usersUid, usersPwd) VALUES ('$name','$email','$username','$pwd')";
    mysqli_query($connection, $sql);
    header("location:../signup.php?signupsuccessful");
    exit();
}

function emptyLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($connection, $username, $pwd){

    $sql = "SELECT * FROM `users` WHERE usersUid ='$username' and usersPwd = '$pwd'";
    $userCount = mysqli_query($connection, $sql);
    if (mysqli_num_rows($userCount) > 0 ){
        session_start();
        $_SESSION["userid"] = $username;
        header("location:../index.php");
        exit();
    }else{
        header("location:../login.php?error=wronglogin");
        exit();
    }

}

