
<div class="content">
<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main bodyRight show">
	<div class="card p-4">
	<div class="header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class = "title">Total Sub Categories In Store</h3><hr>
                </div>
            </div>
			<?php require "./includes/search_item.php" ?>
		</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-bordered">
			<tr class = "info">
					<th>SR. #</th>
					<th>Sub Category Name</th>
                    <th>Category</th>
                    <th>Action</th>
				</tr>
				<tbody>
				<?php view_subcat(); ?>
				</tbody>
			</table>
			<?php require './includes/pagination_l.php' ?>
		</div>
	</div>
</div>
	</div>
</div>