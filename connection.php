<?php

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "login_sample_db";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbname, $dbpass))
{
   die ("failed to connect!");
}
