
<!-- Get a Car Price quations -->
<div class="modal fade" id="get" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5 car-enquiry">
            <h2 class="text-center">Get a Car Price quations</h2>
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
  