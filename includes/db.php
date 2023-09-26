<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cms";

$dbconn = mysqli_connect("$dbhost", "$dbuser","$dbpass","$dbname",);

if($dbconn){
    echo "connection successful";

} else{
    die("database connection failed");
}
