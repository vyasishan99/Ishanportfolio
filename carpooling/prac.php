<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ishan Auto car Portal | Provides new car | Old Car | Car compare for new Purchase</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>

    <!-- ishan auto portal header start here -->
    <section id="ishan-header" class="bg-dark">
        <div class="container p-2">
         
            <!-- search box -->
            <nav class="nav navbar navbar-expand-md">
            <div class="form-group w-50 ms-5">
                <input type="text" name="search" placeholder="what are you Looking For?" class="form-control">
            </div>
            <button type="button" class="btn btn-sm bg-dark btn-dark border border-0 navbar-toggler" data-bs-toggle="collapse" data-bs-target="#togg">
                <i class="bi bi-grid-3x3 text-white fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="togg">
            <ul class="nav-link">
                <li class="nav-item p-3"><a href="index.php">Home</a></li>
                
                  
                   <?php 
                     if(isset($_SESSION["custid"]))
                     { 
                   ?>
                      <li class="nav-item dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><span class="bi bi-person-add"></span> Welcome :<?php echo $_SESSION["fname"];?></a>


                 <ul class="dropdown-menu" style="min-width:240px">
                   
                    <li class="nav-item p-3 text-dark"><a href="#" class="text-dark">Manage Profile <span class="bi bi-person"></span></a></li>
                    
                    <li class="nav-item p-3"><a href="#" class="text-dark">Change Password <span class="bi bi-lock"></span></a></li>
                    
                    <li class="nav-item p-3"><a href="#" class="text-dark">Notifications <span class="bi bi-bell"> <span class="badge badge-sm bg-danger">0</span> </span></a></li>

                    
                    <li class="nav-item p-3"><a href="logout.php" class="btn btn-sm btn-danger  text-white w-100 ms-3" onclick="return confirm('Are you sure to Logout ?')">Logout <span class="bi bi-power"></span></a></li>

                     </ul>

                     </li>
                   
                    <?php 
                     }
                     else 
                     {
                        ?>

<li class="nav-item dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><span class="bi bi-person-add"></span> Account</a>


<ul class="dropdown-menu" style="min-width:220px">
                   
<li class="nav-item p-3"><a href="#" class="btn btn-lg btn-warning  text-white w-100"  data-bs-toggle="modal" data-bs-target="#log">Log In/Sign Up</a></li>
                      
                    </ul>

                     </li>
                      <?php 

                     }
                     ?>

            
                <li class="nav-item"><a href="#"><span class="bi bi-cart"><span class="badge badge-danger bg-danger text-white">0</span></a></li>
                    </ul>
                    </div>
                    </nav>
                    </div>
                    </section>