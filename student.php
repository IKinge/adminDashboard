<?php
require_once('logics/dbconnection.php');

$sql = mysqli_query($conn, "SELECT * FROM enrollment");

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php') ?>

<body>
    <!-- All our code.Write here -->
    <div class="header">
         <img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">

    </div>

    <div class="sidebar">
        <?php require_once('includes/sidebar.php') ?>
    </div>

    <div class="main-content">
        <div class="contaner-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="card-header bg-dark text-white text-center">
                        <span>student</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-reponsive" style='font-size:12px;'>
                            <thead>
                                <th>id</th>
                                <th>name</th>
                                <th>phonenumber</th>
                                <th>email</th>
                                <th>course</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <?php while($fetchEnrollmentRecord=mysqli_fetch_array($sql)) {?>
                                    <tr>
                                        <td><?php echo $fetchEnrollmentRecord['number'] ?></td>
                                        <td><?php echo $fetchEnrollmentRecord['fullname'] ?></td>
                                        <td><?php echo $fetchEnrollmentRecord['phonenumber'] ?></td> 
                                        <td><?php echo $fetchEnrollmentRecord['email'] ?></td>
                                        <td><?php echo $fetchEnrollmentRecord['course'] ?></td>
                                        
                                        <td>
                                                <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord ['number'] ?>"class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['number'] ?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['number'] ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td> 
                                    </tr>       
                                <?php 
                            }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
            </div>
        </div>
     












            
    </div>
   	<!-- All our code. write here   -->
	
<?php require_once('includes/scripts.php') ?>
</body>
</html>