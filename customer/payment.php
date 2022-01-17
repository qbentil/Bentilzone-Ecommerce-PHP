<?php require "./includes/head.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
            </li>
        </ul>

        <form class="card p-2">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary form-control">Redeem</button>
            </div>
            </div>
        </form>
        </div>
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" action="" method= "post" id = "payment" name = "payment"  novalidate >
            <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="username">First name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="Shadrack" required>
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div> 
                </div> 
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="username">Last name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="Bentil" required>
                        <div class="invalid-feedback">Valid Last name is required.</div>
                    </div> 
                </div> 
            </div>
            </div>
<!-- 
            <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
                </div>
            </div>
            </div> -->

            <div class="mb-3">
                <div class="form-group">
                    <label for="username">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="example1@gmail.com" required>
                        <div class="invalid-feedback">Valid Email is required.</div>
                    </div> 
                </div> 
            </div>

            <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
                Please enter your shipping address.
            </div>
            </div>

            <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid country.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">Zip code required. </div>
            </div>
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
            <hr class="mb-4">

            <h4 class="mb-3">Payment 
            <span>
                <img src="images/visa.png" alt="" width = "30px">
                <img src="images/momo.png" alt="" width = "30px">
                <img src="images/mastercard.png" alt="" width = "30px">
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
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                    <i class="fa fa-paypal"></i>  Paypal</a>
                </li>
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
                        <input type="text" class="form-control" name="username" placeholder="MOMO Name" required="">
                    </div> <!-- input-group.// -->
                </div> <!-- form-group.// -->
                <div class="form-group">
                    <label for="username">Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="MOMO Number" required="">
                    </div> <!-- input-group.// -->
                </div> <!-- form-group.// -->
            </div> <!-- tab-pane.// -->
            <div class="tab-pane fade" id="nav-tab-paypal">
            <p>Paypal is easiest way to pay online</p>
            <p>
            <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
            </p>
            <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
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
            <a href="">
            <button class="btn btn-dark rounded-pill py-2 btn-block text-white text-uppercase font-weight-bolder btn-lg btn-block" type="submit">Continue to checkout</button>
            </a>
        </form>
        </div>
    </div>
</div>



