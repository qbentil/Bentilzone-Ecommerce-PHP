
<div class="title">
    <h4>Products In Cart<span class = "fa fa-shopping-basket"><i ></i></span></h4> <hr>
</div>
<div class="px-4 px-lg-0 ">
    <div class="pb-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
            <form action="" method="post">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Product</div>
                        </th>

                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Availabity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Remove</div>
                        </th>
                        </tr>
                    </thead>
                    <tbody><?php viewCart(); ?></tbody>
                </table>
            </div>
            </form>
            <div class="bottom">
            <div class="left col-md-3 pull-left">
                <a href="index.php" class = "btn btn-warning rounded-pill py-2 btn-block text-white text-uppercase font-weight-bolder">Continue Shopping</a>
            </div>
            <div class="right col-md-3 pull-right">
                <a href="index.php?checkout" class="btn btn-success rounded-pill py-2 btn-block text-white text-uppercase pull-right font-weight-bolder">Procceed to Order</a>
            </div>
            </div>
            <!-- End -->
            </div>
        </div>
        </div>
    </div>
</div>

