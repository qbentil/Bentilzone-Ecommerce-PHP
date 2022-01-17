<?php require "./includes/function.php" ?>

<form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data'>
        <h4 class="title"> Add New Product </h4>
    <div class="contentform">
        <div class="p-1 mb-2">Note: <span  class="text-danger">*</span><i> fields are required</i></div>
        <div class="leftcontact">
                <div class="form-group">
                    <p>Product Name<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                        <input type="text" name="name" id="name" placeholder = "Enter Product name" value = "<?php if(isset($rename)) echo $rename ?>">
                </div> 
                <div class="form-group">
                    <p>Category<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-th-list"></i></span>
                    <select name="category" id="category">
                        <option value="default" selected disabled>--Select Category--</option>
                        <?php echo fetch_cat(); ?>
                    </select>
                </div> 

            <div class="form-group">
            <p>Price<span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
                <input type="text" name="price" id="price" placeholder = "Enter Product price" value = "<?php if(isset($reprice)) echo $reprice ?>">
            </div>

            <div class="form-group">
            <p>Discount(%)</p>    
            <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="text" name="discount" id="discount" placeholder = "Enter Product discount(%)" value = "<?php if(isset($rediscount)) echo $rediscount ?>">
            </div>  

            <div class="form-group">
            <p>No. In Stock<span>*</span></p>
            <span class="icon-case"><i class="fa fa-home"></i></span>
                <input type="text" name="stock" id="stock" placeholder = "Enter number in stock" value = "<?php if(isset($restock)) echo $restock ?>">
            </div>

            <div class="form-group">
            <p>Model</p>
            <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                <input type="text" name="model" id="model" placeholder = "Enter Product model" value = "<?php if(isset($remodel)) echo $remodel ?>">
            </div>

            <div class="form-group">
            <p>Warranty<span>*</span></p>
            <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                <input type="text" name="warranty" id="warranty" placeholder = "Enter Product Warranty" value = "<?php if(isset($rewarranty)) echo $rewarranty ?>">
            </div>  
            <div class="form-group">
            <p>Keywords<span>*</span></p>
            <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                <input type="text" name="keywords" id="keywords" placeholder = "Enter Product keywords" value = "<?php if(isset($rekey)) echo $rekey ?>">
            </div>  
    </div>

        <div class="rightcontact">  
                <div class="form-group">
                <p>Feature<span>*</span> </p>   
                <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                    <input type="text" name="feature" id="feature" placeholder = "Enter Product Feature" value = "<?php if(isset($refeature)) echo $refeature ?>">

                </div>
                <div class="form-group">
                    <p>Sub Category<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-th-large"></i></span>
                    <select name="subcategory" id="subcategory">
                        <option value="default" selected disabled>--Select sub Category--</option>
                        <?php echo fetch_subcat(); ?>
                    </select>
                </div> 
                <div class="form-group">
                <p>Description<span>*</span></p>
                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                    <textarea name="description" rows="14" placeholder = "Enter Product Description" ><?php if(isset($redescription)) echo $redescription ?></textarea>

                </div>  
                <div class="form-group">
                <p>Image 1<span>*</span></p>
                <span class="icon-case"><i class="fa fa-picture-o"></i></span>
                    <input type="file" name="img1" id="img1"  value = "<?php if(isset($reimg1)) echo $reimg1 ?>">

                </div>  

                <div class="form-group">
                <p>Image 2<span>*</span></p>  
                <!-- <span class="icon-case"><i class="fa fa-picture-o"></i></span>
                    <input type="file" name="img2" id="img2" value = "<?php if(isset($reimg2)) echo $reimg2 ?>"> -->
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" placeholder="">
                        <label class="custom-file-label" for="logo">Upload Product Image 2</label>
                    </div>
                </div>

                </div>

                <div class="form-group">
                <p>Image 3</p>
                <span class="icon-case"><i class="fa fa-picture-o"></i></span>
                    <input type="file" name="img3" id="img3" value = "<?php if(isset($reimg3)) echo $reimg3 ?>">

                </div>

                <div class="form-group">
                <p>Image 4</p>   
                <span class="icon-case"><i class="fa fa-picture-o"></i></span>
                    <input type="file" name="img4" id="img4"value = "<?php if(isset($reimg4)) echo $reimg4 ?>">

                </div>
        </div>
        </div>
    <button type="submit" class="bouton-contact" name = "addProduct">Add Product</button>
    
</form> 
<?php echo add_product(); ?>