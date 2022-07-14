<?php
    require_once('logics/dbconnection.php');
$message="";
    $querystudent = mysqli_query($conn,"SELECT * FROM enrollment WHERE number='".$_GET['id']. "' ");
    while($fetchstudent = mysqli_fetch_array($querystudent))
    {
        $fullname = $fetchstudent['fullname'];
        $phonenumber = $fetchstudent['phonenumber'];
        $email = $fetchstudent['email'];
        $course = $fetchstudent['course'];
        $id=$fetchstudent['number'];
    }

    //updating user records
require_once('logics/process-update.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>


<body>
    <!-- All our code.Write here -->
    <?php require_once('includes/navbar.php')?>
    
    <div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-black text-white text-center">
                            <h3>Edit student  <h3>
                            <?php echo $message ?>   
                        </div>
                        <div class="card-body">
                        <form action='edit-enrollment.php?id=<?php echo $id ?>' method=POST>
                 <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="Full Name" class="form label">Full Name</label>
                        <input type="text" class="form-control"name="fullname" value=" <?php echo $fullname ?>" placeholder="Please Enter your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Phone Number" class="form label">Phone Number</label>
                        <input type="text" class="form-control" name='phonenumber' value=" <?php echo $phonenumber ?>" placeholder="Please Enter your phonenumber">
                    </div>
                 </div>
                 <div class="mb-3 col-lg-6">
                    <label for="Email" class="form-label">Email </label>
                    <input type="email" class="form-control" name='email' value=" <?php echo $email ?>" placeholder="Please Enter your Email Address">
                 </div>
                 <p> in order to complet your registration to the bootcamp you are require 
                    <div class="mb-3 col-lg-6">
                        <label for="course" class="form-label">course</label>
                        <select class="form-control multiplechose_questiontypes" name="course" id="selector">
                                    <option><?php echo $course ?></option>
                                    <option value="web Designing">web Designing</option>
                                    <option value="web Development">web Development</option>
                                    <option value="app Development">app development</option>
                                    <option value="game development">Game Development</option>
                                    <option value="graphic Designing">graphic designing</option>
                                    <option value="digital marketing">Digital marketing</option>
                        </select>
                    </div>    
                </div> 
                <div class="form-check">
                    <input class= "form-check-input" type="checkbox" for="flexCheckDefault">
                    <label class= "form-check-label" for="flexCheckDefault">
                        Agree terms and conditions 
                    </label>
                    <div class="row">
                                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary" name='updateEnrollment'> update records </button>
                </div>
                </div>
                               
           
                </form>

                    <div>
                </div>   
            </div>
        </div>
    </div>   
    
   













   	<!-- All our code. write here   -->
	
    <?php include_once('includes\scripts.php') ?>
</body>
</html>