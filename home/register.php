<?php require './includes/head.php' ?>
<?php require './includes/navbar.php' ?>
<?php newCustomer(); ?>
<link rel="stylesheet" href="css/form.css">
<section class="login-block">
    <div class="container con">
    <div class="row">
        <div class="col-md-6 login-sec">
            <h2 class="text-center title">Customer Sign Up</h2>
    <form class="login-form" id = "SignUp" method = "post" autocomplete = "off" novalidate oninput='confirm.setCustomValidity(confirm.value != uPassword.value ? "Passwords do not match." : "")'>
    <div class="alert-danger text-center text-danger font-weight-bold"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?></div>
    <div class="form-group">
        <label class="form-control-label" for="uEmail">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter Full Name" pattern = "^[A-Za-z ]{5,}$" name = "uName" id = "uName" required>
        <!-- <div class="valid-feedback">Company name looks good</div> -->
        <div class="invalid-feedback">Please enter your full name</div>
    </div>
    <div class="form-group">
        <label class="form-control-label" for="uEmail">Email</label>
        <input type="email" class="form-control" placeholder="Enter Email" name = "uEmail" id = "uEmail" required>
        <!-- <div class="valid-feedback">Company name looks good</div> -->
        <div class="invalid-feedback">Please enter your account email ID</div>
    </div>
    <div class="form-group">
    <label class="form-control-label" for="uPassword">Password</label>
        <input type="password" class="form-control" placeholder="Enter password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$"   name = "uPassword" id = "uPassword" required>
        <div class="invalid-feedback">Please enter your Password</div>
        <small class="text-info">Atleast 8 characters and must include 1 number, 1 uppercase</small>
    </div>
    <div class="form-group">
    <label class="form-control-label" for="confirm">Retype Password</label>
        <input type="password" class="form-control" placeholder="Confirm password"  name = "confirm" id = "confirm" required>
        <div class="invalid-feedback">Passwords Do Not Match</div>
    </div>


    <div class="form-check">
        <div class="custom-control custom-checkbox mb-2 pull-left">
            <input type="checkbox" class="custom-control-input" id="accept" name = "accept" required>
            <label class="custom-control-label" for="accept">Agree to BentilZone terms and Policies</label>
            <div class="invalid-feedback">Agree to terms</div>
        </div>
        <button type="submit" class="btn btn-login float-right text-white" name = "btn_newCustomer">Submit</button>
    </div><br clear = "all">
    <div class="adds">
        <a href="login.php">Already have a customer? Login</a>
    </div>
    </form>
    <div class="copy-text">Welcome to <i class="fa fa-shopping-basket"></i><a href="">BentilZone</a></div>
            </div>
            <div class="col-md-6 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is First Slide</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
    </div>
        </div>
        <div class="carousel-item">
        <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Second Slide</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>	
        </div>
    </div>
                </div>	   
                
            </div>
        </div>
    </div>
</section>
    <?php require './includes/footer.php' ?>
    <?php require './includes/scripts.php' ?>
    <script>
        $("#SignUp").submit(function(event) {

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