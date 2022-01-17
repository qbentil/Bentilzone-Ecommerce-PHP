

<div class="px-4 px-lg-0 bg-white">
    <div class="pb-5">
        <div class="container">
            <div class="title">
				<h4>Check Out Process<span class = "fa fa-shopping-basket"></span></h4> <hr>
			</div>
            <div class="row py-5 p-4 bg-white rounded">
                <div class="col-lg-6 font-weight-bold text-muted">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Customer Address</div>
                <form class="needs-validation" action="" method= "post" id= "payment" name= "payment"  novalidate >
                    <div class="row">
                    <!-- <div class="col-md-12 m-1">
                        <div class="form-group">
                            <label for="username" class = "text-muted">First name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info" name="username" placeholder="Shadrack" required>
                                <div class="invalid-feedback">Valid first name is required.</div>
                            </div> 
                        </div> 
                    </div> -->
                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                            <label for="username">Full name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info text-info font-weight-bold" name="username" placeholder="Your full name here" value = "<?php echo $name ?>" required>
                                <div class="invalid-feedback">Valid Full name is required.</div>
                            </div> 
                        </div> 
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info text-info font-weight-bold" value = "<?php echo $email ?>" name="username" placeholder="example1@gmail.com" required>
                                <div class="invalid-feedback">Valid Email is required.</div>
                            </div> 
                        </div> 
                    </div>

                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                        <label for="address">Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-home"></i></span>
                                </div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">Please enter your shipping address.</div>
                            </div> 
                        </div> 
                    </div>

                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                        <label for="address">Address 2 (Optional)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-home"></i></span>
                                </div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info" id="address" placeholder="Apartment or suite" >
                                <!-- <div class="invalid-feedback">Please enter your shipping address.</div> -->
                            </div> 
                        </div> 
                    </div>
                    <div class="col-md-5 mb-3">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid state</div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control border-top-0 border-left-0 border-right-0 border-info" id="zip" placeholder="" required>
                        <div class="invalid-feedback">Zip code required. </div>
                    </div>
                    <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-capitalize text-muted">Cart Items</span>
                        <span class="badge badge-success badge-pill text-white">3</span>
                    </h4>
                    <p class="font-italic mb-4 font-smaller">Shipping and additional costs are calculated based on values you have entered.</p>
                    <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom text-success"><strong class="text-uppercase">Total</strong>
                        <h5 class="font-weight-bold">$400.00</h5>
                    </li>
                    <p class="font-italic m-1">If you have a coupon code, please enter it in the box below</p>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <div class="input-group mb-4 border rounded-pill p-1">
                        <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0 text-info">
                        <div class="input-group-append border-0">
                            <button id="button-addon3" type="button" class="btn btn-warning text-white px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                        </div>
                        </div>
                    </li>
                    <p class="font-italic m-1">If you have some information for the seller you can leave them in the box below</p>
                    <li class="d-flex justify-content-between py-3">
                        <div class="input-group mb-4 border rounded-pill p-2">
                            <textarea name=""  class="form-control border-0 text-info"></textarea>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <div class="custom-control custom-checkbox" id = "input">
                        <input type="checkbox" class="custom-control-input" id="pod">
                        <label class="custom-control-label" for="pod">Pay on Delivery</label>
                        </div>
                    </li>
                    </ul>
                    <!-- <a href="index.php?payment" class="btn btn-dark rounded-pill py-2 btn-block text-white text-uppercase font-weight-bolder">Proceed to Payment</a> -->
                </div>
                </div>
            </div>
            <div class="row py-5 p-4  bg-white rounded">
                <!-- payment -->
                <div class="col-md-12 pay">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Payment </div>
                    <span>
                        <img src="images/visa.png" alt="" width = "50">
                        <img src="images/momo.png" alt="" width = "50">
                        <img src="images/mastercard.png" alt="" width = "50">
                    </span>
                    </h4>
                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#nav-tab-momo">
                            <i class="fa fa-mobile fa-1x"></i>  Mobile Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="pill" href="#nav-tab-card">
                            <i class="fa fa-credit-card"></i> Credit Card</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                            <i class="fa fa-paypal"></i>  Paypal</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                            <i class="fa fa-university"></i>  Bank Transfer</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                    <div class="tab-pane fade" id="nav-tab-card">
                        <!-- <p class="alert alert-success">Some text success or error</p> -->
                        <div class="form-group">
                            <label for="username">Full name (on the card)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="" required="">
                            </div> <!-- input-group.// -->
                            </div> <!-- form-group.// -->

                        <div class="form-group">
                            <label for="cardNumber">Card number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted">
                                        <i class="fa fa-cc-visa mr-1"></i><i class="fa fa-cc-amex mr-2"></i><i class="fa fa-cc-mastercard"></i> 
                                    </span>
                                </div>
                            </div>
                        </div> <!-- form-group.// -->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label><span class="hidden-xs">Expiration</span> </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="MM" name="">
                                        <input type="number" class="form-control" placeholder="YY" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" required="">
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->
                    </div> <!-- tab-pane.// -->
                    <div class="tab-pane fade show active" id="nav-tab-momo">
                        <!-- <p class="alert alert-success">Some text success or error</p> -->
                        <div class="form-group">
                            <label for="username">Select Network</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <select name="network" id="network" class="form-control">
                                    <option selected disabled>--Select Prefered Network--</option>
                                    <option value="MTN">MTN Mobile Money</option>
                                    <option value="Voda">Vodafone Cash</option>
                                    <option value="Tigo">Tigo Cash</option>
                                    <!-- <option value="MTN">MTN</option> -->
                                </select>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->
                        <div class="form-group">
                            <label for="username">MOMO Full Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control text-info" name="username" placeholder="MOMO Name" required="">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->
                        <div class="form-group">
                            <label for="username">Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control text-info" name="username" placeholder="MOMO Number" required="">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->
                    </div> <!-- tab-pane.// -->
                    <!-- <div class="tab-pane fade" id="nav-tab-paypal">
                    <p>Paypal is easiest way to pay online</p>
                        <p><button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button></p>
                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. </p>
                    </div> -->
                    <div class="tab-pane fade" id="nav-tab-bank">
                    <p>Bank accaunt details</p>
                    <dl class="param">
                    <dt>BANK: </dt>
                    <dd> THE WORLD BANK</dd>
                    </dl>
                    <dl class="param">
                    <dt>Accaunt number: </dt>
                    <dd> 12345678912345</dd>
                    </dl>
                    <dl class="param">
                    <dt>IBAN: </dt>
                    <dd> 123456789</dd>
                    </dl>
                    <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div> <!-- tab-pane.// -->
                    </div> <!-- tab-content .// -->
                </div>
                <a href="" class = "btn btn-dark rounded-pill py-2  text-white  btn-lg btn-block">
                <button class="btn text-white text-uppercase font-weight-bolder" type="submit">Continue to checkout</button>
                </a>
            </div>
        </div>
    </div>
</div>

