<?php

$connection = mysqli_connect("localhost", "root", "", "fancy");

if (!isset($connection)){
    die("DB connection failed:". mysqli_connect_error());
}