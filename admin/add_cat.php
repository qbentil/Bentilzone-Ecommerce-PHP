<?php 
    require './includes/dbconfig.php' ;
    include './includes/function.php';
?>
<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data'>
        <h4 class="title"> Add New Category </h4>
    <div class="contentform">
    <div class="p-1 mb-2">Note: <span  class="text-danger">*</span><i> fields are required</i></div>
                <div class="form-group">
                    <p>Category Name<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-th-list"></i></span>
                        <input type="text" name="category" name="category">
                    <div class="validation"></div>
                </div>   
        </div>
    <button type="submit" name = "addCategory" class="bouton-contact">Add Category</button>
    
    </form> 
    </div>
</div>
<?php
    add_cat();
?>