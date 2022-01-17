<?php
    require './includes/head.php'; 
    require "includes/home_nav.php";
?>
<link rel="stylesheet" href="css/newstore.css">
<div class="container">
<div class="col-md-10 mb-2 main">
    <span class="anchor" name = "formComplex"></span>
    <div class="header text-center text-uppercase col-md-10 pt-2 pb-1">
    <h3><span class="fa fa-shopping-basket"></span> BentilZone New Store</h3>
    </div>

    <!-- form complex example -->
    <form action="" method= "post" oninput='confirm.setCustomValidity(confirm.value != password.value ? "Passwords do not match." : "")' autocomplete = "off" enctype='multipart/form-data' name ="createStore" id ="createStore"  novalidate>
    <div class="form-row mt-2">
        <div class="col-sm-5 pb-2">
            <label for="storeName">Store Name <span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tags"></i></span></div>
                <input type="text" class="form-control" name = "storeName" placeholder="Enter store Name" required>
                <div class="invalid-feedback">Please enter your store Name.</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="brand">Brand Name</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                <input type="text" class="form-control" name = "brand" placeholder="Enter Brand" required>
                <div class="invalid-feedback">Please enter your Brand Name.</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="logo">Brand Logo</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="logo" placeholder="">
                    <label class="custom-file-label" for="logo">Upload Logo</label>
                </div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="description">Store Description<span class = "text-danger">*</span></label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-bell"></i></span></div>
                    <textarea class="form-control" name = "description" placeholder="Describe store here" required></textarea>
                    <div class="invalid-feedback">Please Write something brief about your store</div>
                </div>
                <small class="text-info">Write something brief about your store. less than 50 words</small>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="brand">Password<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                <input type="password" class="form-control" name = "password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" placeholder="Enter Password" required>
                <div class="valid-feedback">Password looks good</div>
                <div class="invalid-feedback">Please enter your password</div>
            </div>
            <small class="text-info">Atleast 8 characters and must include 1 number, 1 uppercase</small>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="logo">Retype Password<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                <input type="password" class="form-control" name = "confirm" placeholder="Confirm Password" required>
                <div class="invalid-feedback">Passwords do not match</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label for="mName">Manager Name<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                <input type="text" class="form-control" name = "mName" placeholder="Enter Manager Name"  required>
                <div class="invalid-feedback">Please enter your full Name</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label class="form-control-label" for="mEmail">Email<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div>
                <input type="email" class="form-control" name = "mEmail" placeholder="Enter Manager Email" required>
                <div class="invalid-feedback">Please enter your email</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label class="form-control-label" for="ePhone">Phone<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                <input type="number" class="form-control" name = "mPhone" placeholder="Enter Manager Phone" required>
                <div class="invalid-feedback">Please enter your phone</div>
            </div>
        </div>
        <div class="col-sm-5 pb-2">
            <label class="form-control-label" for="eAddress">Address<span class = "text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-picture-o"></i></span></div>
                <input type="text" class="form-control" name = "mAddress" placeholder="Enter Manager Address" required>
                <div class="invalid-feedback">Please enter your address</div>
            </div>
        </div>
        <div class="col-sm-10">
            <button class="btn-info text-white col-sm-12" type = "submit" name = "create_store">Create Store</button>
        </div>
    </div>
    </form>
</div>
</div>
    
    <?php   create_store(); ?>
    <?php require "includes/form_modals.php"; ?>
    <?php require "includes/footer.php"; ?>
    <?php require './includes/scripts.php' ?>
    <!-- <script src="./js/store.js"></script> -->
    <script>
        $("#createStore").submit(function(event) {

        // make selected form variable
        var vForm = $(this);

        /*
        If not valid prevent form submit
        https://developer.mozilla.org/en-US/docs/Web/API/HTMLSelectElement/checkValidity
        */
        if (vForm[0].checkValidity() === false) {
        event.preventDefault()
        event.stopPropagation()
        } else {
        
        // Replace alert with ajax submit here...
        // alert("your form is valid and ready to send");
        
        }

        // Add bootstrap 4 was-validated classes to trigger validation messages
        vForm.addClass('was-validated');


        });
    </script>
</body>

</html>