<?php require './includes/head.php' ?>
<?php store_login(); ?>
<?php require './includes/home_nav.php' ?>
<link rel="stylesheet" href="css/form.css">
<body>
<section class="login-block">
    <div class="container con">
    <div class="row">
        <div class="col-md-5 login-sec">
            <h2 class="text-center title">Store Login</h2>
    <form class="login-form" action = "<?php echo $_SERVER['PHP_SELF'];?>" id = "storeLogin" method = "post" autocomplete = "off" novalidate>
        <div class="result text-center text-white">
            <div class="success bg-success p-1">ok</div>
            <div class="error bg-danger p-1"></div>
        </div>
    <div class="form-group">
        <label class="form-control-label" for="uEmail">Manager Email</label>
        <input type="email" class="form-control" placeholder="Enter Email" name = "mEmail" id = "mEmail" required>
        <!-- <div class="valid-feedback">Company name looks good</div> -->
        <div class="invalid-feedback">Please enter Manager email ID</div>
    </div>
    <div class="form-group">
    <label class="form-control-label" for="uPassword">Password</label>
        <input type="password" class="form-control" placeholder="Enter password"  name = "sPassword" id = "sPassword" required>
        <div class="invalid-feedback">Please enter store Password</div>
    </div>


    <div class="form-check">
        <div class="custom-control custom-checkbox mb-2 pull-left">
            <input type="checkbox" class="custom-control-input" id="rememberMe" name = "remember">
            <label class="custom-control-label" for="rememberMe">Remeber Me</label>
        </div>
        <button type="submit" class="btn btn-login float-right text-white" id = "btn-login" name = "store_login">Sign In</button>
    </div><br clear = "all">
    <div class="adds">
        <a href="">Forgot your Password?</a>
        <a href="newstore.php">Create Store</a>
    </div>
    </form>
    <div class="copy-text">Welcome to <i class="fa fa-shopping-basket"></i><a href="">BentilZone</a></div>
    </div>
            <div class="col-md-7 banner-sec text-info">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
            <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
        <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                    <h2>This is First Slide</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>	
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="....">
            <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                    <h2>This is Second Slide</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>	
            </div>
        </div>
        <div class="carousel-item">
        <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="....">
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


    // $('.success').show();
    $("#storeLogin").submit(function(event) {
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
        //     $.ajax({
        //     type: 'POST',
        //     url: 'ajax.php',
        //     data: formData + '&action=storelogin',
        // }).done(function(result){
        //     console.log(result);
        //     var data = jQuery.parseJSON(result);
        //     if(data.status == 0){
        //         $('.error').fadeIn(1000);
        //         $('.error').html(data.msg);
        //         // timer();
        //     }else{
        //         document.location = './store/index.php';
        //     }
        // })
        }
        // Add bootstrap 4 was-validated classes to trigger validation messages
        vForm.addClass('was-validated');
    });
</script>

