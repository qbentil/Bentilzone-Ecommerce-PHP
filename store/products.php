<div class='content'>
<?php require './includes/nav.php' ?>
	<div class='bodyRight'>
	<div class='container-main bodyRight show'>
	<div class='card p-4'>
		<div class='header'>
            <div class='row'>
                <div class='col-md-12 text-center'>
                    <h3 class = 'title'>Total Products In Store</h3><hr>
                </div>
            </div>
			<?php require './includes/search_item.php' ?>
		</div>
		<div class='content table-responsive '>
			<table class='table table-hover  table-bordered'>
			<tr class = 'info'>
					<th>SR. #</th>
					<th>Product Images</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>No. in Stock</th>
					<th></th>
				</tr>
				<tbody>
          <?php viewpro(); ?>
				</tbody>
			</table>
			<?php require './includes/pagination_r.php' ?>
		</div>
	</div>
</div>
	</div>
</div>
  <!-- Button trigger modal -->
<div class='modal fade' id='editPro' tabindex='-1' role='dialog' aria-labelledby='basicModal' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h4 class='modal-title' id='myModalLabel'>Large Modal</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <h3>Modal Body</h3>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- Confirm Delete Modal -->
  <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title' id='myModalLabel'>Delete Product</h4>
        </div>
        <div class='modal-body'>
          Are your sure?
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary'>Save changes</button>
        </div>
      </div>
    </div>
  </div>
	<!-- Edit Modal -->

<div class='modal fade' id='viewProduct' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header border-bottom-0'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <div class='modal-body'>
          <div class='form-title text-center'>
            <h4 class='text-center text-uppercase text-info'>Product Name</h4>
          </div>
            <div class=' font-small'>
              <table class='table-borderless table-fixed  table-responsive-lg'>
                  <tbody>
                    <tr class = 'mb-2'>
                      <td class='pl-3'>
                        <img src = '../images/products/phone2.jpg' width = '90'  height = '90'>
                        <img src = '../images/products/casio4.jpg' width = '90' height = '90'>
                      </td>
                      <td class='pl-3'>
                        <img src = '../images/products/h_blender1.jpg' width = '90' height = '90'>
                        <img src = '../images/products/cups1.jpg' width = '90' height = '90'>
                      </td>
                    </tr>
                    <tr class = 'mb-2'>
                    <tr >
                      <td class='pl-3'><strong class='text-info'>Category: </strong><strong>GHC50.00 </strong></td>
                      <td class='pl-3'><strong class='text-info'> Subcategory: </strong><strong>10%</strong></td>
                    </tr>
                    <tr class = 'mb-2'>
                    <tr >
                      <td class='pl-3'><strong class='text-info'>Price: </strong><strong>GHC50.00 </strong></td>
                      <td class='pl-3'><strong class='text-info'> Discount: </strong><strong>10%</strong></td>
                    </tr>
                    <tr class = 'mb-2'>
                    <tr >
                      <td class='pl-3'><strong class='text-info'>No. in Stock </strong><strong>GHC50.00 </strong></td>
                      <td class='pl-3'><strong class='text-info'> Warranty: </strong><strong>10%</strong></td>
                    </tr>
                    <tr class = 'mb-2'>
                    <tr >
                      <!-- <td class='pl-3'><strong class='text-info'>Feature:  </strong><strong>GHC50.00 </strong></td> -->
                    </tr>
                  </tbody>
              </table>
              <strong class='text-info'> Description </strong><strong>highly durablesaves energyportable</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Edit pro -->

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