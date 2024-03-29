<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ecommerce Admin Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap js -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
   




    <div class="col-md-8 mt-2 frm">
                <div class="row">
                <div class="col-md-6 login-frm">
                    <h3 class="p-3">Ishan Auto Portal Admin Login</h3>
                    <img src="https://assets-v2.lottiefiles.com/a/567e9d6a-116d-11ee-adcc-c362dfe23881/hrMdhw3flV.gif" class="img-fluid w-75">
                </div>
                <div class="col-md-6">
                <h3 class="bg-transparent w-100 mx-auto">Admin Login <span class="bi bi-person"></span>   
               
                </h3>
                
                    


                <form method="post" action="admin_login_logic.php">
                    <div class="input-group mt-3">
                        
                        <input type="text" name="email" placeholder="email" required class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                   
                        <input type="password" name="pass" placeholder="password" required class="form-control">
                    </div>
                    
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="login" class="btn btn-lg btn-info" required value="SignIn"><b class="ms-2"><a href="#">Forget Password ?</a></b>
                    </div>

                    
                    
                </form>
                
</div>
</div>
</div>
            
        





<!-- section for footer -->



<!-- add modal for create account -->
    <div class="modal fade" role="dialog" id="regmodal">
        <div class="modal-dialog">
            <div class="modal-content p-5">
                <div class="row">
                <div class="col-md-6 login-frm">
                    <h3>Why Join with Us ?</h3>
                    <img src="https://assets-v2.lottiefiles.com/a/567e9d6a-116d-11ee-adcc-c362dfe23881/hrMdhw3flV.gif" class="img-fluid w-75">
                </div>
                <div class="col-md-6">
                <h3 class="bg-transparent w-100 mx-auto">Create Your Account <span class="bi bi-person"></span>   
                <button type="button" class="btn btn-sm btn-danger text-white float-end" data-bs-dismiss="modal">&times;</button>
                </h3>

                <form method="post" action="dashboard.php">
                    <div class="input-group mt-3">
                        <input type="text" name="email"  placeholder="Email" required class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="password" name="pass"  placeholder="Password" required class="form-control">
                    </div>
                    
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>