<?php

$connect = mysqli_connect("localhost","root","","ams_voting") or die("connection failed");

if($connect){
    echo "Connected!";
}
else{
    echo "Not connected!";
}

?>