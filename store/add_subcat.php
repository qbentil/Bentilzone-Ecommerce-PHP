
<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data' id = "addSubcat" novalidate>
        <h4 class="title"> Add New Sub Category </h4>
    <div class="contentform">
    <!-- <div class="p-1 mb-2">Note: <span  class="text-danger">*</span><i> fields are required</i></div> -->

        <div class="form-group">
            <label for="username">Sub Category Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-list"></i></span>
                </div>
                <input type="text" class="form-control"  name="subcat" id="subcat" placeholder = "Enter Sub Category name" value = "<?php if(isset($rename)) echo $rename ?>" required>
                <div class="invalid-feedback">Enter Sub Category Name</div>
            </div>
        </div>
        <div class="form-group">
            <label for="username">Main Category</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-th-list"></i></span>
                </div>
                <select name="main_cat" id="main_cat" class = "form-control" required>
                    <option value="default" selected disabled>--Select Category--</option>
                    <?php echo fetch_cat(); ?>
                </select> 
                <div class="invalid-feedback">Select Category</div>                   
            </div>
        </div>
        </div>
    <button type="submit" name = "addSubcat" class="bouton-contact">Add Sub Category</button>
    
</form> 
    </div>
</div>
<?php echo add_subcat(); ?>