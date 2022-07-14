<?php require_once('logics\dbconnection.php');
      

$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('includes\headers.php');
 ?>
</head>
<body>
    <div class="nav">
    <?php require_once('includes\navbar.php');
 ?>
    </div>
    <div class="sidebar">
    <?php require_once('includes/sidebar.php')?>
    </div>
    <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-header bg-dark text-white text-center">
                <span>Top content</span>
              </div>
              <div class="card-body"></div>
              <div class="card-footer"></div>
            </div>
          </d0iv>
          <div class="row">
            <div class="col-lg-3">
              <div class="card-header bg-dark text-white text-center">
                <span>Students</span>
              </div>
              <div class="card-body">
                <span><i class="fa fa-group fa-3x"></i></span>
               <span class="float-end"><?php echo $countAllStudents ?></span>
              </div>
              <div class="card-footer"></div>
              </div>
              <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                  <span>Available Courses</span>
                </div>
                <div class="card-body">
                  <span><i class="fa fa-folder-open fa-3x"></i></span>
                  <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
              <div class="card-header bg-dark text-white text-center">
                <span>Campuses</span>
              </div>
              <div class="card-body">
                <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                <span class="float-end">00</span>
              </div>
              <div class="card-footer"></div>
          </div>
          <div class="col-lg-3">
            <div class="card-header bg-dark text-white text-center">
              <span>Users</span>
            </div>
            <div class="card-body">
              <span><i class="fa fa-user fa-3x"></i></span>
              <span class="float-end">00</span>
            </div>
            <div class="card-footer"></div>
        </div>
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center">
            <span>Student Analysis</span>
         </div>   
         </div>
          <span><i class="fa fa-line-chart fa-3x"></i></span>
              <span class="float-end">00</span>
          
       

    </div>














   	<!-- All our code. write here   -->
	
<?php include_once ('includes/scripts.php') ?>

</body>
</html>