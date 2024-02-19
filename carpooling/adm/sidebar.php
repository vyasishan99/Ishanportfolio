<?php
require_once("config.php");
// subtotal count of total contact in admin dashboard

$select="select count(contactid) as total from tbl_contact";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);


?>
<div class="container-fluid admin-content">

    <!-- admin sidebar panel -->
    <div class="row">
        <div class="col-md-2 admin-sidebar">
            <ul class="admin-sidebar-navlink">
            <li><a href="dashboard.php"><span class="bi bi-person-add fs-5"></span> Dashboard</a></li>
                <li><a href="managecustomers.php"><span class="bi bi-person-add fs-5"></span>Manage Customer</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Add
                       Car Category</a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="addcategory.php">Add Car Category</a></li>
                     <li><a href="managecategory.php">Manage Car Category</a></li>
                </ul>
                </li>
                

                <!-- <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Add
                        Subcategory</a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="#">Add Subcategory</a></li>
                     <li><a href="#">Manage Subcategory</a></li>
                </ul>
                </li> -->
                <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Add
                        Car</a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="addcar.php">Add Car</a></li>
                     <li><a href="managecar.php">Manage Car</a></li>
                </ul>
                </li>
                <li><a href="#">Manage Order <span class="badge badge-sm bg-danger">0</span><span
                                class="badge badge-sm bg-danger"></span></a></li>
                <li><a href="managecontact.php">Manage Contact <span class="bi bi-telephone fs-5"></span><span
                                class="badge badge-sm bg-danger"><?php echo $fetch["total"];?></span></a></li>
                <li><a href="#">Manage Reviews <span class="badge badge-sm bg-danger">0</span><span
                                class="badge badge-sm bg-danger"></span></a></li>
                <li><a href="#">Manage Bill <span class="badge badge-sm bg-danger">0</span><span
                                class="badge badge-sm bg-danger"></span></a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to Logout as Admin ?')">Logout here<span class="bi bi-power fs-5"> <span
                                class="badge badge-sm bg-danger"></span></a></li>
            </ul>
        </div>






