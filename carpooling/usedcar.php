<?php
 require_once("page_header.php");
 ?>


    <!-- ishan content start here -->
  <section id="content" class="p-3">
    <div class="container mt-5">
        <div class="card p-5 border border-0">
            <div class="card-header bg-white"><b class="fs-4">Popular brand </b><button type="button" class="btn btn-sm border border-0  float-end">View All</button></div>
        <div class="row justify-content-evenly">
            <div class="col-3 p-2 brand">
                <img src="images/tata.png">
            </div>
            <div class="col-3 p-2 brand">
                <img src="images/renault.png">
            </div>

            <div class="col-3 p-2 brand">
                <img src="images/suzuki.png">
            </div>
            <div class="col-3 p-2 brand">
                <img src="images/toyota.png">
            </div>
        </div>
        
       </div>
    </div>


    <!-- latest brand of car -->
   <div class="container">
        <h3 class="ms-5">New Cars Latest Model samples</h3>
        <hr class="w-100 mx-auto">
        <div class="row justify-content-evenly">
        <div class="col-md-5">
        <div class="card m-0 p-0">
            <div class="card-body shadow brand-img">
                <img src="images/car1.webp" class="img-fluid w-100">
                <address class="mt-3 p-2">
                    <h4>Renault kwid sports</h4>
                    <h6>Rs. 575000 <span class="fs-6">onwards</span></h6>
                    <h6>Available in <span class="fs-6 ms-2 text-success">Rajkot</span></h6>
                    <p class="justify-content-evenly">2015 | 50000 km | Petrol</p>
                </address>  
            </div>
        </div>
    </div>


    <div class="col-md-5">
        <div class="card m-0 p-0">
            <div class="card-body shadow brand-img">
                <img src="images/car.png" class="img-fluid w-100">
                <address class="mt-3 p-2">
                    <h4>Renault kwid sports</h4>
                    <h6>Rs. 575000 <span class="fs-6">onwards</span></h6>
                    <h6>Available in <span class="fs-6 ms-2 text-success">Rajkot</span></h6>
                    <p class="justify-content-evenly">2015 | 50000 km | Petrol</p>
                </address>  
            </div>
        </div>
    </div>

    
    <div class="col-md-5 mt-2">
        <div class="card m-0 p-0">
            <div class="card-body shadow brand-img">
                <img src="images/car.png" class="img-fluid w-100">
                <address class="mt-3 p-2">
                    <h4>Renault kwid sports</h4>
                    <h6>Rs. 575000 <span class="fs-6">onwards</span></h6>
                    <h6>Available in <span class="fs-6 ms-2 text-success">Rajkot</span></h6>
                    <p class="justify-content-evenly">2015 | 50000 km | Petrol</p>
                </address>  
            </div>
        </div>
    </div>

    
    <div class="col-md-5 mt-2">
        <div class="card m-0 p-0">
            <div class="card-body shadow brand-img">
                <img src="images/car2.webp" class="img-fluid w-100">
                <address class="mt-3 p-2">
                    <h4>Renault kwid sports</h4>
                    <h6>Rs. 575000 <span class="fs-6">onwards</span></h6>
                    <h6>Available in <span class="fs-6 ms-2 text-success">Rajkot</span></h6>
                    <p class="justify-content-evenly">2015 | 50000 km | Petrol</p>
                </address>  
            </div>
        </div>
    </div>
    
</div>
</div>
<!-- selling car -->
<div class="container">
<div class="row">
    <div class="col-md-5 ms-5 p-4 mt-3">
        <h1>Selling a car? We’re buying!</h1>
        <p class="fs-5">Get up to ₹20,000 when you sell and buy your next car from us.</p>
        <p><button type="button" data-bs-toggle="modal" data-bs-target="#get" class="btn btn-sm w-50 p-3 btn-danger text-white">Get Car Price</button></p>
    </div>

    <div class="col-md-5 ms-5 p-4 mt-3 ms-5">
       <img src="images/adv.webp">
    </div>
</div>
</div>
</section>  

 

<!-- login modal load here -->
<div class="modal fade" id="log" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5">
            <h2 class="text-center">Login Form</h2>
            <hr class="w-25 mx-auto border border-1 border-dark">
            <form method="post">
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <input type="password" name="pass" placeholder="Password *" required class="form-control">
                </div>
                
                <div class="input-group mt-3">
                    <input type="submit" name="login" value="Login"  required class="btn btn-sm btn-dark text-white">
                    <b class="ms-3"><a href="forgetpassword.html">Forget password ??</a></b>
                </div>

                <div class="input-group mt-3">
                <b class="ms-3">Don't have an account ? <a href="register.html">Create an Account</a></b>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- login modal load here -->
<div class="modal fade" id="get" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5 car-enquiry">
            <h2 class="text-center">Get a Car Price</h2>
            <hr class="w-25 mx-auto border border-1 border-dark">
            <form method="post">
                <div class="input-group mt-3">
                    <input type="text" name="name" placeholder="Name *" required class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>

                <div class="row">
                <div class="form-group mt-3 col-md-6">
                    <select name="brand"  placeholder="Brand *" required class="form-control">
                    <option value="">-select Brands-</option>
                    <option value="">Maruti suzuki</option>
                    <option value="">Tata</option>
                    <option value="">Mahindra</option>
                    <option value="">Kia Motors</option>
                    </select>
                </div>
                <div class="form-group mt-3 col-md-6">
                    <select name="brand"  placeholder="Type of Car*" required class="form-control">
                    <option value="">-Type of Car-</option>
                    <option value="">Petrol</option>
                    <option value="">CNG</option>
                    <option value="">Diesel</option>
                    <option value="">Hybrid</option>
                    </select>
                </div>
                </div>
                  
                <div class="form-group mt-3">
                    Rs.150000<input type="radio"  value="150000" name="budget">
                    Rs.250000<input type="radio"  value="250000" name="budget">
                    Rs.350000<input type="radio"  value="350000" name="budget">
                    Rs.450000<input type="radio"  value="450000" name="budget">
                  
                </div>
                <div class="input-group mt-3">
                    <input type="submit" name="send" value="send"  required class="btn btn-sm btn-danger text-white">
                    
                </div>

            </form>
        </div>
    </div>
</div>
<?php
 require_once("footer.php");
 ?>
</body>
</html>