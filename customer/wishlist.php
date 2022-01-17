
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
        <div class="title">
            <h4>Wishlist<span>Products<i class = "fa fa-shopping-cart"></i></span></h4> <hr>
        </div>
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Availability</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Action</div>
                    </th>
                    </tr>
                </thead>
                <tbody><?php wishList(); ?></tbody>
                </table>
            </div>
            <div class='bottom'>
            <div class="left col-md-3 pull-left">
                <a href="index.php" class = "btn btn-info rounded-pill py-2 btn-block text-white text-uppercase font-weight-bolder">Continue Shopping</a>
            </div>
            <!-- <div class="right col-md-3 pull-right">
                <a href="index.php?checkout" class="btn btn-success rounded-pill py-2 btn-block text-white text-uppercase pull-right font-weight-bolder">Procceed to Order</a>
            </div> -->
            </div>
            <!-- End -->
            </div>
        </div>
        </div>
    </div>
</div>
