<?php require './includes/head.php' ?>
<?php require './includes/navbar.php' ?>
<link rel="stylesheet" href="css/form.css">
<style>
    .copy-text, h5{
        color: orangered !important;
        font-size: 0.9rem !important;
    }
    small{
        color: orangered !important;
    }
    .login-sec{
        margin: 0px !important;
        padding-top: .5% !important;
        padding-bottom: 0% !important;
        padding-right: 2% !important;
        padding-left: 2% !important;
    }
    .title{
        color: #33cabb !important;
    }
    .login-block{
        margin-top: 0px !important;
        padding-top: .5% !important;
    }
</style>
<section class="login-block">
    <div class="container con">
    <h2 class="text-center title pt-3">Create New Store</h2>
    <form action="" method= "post" oninput='confirm.setCustomValidity(confirm.value != password.value ? "Passwords do not match." : "")' autocomplete = "off" enctype='multipart/form-data' name ="createStore" id ="createStore"  novalidate>
    <div class="alert-danger text-center text-danger"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?></div>
    <div class="row">
        <div class="col-md-6 login-sec">
            <h5 class="text-center text-uppercase">Store Details</h5>
            <div class="form-group">
            <label class="form-control-label"  for="storeName">Store Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tags"></i></span></div>
                    <input type="text" class="form-control" name = "storeName" placeholder="Enter store Name" required>
                    <div class="invalid-feedback">Please enter your store Name.</div>
                </div>
            </div>
            <div class="form-group">
            <label class="form-control-label"  for="brand">Brand Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                    <input type="text" class="form-control" name = "brand" placeholder="Enter Brand" required>
                    <div class="invalid-feedback">Please enter your Brand Name.</div>
                </div>
            </div>
            <div class="form-group">
            <label class="form-control-label" for="uPassword">Brand Logo(Optional)</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="logo" placeholder="">
                    <label class="custom-file-label" for="logo">Upload Logo</label>
                </div>
            </div>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="Description">Description</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-bell"></i></span></div>
                    <textarea class="form-control" name = "description" placeholder="Describe store here" required></textarea>
                    <div class="invalid-feedback">Please Write something brief about your store</div>
                </div>
                <small class = "text-info">Write something brief about your store. less than 50 words</small>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="brand">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                    <input type="password" class="form-control" name = "password" id = "password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" placeholder="Enter Password" required>
                    <div class="valid-feedback">Password looks good</div>
                    <div class="invalid-feedback">Please enter your password</div>
                </div>
                <small class = "text-info">Atleast 8 characters and must include 1 number, 1 uppercase</small>
            </div>
            <div class="form-group">
            <label class="form-control-label" for="logo">Retype Password</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                <input type="password" class="form-control" name = "confirm" id = "confirm" placeholder="Confirm Password" required>
                <div class="invalid-feedback">Passwords do not match</div>
            </div>
            </div>
            <div class="form-check">
            </div><br>
            </div>
        <div class="col-md-6 login-sec">
        <h5 class="text-center text-uppercase">Manager info</h5>
            <div class="form-group">
            <label class="form-control-label" for="mName">Manager Name</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                <input type="text" class="form-control" name = "mName" placeholder="Enter Manager Name"  required>
                <div class="invalid-feedback">Please enter your full Name</div>
            </div>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="mEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div>
                    <input type="email" class="form-control" name = "mEmail" placeholder="Enter Manager Email" required>
                    <div class="invalid-feedback">Please enter your email</div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="ePhone">Phone</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                    <input type="number" class="form-control" name = "mPhone" placeholder="Enter Manager Phone" required>
                    <div class="invalid-feedback">Please enter your phone</div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="eAddress">Address</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                    <input type="text" class="form-control" name = "mAddress" placeholder="Enter Manager Address" required>
                    <div class="invalid-feedback">Please enter your address</div>
                </div>
            </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox mb-2 pull-left">
                    <input type="checkbox" class="custom-control-input" id="rememberMe" name = "remember" required>
                    <label class="custom-control-label" for="rememberMe">Agree to BentilZone terms and Policies</label>
                    <div class="invalid-feedback">Agree to terms</div>
                </div>
            </div>


            <div class="form-check">
                <button type="submit" class="btn btn-login float-right text-white">Submit</button>
            </div><br>
            </form>
            </div>
        </div>
        <div class="copy-text text-center pb-3">Welcome to <i class="fa fa-shopping-basket"></i><a href="">BentilZone</a></div>
    </div>
</section>
    <?php require './includes/footer.php' ?>
    <?php require './includes/scripts.php' ?>
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