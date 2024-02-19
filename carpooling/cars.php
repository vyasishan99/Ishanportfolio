<?php
require_once("config.php");
require_once("page_header.php");
?>

<!-- ishan content start here -->
<section id="content" class="p-3">
    <div class="container mt-5">
        <div class="card p-5 border border-0">
            <div class="card-header bg-white">
                <b class="fs-4">Select brand from Categories </b>
                <button type="button" class="btn btn-sm border border-0 float-end">View All</button>
            </div>
            <div class="row">
                <?php
                $select="select * from tbl_addcarcategory";
                $query=mysqli_query($con, $select);
                while ($fetch = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-4 p-2 brand">
                        <img src="adm/<?php echo $fetch["photo"]; ?>" class="img-fluid w-75">
                        <br><br>
                        <b><a href="cars.php?categoryid=<?php echo $fetch["catid"]; ?>"><?php echo $fetch["categoryname"]; ?></a></b>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- latest brand of car -->
    <div class="container">
        <h3 class="ms-5">New Cars Latest Model samples</h3>
        <hr class="w-100 mx-auto">
        <div class="row">
            <?php
            if (isset($_GET["categoryid"])) {
                $catid = $_GET["categoryid"];
                $select = "select * from tbl_addcar where catid='$catid'";
                $query = mysqli_query($con, $select);
                while ($prod = mysqli_fetch_array($query)) {
            ?>
                    <div class="col-md-5">
                        <div class="card m-0 p-0">
                            <div class="card-body shadow brand-img">
                                <img src="adm/<?php echo $prod["car_photo"]; ?>" class="img-fluid w-100">
                                <address class="mt-3 p-2">
                                    <h4><?php echo $prod["carname"]; ?></h4>
                                    <h6>Rs. <?php echo $prod["price"]; ?> <span class="fs-6">onwards</span></h6>
                                    <h6><?php echo "<span class='text-success'>" . $prod["availability"]; ?></span> in <span class='fs-6 ms-2 text-success'>Rajkot</span></h6>
                                    <p class="justify-content-evenly"><?php echo $prod["manufacture_year"]; ?> | <?php echo $prod["running"]; ?> km | <?php echo $prod["varients"]; ?></p>
                                    <button type="button" class="btn btn-lg btn-success" onclick="bookNow()">Book Now <span class="bi bi-book"></span></button>
<script>
    function bookNow() {
        if (confirm('Want to book cars? Login first.')) {
            window.location = "register.php";
        }
    }
</script>

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
                        <select name="brand" placeholder="Brand *" required class="form-control">
                            <option value="">-Select Brands-</option>
                            <option value="">Maruti suzuki</option>
                            <option value="">Tata</option>
                            <option value="">Mahindra</option>
                            <option value="">Kia Motors</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group mt-3 col-md-6">
                        <select name="brand" placeholder="Type of Car*" required class="form-control">
                            <option value="">-Type of Car-</option>
                            <option value="">Petrol</option>
                            <option value="">CNG</option>
                            <option value="">Diesel</option>
                            <option value="">Hybrid</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mt-3">
                    Rs.150000<input type="radio" value="150000" name="budget">
                    Rs.250000<input type="radio" value="250000" name="budget">
                    Rs.350000<input type="radio" value="350000" name="budget">
                    Rs.450000<input type="radio" value="450000" name="budget">
                </div>
                <div class="input-group mt-3">
                    <input type="submit" name="send" value="send" required class="btn btn-sm btn-danger text-white">
                </div>
            </form>
        </div>
    </div>
</div>





<?php
require_once("footer.php");
?>
