<?php
 //1.Database connection
 require_once('logics/dbconnection.php');
 require_once('includes\navbar.php');
 $sqlifetchEnrollment = mysqli_query($conn,
         "SELECT * FROM enrollment WHERE number='".$_GET['id']."' ");
 while($featchStudent= mysqli_fetch_array($sqlifetchEnrollment))
 {
    $fullname = $featchStudent['fullname'];
    $email = $featchStudent['email'];
    $phone= $featchStudent['phonenumber'];
    $course=$featchStudent['course'];
}
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
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                      <div class="card-title">personal information</div>
                    </div>
                    <div class ="card-body">
                        <ul class="list-group">
                        <li class="list-group-item">Fullname: <span class="float-end badge bg-primary"><?php echo $fullname ?></span></li>
                        <li class="list-group-item">email: <span class="float-end badge bg-secondary"><?php echo $email ?></span></li>
                        <li class="list-group-item">phonenumber: <span class="float-end badge bg-danger"><?php echo $phone ?></span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
   













   	<!-- All our code. write here   -->
	
    <?php include_once('includes\scripts.php') ?>
</body>
</html>