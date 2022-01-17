<div class="content">
<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main">
	<div class="card p-4">
	<div class="header">
            <div class="row">
                <div class="col-md-12 text-center text-capitalize">
                    <h3 class = "title">Out Of Stock products</h3><hr>
                </div>
            </div>
			<?php require "./includes/search_item.php" ?>
		</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-bordered">
			<tr class = "info">
					<th>SR. #</th>
					<th>Product Images</th>
					<th>Product Name</th>
					<th>Price</th>
					<th></th>
				</tr>
				<tbody><?php osPro($_SESSION['id']) ?></tbody>
			</table>
			<?php require './includes/pagination_r.php' ?>
		</div>
	</div>
</div>
	</div>
</div>