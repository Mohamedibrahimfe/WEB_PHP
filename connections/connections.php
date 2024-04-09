<?php

$conn=mysqli_connect('localhost','root','','login');
if(!$conn){
    die('Error'.mysqli_connect_error());

}