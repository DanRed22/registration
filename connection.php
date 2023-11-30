<?php
$con = mysqli_connect('localhost', 'root', '', 'uschiv2023');
if(mysqli_connect_error())
{
    echo "Database connection error!";
    exit;
}