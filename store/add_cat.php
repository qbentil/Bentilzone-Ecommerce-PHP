<?php 
    require './includes/dbconfig.php' ;
?>
<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off'  id = "addCat" novalidate>
        <h4 class="title"> Add New Category </h4>

    <div class="contentform">
    <div class="p-1 mb-2">Note: <span  class="text-danger">*</span><i> fields are required</i></div>
        <div class="form-group">
            <label for="username">Category Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-th-list"></i></span>
                </div>
                <input type="text" class="form-control"  name="category" id="category" placeholder = "Enter Category name" value = "<?php if(isset($rename)) echo $rename ?>" required>
                <div class="invalid-feedback">Enter Category Name</div>
            </div>
        </div> 
    </div>
    <button type="submit" name = "addCategory" class="bouton-contact">Add Category</button>
    
    </form> 
    </div>
</div>
<?php
    add_cat();
?>