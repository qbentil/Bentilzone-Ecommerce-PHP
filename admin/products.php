<div class="content">
<?php require './includes/nav.php' ?>
	<div class="bodyRight">
	<div class="container-main bodyRight show">
	<div class="card p-4">
		<div class="header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class = "title">Total Products In Store</h3><hr>
                </div>
            </div>
			<?php require "./includes/search_item.php" ?>
		</div>
		<div class="content table-responsive table-full-width">
			<table class="table table-hover table-bordered">
			<tr class = "info">
					<th>SR. #</th>
					<th>Product Name</th>
					<th>Price (GHC)</th>
					<th>No. In Stock</th>
					<th>Date Modified</th>
					<th></th>
				</tr>
				<tbody>
				    <tr>
						<td>1</td>
						<td>Bentil Emmanuel</td>
						<td>+233556844331</td>
						<td>
							<i class="fa fa-money"></i> B.S.5
						</td>
						<td>
							2016/01/16 22:30
						</td>
						<td class="td-actions ">
                <a href="" title = "Quick view" data-toggle="modal" data-target="#viewProduct" ><i class="fa fa-picture-o p-1 m-1 bg-info text-white"></i></a>
                <a href="" title = "Edit" ><i class="fa fa-edit p-1 m-1 bg-success text-white"></i></a>
                <a href="" title = "Delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-times p-1 m-1 bg-danger text-white"></i></a>
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
  <!-- Button trigger modal -->

  <!-- Confirm Delete Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
        </div>
        <div class="modal-body">
          Are your sure?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
	<!-- Edit Modal -->

<div class="modal fade" id="viewProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog p-2" role="document">
    <div class="modal-content">
    <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <div class="form-title text-center">
        <h4 class="text-center title text-uppercase text-info">Product Details</h4>
        </div>
        <div class="p-2">
            <div class="form-group">
              <input type="email" class="form-control text-info" id="email"placeholder="Your email address">
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" id="password1" placeholder="Your password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control text-info" id="password2" placeholder="Confirm Password">
            </div>
            <button type="button" class="btn btn-info btn-block btn-round">Register</button>
        </di>
      </div>
</div>
<style>
    @media (min-width: 576px){
    .modal-dialog {
        max-width: 400px;
        
        .modal-content {
        padding: 1rem;
        }
    }
    }

    .modal-header {
    .close {
        margin-top: -1.5rem;
    }
    }

    .form-title {
    margin: -2rem 0rem 2rem;
    }

    .btn-round {
    border-radius: 3rem;
    }

    .delimiter {
    padding: 1rem;  
    }

    .social-buttons {
    .btn {
        margin: 0 0.5rem 1rem;
    }
    }

    .signup-section {
    padding: 0.3rem 0rem;
    }
</style>