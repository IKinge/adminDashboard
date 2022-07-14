<?php
    require_once('logics/dbconnection.php');
    $sqlDeleteStudent = mysqli_query($conn,
    "DELETE FROM enrollment WHERE number='".$_GET['id']."' ");
    if($sqlDeleteStudent)
    {
        echo "user delete successfull";
        header('location:student.php');
    }
    else
    {
        echo "Error occured please try again";
    }
?>