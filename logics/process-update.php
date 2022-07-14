<?php
if(isset($_POST['updateEnrollment']))
{
        //fetch form data
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        //perform the sql query

        $updaterecords = mysqli_query($conn,
        "UPDATE enrollment set fullname='$fullname',phonenumber = '$phonenumber',
        email = '$email', course = '$course' WHERE number ='".$id."' ");
    if($updaterecords)
    {
        $message= 'data submitted succesfully';
    }
    else
    {
        $message= 'error occurred';
    }

}
?>