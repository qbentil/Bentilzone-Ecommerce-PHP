<div class="content">
<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main bodyRight show">
	<div class="card p-4">
	<div class="header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class = "title">Delivered Orders In Store</h3><hr>
                </div>
            </div>
			<?php require "./includes/search_item.php" ?>
		</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-bordered">
			<tr class = "info">
					<th>No. #</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
					<th>Unit Price (GHC)</th>
					<th>Total Amount (GHC)</th>
					<th>Customer Name</th>
					<th>Customer Phone</th>
					<th>Location</th>
					<th>Order Date</th>
					<th>Delivery Date</th>
					<th></th>
				</tr>
				<tbody>
				    <tr>
						<td>1</td>
                        <td>Lacoste T-shirt</td>
                        <td>2</td>
						<td>50.00</td>
						<td>100.00</td>
						<td>Bentil Shadrack</td>
						<td>+233556844331</td>
						<td>Pokuase Junction</td>
						<td>2016/01/16 22:30</td>
						<td>2016/01/17 22:30</td>
						<td class="td-actions ">
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