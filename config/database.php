<?php
require 'constants.php';

$connection = new mysqli('localhost', 'root', 'root', 'dedikasi');

if(mysqli_errno($connection)){
    die(mysqli_error($connection));
}