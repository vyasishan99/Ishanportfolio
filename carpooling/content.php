<?php
    require_once("config.php");
    require_once("content.php");
?>
<!-- ishan content start here -->
<section id="content" class="p-3">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card p-5 border border-0">
                    <div class="card-header bg-white">
                        <b class="fs-4">Select brand from Categories</b>
                        <button type="button" class="btn btn-sm border border-0 float-end">View All</button>
                    </div>
                    <div class="row">
                        <?php
                            $select = "select * from tbl_addcarcategory";
                            $query = mysqli_query($con, $select);
                            while ($fetch = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-4 p-2 brand">
                            <img src="adm/<?php echo $fetch["photo"];?>" class="img-fluid w-75">
                            <br><br><b>
                            <a href="cars.php?categoryid=<?php echo $fetch["catid"];?>"><?php echo $fetch["categoryname"];?></a></b>
                        </div>
                        <?php 
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <h3 class="ms-5">Latest Model for sale</h3>
                    <hr class="w-100 mx-auto">
                    <div class="row">
                        <!-- fetch dynamic products list from adm --> 
                        <?php
                            $select = "select * from tbl_addcar"; 
                            $query = mysqli_query($con, $select);
                            while ($prod = mysqli_fetch_array($query)) {
                        ?>
                        <?php
                       if(!isset($_SESSION["custid"]))
                       {
                        ?>

                        <div class="col-md-5">
                            <div class="card m-0 p-0">
                                <div class="card-body shadow brand-img">
                                    <img src="adm/<?php echo $prod["car_photo"];?>" class="img-fluid w-100">
                                    <address class="mt-3 p-2">
                                        <h4><?php echo $prod["carname"];?></h4>
                                        <h6>Rs. <?php echo $prod["price"];?> <span class="fs-6">onwards</span></h6>
                                        <h6><?php echo "<span class='text-success'>".$prod["availability"];?></span> in<span class='fs-6 ms-2 text-success'>Rajkot</span></h6>
                                        <p class="justify-content-evenly"><?php echo $prod["manufacture_year"];?> | <?php echo $prod["running"];?> km | <?php echo $prod["varients"]; ?></p>
                                        <button type="button" onclick="book()" class="btn btn-lg btn-success">Book Now <span class="bi bi-book"></span></button>
                                    </address>
                                    
                                </div>
                            </div>
                        </div>

                        <?php
                       }
                       else
                       {
                       ?>
                       <div class="col-md-5">
                            <div class="card m-0 p-0">
                                <div class="card-body shadow brand-img">
                                    <img src="adm/<?php echo $prod["car_photo"];?>" class="img-fluid w-100">
                                    <address class="mt-3 p-2">
                                        <h4><?php echo $prod["carname"];?></h4>
                                        <h6>Rs. <?php echo $prod["price"];?> <span class="fs-6">onwards</span></h6>
                                        <h6><?php echo "<span class='text-success'>".$prod["availability"];?></span> in<span class='fs-6 ms-2 text-success'>Rajkot</span></h6>
                                        <p class="justify-content-evenly"><?php echo $prod["manufacture_year"];?> | <?php echo $prod["running"];?> km | <?php echo $prod["varients"]; ?></p>
                                        <button type="submit" class="btn btn-lg btn-success">Book Now <span class="bi bi-book"></span></button>
                                    </address>
                                    
                                </div>
                            </div>
                        </div>
                       
                          
                        <?php 
                     }
                 }
                    ?>
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
<script src="js/main.js"></script>
