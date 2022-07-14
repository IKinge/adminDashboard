<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT *FROM enrollment");
while ($fetchRecord = mysqli_fetch_array($sql)){
   
    echo $fetchRecord['fullname'].$fetchRecord['phonenumber'].$fetchRecord['email'].$fetchRecord['id'];
}


?>