    <style>
        .fa{
            color: #fff !important;
        }
    </style>
    <?php require "function.php"?>
    <div class="container-fluid col-md-12 statistics">
    <div class="row mb-1">
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?view_products">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-shopping-cart fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Products</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?view_categories">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-th-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Categories</h6>
                            <h1 class="display-4"><?php rowcount('main_cat') ?></h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?view_sub_categories">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-secondary">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Sub Categories</h6>
                            <h1 class="display-4"><?php rowcount('sub_cat') ?></h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="#">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Sold Out</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        <div class="row mb-1">
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?total_orders">
                    <div class="card bg-info text-white h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-tags fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Orders</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?complete_orders">
                    <div class="card text-white bg-success h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-check fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Complete Orders</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?pending_orders">
                    <div class="card text-white bg-light h-100">
                        <div class="card-body bg-primary">
                            <div class="rotate">
                                <i class="fa fa-refresh fa-4x "></i>
                            </div>
                            <h6 class="text-uppercase">Pending Orders</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-5 py-2">
                    <a href="index.php?cancelled_orders">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-times fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Cancelled Orders</h6>
                            <h1 class="display-4">0</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        <div class="row mb-1">
            <div class="col-xl-3 col-sm-5 py-2">
                <a href="index.php?ondemand_pro">
                <div class="card text-white bg-warning h-100">
                    <div class="card-body bg-warning">
                        <div class="rotate">
                            <i class="fa fa-exclamation-circle fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">On Demand Products</h6>
                        <h1 class="display-4">0</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-5 py-2">
                <a href="index.php?outofstock_pro">
                <div class="card bg-danger text-white h-100">
                    <div class="card-body bg-danger">
                        <div class="rotate">
                            <i class="fa fa-question-circle fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Out of Stock Products</h6>
                        <h1 class="display-4">0</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-5 py-2">
                <a href="index.php?wishlist_pro">
                <div class="card text-white bg-dark h-100">
                    <div class="card-body bg-dark">
                        <div class="rotate">
                            <i class="fa fa-heart fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Wishlist Products</h6>
                        <h1 class="display-4">0</h1>
                    </div>
                </div>
                </a>
            </div>
            <!-- <div class="col-xl-3 col-sm-5 py-2">
                <div class="card text-white bg-danger h-100">
                    <div class="card-body bg-danger">
                        <div class="rotate">
                            <i class="fa fa-times fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Cancelled Orders</h6>
                        <h1 class="display-4">0</h1>
                    </div>
                </div>
            </div> -->
        </div>
    </div>