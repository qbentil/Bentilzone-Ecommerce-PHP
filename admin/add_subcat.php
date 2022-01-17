<?php require './includes/function.php' ?>
<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data'>
        <h4 class="title"> Add New Sub Category </h4>
    <div class="contentform">
    <div class="p-1 mb-2">Note: <span  class="text-danger">*</span><i> fields are required</i></div>
        <div class="leftcontact">
                <div class="form-group">
                    <p>Sub Category Name<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-th-large"></i></span>
                        <input type="text" name="subcat" placeholder = "Enter sub category name">
                </div>  
        </div>

        <div class="rightcontact">  
                <div class="form-group">
                    <p>Main Category<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-th-list"></i></span>
                    <select name="main_cat" id="">
                        <option value="default" selected disabled>-Select Main Category-</option>
                        <?php echo fetch_cat(); ?>
                    </select>
                </div>  
        </div>
        </div>
    <button type="submit" name = "addSubcat" class="bouton-contact">Add Sub Category</button>
    
</form> 
    </div>
</div>
<?php echo add_subcat(); ?>