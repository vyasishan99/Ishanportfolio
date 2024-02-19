
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ecommerce Admin Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</head>

<body>

    <!-- admin header panel -->
    <div class="container-fluid border-bottom p-3 admin-header">
        <div class="row">
            <div class="col-md-3">

                <span class="bi bi-grid-3×3-gap text-danger fs-4"></span>
            </div>
            <div class="col-md-5 ms-0">
                <div class="input-group">
                    <span class="input-group-text bg-light">
                        <span class="bi bi-search"></span>
                    </span>
                    <input type="text" name="search" placeholder="Search here" class="form-control">

                </div>
            </div>
               
            <div class="col-md-4 ms-0 header-navbar">
                <div class="input-group">
                    <ul>
            <li><a href="#"><span class="bi bi-bell fs-4"></span></a></li>
            
            
            <li class="dropdown ms-4">Welcome:<a href="" class="dropdown-toggle" text-success ms-1 data-bs-toggle="dropdown"><?php echo ucfirst ($_SESSION["email"]);?></a>
                <ul class="dropdown-menu ms-5 bg-dark">
                    <li><a href="changepassword.php" class="text-white">Change Password <span class="bi bi-lock"></span></a></li>
                    
                        <li><a href="#" class="text-white" onclick="return confirm('Are you sure to Logout as Admin')">Logout Here<span class="bi bi-power text-danger"></span></a></li>
                </ul>
            </li>
</ul>
                </div>
            </div>
        </div>
    </div>



    <!-- admin footer panel --> 
    <!-- chart api js -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>