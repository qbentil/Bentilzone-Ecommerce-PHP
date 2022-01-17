<?php 
        require './includes/dbconfig.php';
        if(isset($_GET['editPro'])){
            $pro_id = base64_decode($_GET['id']);
            $stmt = $con->prepare("SELECT * FROM products where pro_id = $pro_id");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while($row = $stmt->fetch()):
                $pro_name  = $row['product_name'];
                $_SESSION['img1']   = $row['img1'];
                $_SESSION['img2']   = $row['img2'];
                $_SESSION['img3']   = $row['img3'];
                $_SESSION['img4']   = $row['img4'];
                $discount  = $row['discount'];
                $stock  = $row['stock'];
                $warranty  = $row['warranty'];
                $keyword  = $row['keywords'];
                $price  = $row['price'];
                $description  = $row['description'];
                $features  = $row['features'];
                $pro_model  = $row['pro_model'];
                // Getting category
                $cat_id = $row['cat_id'];
                $getCat = $con->prepare("SELECT * FROM main_cat where cat_id = $cat_id");
                $getCat->setFetchMode(PDO:: FETCH_ASSOC);
                $getCat->execute();
                while($catRow = $getCat->fetch()):
                    $cat_id = $catRow['cat_id'];
                    $category = $catRow['category_name'];
                endwhile;
                // Getting subcategory
                $subcat_id = $row['subcat_id'];
                $getSubcat = $con->prepare("SELECT * FROM sub_cat where subcat_id = $subcat_id");
                $getSubcat->setFetchMode(PDO:: FETCH_ASSOC);
                $getSubcat->execute();
                while($subcatRow = $getSubcat->fetch()):
                    $subcategory = $subcatRow['subcat_name'];
                    $subcat_id = $subcatRow['subcat_id'];
                endwhile;
            endwhile;
        }
?>
<form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data' id = "addPro" novalidate>
        <h4 class="title bg-info text-white text-uppercase">Edit Products Here </h4>
    <div class="col-md-12">
        <div class="leftcontact">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control"  name="name" id="name" placeholder = "Enter Product name" value = "<?php echo $pro_name; ?>" required>
                        <div class="invalid-feedback">Enter Product Name</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cat">Category</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-th-list"></i></span>
                        </div>
                        <select name="category" id="cat" class = "form-control">
                        <option value = "<?php echo $cat_id; ?>" selected><?php echo $category ?></option>
                            <?php echo fetch_cat(); ?>
                        </select> 
                        <div class="invalid-feedback">Select Category</div>                   
                    </div>
                </div>
            <div class="form-group">
                    <label for="subcat">Sub Category</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-th-list"></i></span>
                        </div>
                        <select name="subcategory" id="subcat" class = "form-control" required>
                            <option  disabled>--Select sub Category--</option>
                            <option value = "<?php echo $subcat_id; ?>" selected><?php echo $subcategory ?></option>
                            <?php echo fetch_subcat(); ?>
                        </select>        
                        <div class="invalid-feedback">Select Sub category</div>            
                    </div>
                </div>
            <div class="form-group">
                <label for="discount">Discount(%)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="discount" id="discount" class="form-control"  placeholder = "Enter Product discount" value = "<?php echo $discount; ?>" required>
                    <div class="invalid-feedback">Enter Product Discount</div>
                </div>
            </div>
            <div class="form-group">
                <label for="stock">No. In Stock</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="stock" id="stock" class="form-control"  placeholder = "Enter Product quantity" value = "<?php if(isset($stock)) echo $stock ?>" required>
                    <div class="invalid-feedback">Enter Number in stock</div>
                </div>
            </div>
            <div class="form-group">
                <label for="model">Model Number</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="model" id="model" class="form-control"  placeholder = "Enter Product model" value = "<?php if(isset($pro_model)) echo $pro_model ?>" required>
                    <div class="invalid-feedback">Enter Product Model</div>
                </div>
            </div>

            <div class="form-group">
                <label for="warranty">Warranty</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="warranty" id="warranty" class="form-control"  placeholder = "Enter Product warranty" value = "<?php if(isset($warranty)) echo $warranty ?>" required>
                    <div class="invalid-feedback">Enter Product Warranty</div>
                </div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="price" name="price" id="price" class="form-control"  placeholder = "Enter Product price" value = "<?php if(isset($price)) echo $price ?>" required>
                    <div class="invalid-feedback">Enter Product Price</div>
                </div>
            </div>
    </div>

        <div class="rightcontact">  
            <div class="form-group">
                <label for="feature">Feature</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="feature" id="feature" class="form-control"  placeholder = "Enter Product feature" value = "<?php if(isset($features)) echo $features ?>" required>
                    <div class="invalid-feedback">Enter Product Feature</div>
                </div>
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="keywords" id="keywords" class="form-control"  placeholder = "Enter Product keyword" value = "<?php if(isset($keyword)) echo $keyword ?>" required>
                    <div class="invalid-feedback">Enter Product Keywords</div>
                </div>
                <small class = "text-info">Products are search using this keywords</small>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <textarea name="description" id="description" class="form-control"  placeholder = "Enter Product Description" required><?php if(isset($description)) echo $description ?></textarea>
                    <div class="invalid-feedback">Describe product here</div>
                </div>
            </div> 
            <div class="form-group">
                <label for="img1">Image 1<span></span></label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img1" placeholder="">
                        <label class="custom-file-label" for="logo">Upload Product Image 1</label>
                    </div>
                    <div class="invalid-feedback">Choose product image 1</div>
                    <img src='../images/products/<?php echo $_SESSION['img1'] ; ?>' alt='img1' width= '50' height = '50'>
                </div>
            </div>  
            <div class='form-group'>
            <label for='img2'>Image 2<span></span></label>  
            <div class='input-group'>
                <div class='custom-file'>
                    <input type='file' class='custom-file-input' name='img2' placeholder=''>
                    <label class='custom-file-label' for='logo'>Upload Product Image 2</label>
                </div>
                <img src='../images/products/<?php echo $_SESSION['img2'] ; ?>' alt='img2' width= '50' height = '50'>
            </div>

            </div>

            <div class='form-group'>
            <label for='img3'>Image 3<span></span></label>
            <div class='input-group'>
                <div class='custom-file'>
                    <input type='file' class='custom-file-input' name='img3' placeholder=''>
                    <label class='custom-file-label' for='logo'>Upload Product Image 3</label>
                </div>
                <img src='../images/products/<?php echo $_SESSION['img3'] ; ?>' alt='img3' width= '50' height = '50'>
            </div>

            </div>

            <div class='form-group'>
            <label for='img4'>Image 4<span></span></label>
            <div class='input-group'>
                <div class='custom-file'>
                    <input type='file' class='custom-file-input' name='img4' placeholder=''>
                    <label class='custom-file-label' for='logo'>Upload Product Image 4</label>
                </div>
                <img src='../images/products/<?php echo $_SESSION['img4'] ; ?>' alt='img4' width= '50' height = '50'>
            </div>

            </div>
        </div>
        </div>
        <div class="form-group">
        <button type='submit' class="btn btn-info  text-uppercase col-md-6" name = "updateProduct" data-toggle='modal' data-target='#proUpdate'>
            Update Product
        </button>
        <button type='reset' class="btn btn-secondary  text-uppercase col-md-5">reset</button>
        </div>
    
</form> 
<style>
    label{
        font-weight: bold !important;
        padding: 2%;
    }
</style>
<?php update_product() ?>
<div class='modal fade' id='proUpdate' tabindex='-1' role='dialog' aria-labelledby='proUpdateLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title' id='proUpdateLabel'>Delete Product</h4>
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
