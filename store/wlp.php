<div class="content">
	<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main bodyRight show">
	<div class="card p-4">
	<div class="header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class = "title">Wishlist products</h3><hr>
                </div>
            </div>
			<?php require "./includes/search_item.php" ?>
		</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-bordered">
			<tr class = "info">
					<th>SR. #</th>
					<th>Product Name</th>
					<th>Product Images</th>
					<th>No in Stock</th>
					<th>Total Sold Out</th>
					<th></th>
				</tr>
				<tbody><?php wishlistpro(); ?></tbody>
			</table>
			<?php require './includes/pagination_r.php' ?>
		</div>
	</div>
</div>
	</div>
</div>