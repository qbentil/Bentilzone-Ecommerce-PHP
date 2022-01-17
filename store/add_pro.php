<?php echo add_product(); ?>
<form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data' id = "addPro" novalidate>
        <h4 class="title"> Add New Product </h4>
    <div class="col-md-12">
        
        <div class='alert alert-danger text-center font-weight-bold text-danger'><?php if(isset($msgError)) echo $msgError ?></div>
        <div class='alert alert-success text-center font-weight-bold text-success'></div>
        <div class="leftcontact">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control"  name="name" id="name" placeholder = "Enter Product name" value = "<?php if(isset($rename)) echo $rename ?>" required>
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
                            <option  disabled>--Select Category--</option>
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
                    <input type="text" name="discount" id="discount" class="form-control"  placeholder = "Enter Product discount" value = "<?php if(isset($rediscount)) echo $rediscount ?>" required>
                    <div class="invalid-feedback">Enter Product Discount</div>
                </div>
            </div>
            <div class="form-group">
                <label for="stock">No. In Stock</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="stock" id="stock" class="form-control"  placeholder = "Enter Product quantity" value = "<?php if(isset($restock)) echo $restock ?>" required>
                    <div class="invalid-feedback">Enter Number in stock</div>
                </div>
            </div>
            <div class="form-group">
                <label for="model">Model Number</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="model" id="model" class="form-control"  placeholder = "Enter Product model" value = "<?php if(isset($restock)) echo $restock ?>" required>
                    <div class="invalid-feedback">Enter Product Model</div>
                </div>
            </div>

            <div class="form-group">
                <label for="warranty">Warranty</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="warranty" id="warranty" class="form-control"  placeholder = "Enter Product warranty" value = "<?php if(isset($restock)) echo $restock ?>" required>
                    <div class="invalid-feedback">Enter Product Warranty</div>
                </div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="price" name="price" id="price" class="form-control"  placeholder = "Enter Product price" value = "<?php if(isset($reprice)) echo $reprice ?>" required>
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
                    <input type="text" name="feature" id="feature" class="form-control"  placeholder = "Enter Product feature" value = "<?php if(isset($restock)) echo $restock ?>" required>
                    <div class="invalid-feedback">Enter Product Feature</div>
                </div>
            </div>
            <div class="form-group">
                <label for="keywords">Keywords</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="keywords" id="keywords" class="form-control"  placeholder = "Enter Product keyword" value = "<?php if(isset($restock)) echo $restock ?>" required>
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
                    <textarea name="description" id="description" class="form-control"  placeholder = "Enter Product Description" required><?php if(isset($restock)) echo $restock ?></textarea>
                    <div class="invalid-feedback">Describe product here</div>
                </div>
            </div> 
            <div class="form-group">
                <label for="img1">Image 1<span></span></label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img1" placeholder="" required>
                        <label class="custom-file-label" for="logo">Upload Product Image 1</label>
                    </div>
                    <div class="invalid-feedback">Choose product image 1</div>
                </div>
            </div>  
            <div class="form-group">
            <label for="img2">Image 2<span></span></label>  
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img2" placeholder="" required>
                    <label class="custom-file-label" for="logo">Upload Product Image 2</label>
                </div>
            </div>

            </div>

            <div class="form-group">
            <label for="img3">Image 3<span></span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img3" placeholder="" required>
                    <label class="custom-file-label" for="logo">Upload Product Image 3</label>
                </div>
            </div>

            </div>

            <div class="form-group">
            <label for="img4">Image 4<span></span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img4" placeholder="" required>
                    <label class="custom-file-label" for="logo">Upload Product Image 4</label>
                </div>
            </div>

            </div>
        </div>
        </div>
    <button type="submit" class="bouton-contact" name = "addProduct">Add Product</button>
    
</form> 
