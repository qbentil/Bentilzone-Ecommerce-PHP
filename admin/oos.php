<div class="content">
<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main">
	<div class="card p-4">
	<div class="header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class = "title">Out Of Stock products</h3><hr>
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
					<th>Date Finished</th>
					<th>Total Sold Out</th>
					<th></th>
				</tr>
				<tbody>
				    <tr>
						<td>1</td>
						<td>Bentil Emmanuel</td>
						<td>Ben@gmail.com</td>
						<td>Pokuase</td>
						<td>2016/01/16 22:30</td>
						<td class="td-actions ">
                            <a href="" ><i class="fa fa-picture-o p-2"></i></a>
                            <a href=""><i class="fa fa-edit p-2"></i></a>
                            <a href=""><i class="fa fa-times p-2"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
			<?php require './includes/pagination_r.php' ?>
		</div>
	</div>
</div>
	</div>
</div>