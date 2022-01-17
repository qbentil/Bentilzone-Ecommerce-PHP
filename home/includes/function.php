<?php 
    function verifyStore($email, $url, $sName){
        $html = "Hello ".$sName."! <br><br>Thank you for Choosing BentilZone. <br>
            Your store has been created successfuly. Click on the link below to activate it. <br clear = 'all'>".$url
            . "<br><br> <span class = 'fa fa-shopping-basket'></span>BetilZone!.... Shopping made Easy!";
            // phpmailer
            require 'PHPMailerAutoload.php';
            require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                              // SMTP username
        $mail->Password = PASS;                               // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom(EMAIL, 'BentilZone');
        $mail->addAddress($email);                               // Add a recipient

        $mail->addReplyTo(EMAIL);

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                     // Set email format to HTML

        $mail->Subject = 'BentilZone Store Activation';
        $mail->Body    = $html;

        if(!$mail->send()) {
            // echo "<script>alert('Sorry your account resgistration failed. Please try again.')</script>";
            $_SESSION['msg'] = "Sorry your account resgistration failed. Please try again".$mail->ErrorInfo;
            // echo   $mail->ErrorInfo;
        } else {
            // echo "<script>alert('You have registered Successfuly. Please check your email, $email to activate your store.')</script>";
            $_SESSION['msg'] = "You have registered Successfuly. Please check your email, $email to activate your store.";
        }
    }
    function verifyCustomer($email, $url, $sName){
        $html = "Hello ".$sName."! <br><br>Thank you for Choosing BentilZone. <br>
            Your have successfuly rgistered as a customer. Click on the link below to activate it. <br clear = 'all'>".$url
            . "<br><br> <span class = 'fa fa-shopping-basket'></span>BetilZone!.... Shopping made Easy!";
            // phpmailer
            require 'PHPMailerAutoload.php';
            require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                              // SMTP username
        $mail->Password = PASS;                               // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom(EMAIL, 'BentilZone');
        $mail->addAddress($email);                               // Add a recipient

        $mail->addReplyTo(EMAIL);

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                     // Set email format to HTML

        $mail->Subject = 'BentilZone Store Activation';
        $mail->Body    = $html;

        if(!$mail->send()) {
            echo "<script>alert('Sorry your account resgistration failed. Please try again.')</script>";
            echo   $mail->ErrorInfo;
        } else {
            echo "<script>alert('You have registered Successfuly. Please check your email, $email to activate your store.')</script>";
        }
    }
    function create_store(){
        require "./includes/dbconfig.php";
        $error =  false;
        if(isset($_POST['create_store'])){
            $sName = strip_tags(htmlspecialchars($_POST['storeName']));
            $sBrand = strip_tags(htmlspecialchars($_POST['brand']));
            $sDesc = strip_tags(htmlspecialchars($_POST['description']));
            $Pass1 = strip_tags(htmlspecialchars($_POST['password']));
            $Pass2 = strip_tags(htmlspecialchars($_POST['confirm']));
            $mName = strip_tags(htmlspecialchars($_POST['mName']));
            $mEmail = strip_tags(htmlspecialchars($_POST['mEmail']));
            $mPhone = strip_tags(htmlspecialchars($_POST['mPhone']));
            $mAddress = strip_tags(htmlspecialchars($_POST['mAddress']));
            // getting brand logo
            $logo = $_FILES['logo']['name'];
            $logo_temp = $_FILES['logo']['tmp_name'];
            // upload logo to brand folder
            move_uploaded_file($logo_temp, "../images/brands/$logo");

            if(isset($_FILES['logo']['name'])){
                $logo = $_FILES['logo']['name'];
                $logo_temp = $_FILES['logo']['tmp_name'];
                // upload logo to brand folder
                move_uploaded_file($logo_temp, "../images/brands/$logo");
            }else{
                $logo = NULL;
            }
            
            $Password = md5($Pass1);
            $check = $con->prepare("SELECT * FROM store WHERE brand_name = '$sBrand'");
            $check->execute();
            $result = $check->rowCount();
            if($result > 0){
                $error = true;
                // echo "<script>alert('Oops! Brand Name has been taken already.');</script>";
                $_SESSION['msg'] = "Oops! Brand Name has been taken already.";
                exit;
            }
            if(!$error){

                // inserting data into database
                $stmt = $con->prepare("INSERT INTO store (store_name, brand_name, brand_logo, description, password,  mName, mPhone, mEmail, mAddress) values('$sName', '$sBrand', '$logo','$sDesc', '$Password', '$mName', '$mPhone', '$mEmail', '$mAddress')");
                if($stmt->execute()){
                    $sql = $con->prepare("SELECT * FROM store WHERE brand_name = '$sBrand'");
                    $sql->setFetchMode(PDO:: FETCH_ASSOC);
                    $row = $sql->execute();
                    $last_id = $row['store_id'];
                    $token = sha1($last_id);
                    $url = "http//".$_SERVER['SERVER_NAME'].":89".'/bentiZone/home/verifyStore.php?id='.base64_encode($last_id).'&token='.$token;
                    verifyStore($mEmail, $url, $sBrand);
                    // echo "<script>alert('Store Has been created succesfully. Please check your email to validate your store!');</script>";
                    $_SESSION['msg'] = "Store Has been created succesfully. Please check your email to validate your store!";
                }else{
                    // echo "<script>alert('Sorry Something went wrong');</script>";
                    $_SESSION['msg'] = "Sorry Something went wrong.";
                }
            }else{
                // echo "<script>alert('Fill out all forms correctly!');</script>";
                $_SESSION['msg'] = "Fill out all forms correctly!";
            }
        }
    }
    function store_login(){

        require "./includes/dbconfig.php";
        if(isset($_POST['store_login'])){
            session_start();
            ob_start();
            $email = strip_tags(htmlspecialchars($_POST['mEmail']));
            $password = strip_tags(htmlspecialchars($_POST['sPassword']));
            $rememberMe = isset($_POST['remember'])? 1:0;

            $dbpassword = md5($password);
            $stmt = $con->prepare("SELECT * from store where mEmail = '$email' AND password = '$dbpassword'");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            $row = $stmt->fetch();
            // $count = $stmt->rowCount();
            if($stmt->rowCount() > 0){
                if($row['activated'] == 1){
                    if($rememberMe == 1){
                        setcookie('brand', $brand);
                        setcookie('password', base64_encode($password));
                    }
                    $_SESSION['allowed'] = session_id();
                    $_SESSION['id'] = $row['store_id'];
                    $_SESSION['bName'] = $row['brand_name'];
                    $_SESSION['sName'] = $row['store_name'];
                    $_SESSION['logo'] = $row['brand_logo'];
                    // header("location: http//".$_SERVER['SERVER_NAME'].":89/bentiZone/admin/store/index.php");
                    header("Location: ../store/index.php");

                }else{
                    // echo "<script>alert('Please Check Your email to activate your store.');</script>";
                    $_SESSION['msg'] = "Please Check Your email to activate your store";
                }
            }else{
                // echo "<script>alert('Incorrect manager email or Password');</script>";
                $_SESSION['msg'] = "Incorrect manager email or Password";
            }
        }
    }

    function newCustomer(){
        require "./includes/dbconfig.php";
        $error =  false;
        if(isset($_POST['btn_newCustomer'])){
            $uName = strip_tags(htmlspecialchars($_POST['uName']));
            $uEmail = strip_tags(htmlspecialchars($_POST['uEmail']));
            // $email = filter_input(INPUT_POST,"uEmail", FILTER_SANITIZE_EMAIL);
            $uPassword = strip_tags(htmlspecialchars($_POST['uPassword']));
            $confirm = strip_tags(htmlspecialchars($_POST['confirm']));
            $accept = isset($_POST['accept'])? 1:0;
            if($accept == 0){
                $error = true;
                exit;
            }
            if($uPassword != $confirm){
                $error = true;
                exit;
            }
            $check = $con->prepare("SELECT * FROM customers WHERE email = '$uEmail'");
            $check->execute();
            $result = $check->rowCount();
            if($result == 1){
                $error = true;
                // echo "<script>alert('Oops! Email already used.');</script>";
                $_SESSION['msg'] = "Oops! Email already used";

                exit;
            }
            if(!$error){
                $dbpassword = md5($uPassword);
                $stmt = $con->prepare("INSERT INTO customers(customer_name, email, password) values(:uName, :uEmail, :uPassword)");
                $stmt->bindParam(':uName', $uName);
                $stmt->bindParam(':uEmail', $uEmail);
                $stmt->bindParam(':uPassword', $dbpassword);
                if($stmt->execute()){
                    echo "<script>alert('User Registration successful')</script>";

                    verifyCustomer($uEmail, $url, $uName);
                }else{
                    // echo "<script>alert('Sorry Try Again!')</script>";
                    $_SESSION['msg'] = "Sorry Try Again!";
                }
            }

        }
    }
    function customerLogin(){
        
        require "./includes/dbconfig.php";
        if(isset($_POST['btn_login'])){
            session_start();
            ob_start();
            $email = strip_tags(htmlspecialchars($_POST['uEmail']));
            $password = strip_tags(htmlspecialchars($_POST['uPassword']));
            $rememberMe = isset($_POST['remember'])? 1:0;

            $dbpassword = md5($password);
            $stmt = $con->prepare("SELECT * from customers where email = '$email' AND password = '$dbpassword'");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            $row = $stmt->fetch();
            // $count = $stmt->rowCount();
            if($stmt->rowCount() > 0){
                if($row['activated'] == 1){
                    if($rememberMe == 1){
                        setcookie('brand', $brand);
                        setcookie('password', base64_encode($password));
                    }
                    $_SESSION['allowed'] = session_id();
                    $_SESSION['id'] = $row['customer_id'];
                    $_SESSION['name'] = $row['customer_name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['img'] = $row['user_pic'];
                    // header("location: http//".$_SERVER['SERVER_NAME'].":89/bentiZone/admin/store/index.php");
                    header("Location: ../customer/index.php");

                }else{
                    // echo "<script>alert('Please Check Your email to activate your account.');</script>";
                    $_SESSION['msg'] = "Please Check Your email to activate your account";
                }
            }else{
                // echo "<script>alert('Incorrect user email or Password');</script>";
                $_SESSION['msg'] = "Incorrect user email or Password";
            }
        }
    }

    function display($table, $content, $id){
        require "./includes/dbconfig.php";
        $stmt = $con->prepare("SELECT * FROM $table order by $content ASC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()){
            echo "<li><a href='index.php?sort&&by=".base64_encode($id)."&&id=".base64_encode($row[$id])."&&what=".$row[$content]."' class='dropdown-item'>";
            echo $row[$content]; 
            echo "</a></li>";
        }
    }
    function sortBy(){
        require "./includes/dbconfig.php";
        if(isset($_GET['sort'])){
            $by = base64_decode($_GET['by']);
            $col = $_GET["what"];
            $id = base64_decode($_GET['id']);
            if($by == "cat_id"){
                $what = "Category";
            }else{
                $what = "Sub Category";
            }
            $stmt = $con->prepare("SELECT * from products WHERE `$by` = $id");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            echo "<div class='title'><h4 class = 'text-info'>".$what.": ".$col."(".$stmt->rowCount().")</h4> <hr> </div>
        <div class='row'>";
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch()):
                        echo
                        "
                        <div class='col-md-4'>
                            <figure class='card card-product-grid card-lg'> <a href='index.php?prodetails&id=".base64_encode($row['pro_id'])."' class='img-wrap' data-abc='true'><img src='../images/products/".$row['img1']."'></a>
                                <figcaption class='info-wrap'>
                                    <div class='row'>
                                        <div class='col-md-8'> <a href='#' class='title' data-abc='true'>".$row['product_name']."</a> </div>
                                        <div class='col-md-4'>
                                            <div class='rating text-right'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> </div>
                                        </div>
                                    </div>
                                </figcaption>
                                <div class='bottom-wrap'>
                                <form method = 'post'>
                                    <input type = 'hidden' name = 'pro_id' value = '".$row['pro_id']."'>
                                    <button name = 'addCart' class='btn btn-success float-right' data-abc='true'>Add To Basket <i class='fa fa-shopping-cart'></i></button>
                                </form>
                                    <div class='price-wrap'> <span class='price h5'>GHC".$row['price']."</span> <br> <small class='text-success'>Free Delivery</small> </div>
                                </div>
                            </figure>
                            <input type='hidden' name='pro_id' value ='".$row['pro_id']."'>
                        </div>
                        ";
                    endwhile;
                }else{
                    echo "<div class = 'title'><h4 class = 'text-center font-weight-bold text-muted text-capitalize'>No Product in this ".$what."</h4></div>";
                }
            echo "</div>";
        }
    }
    function addCart($btn, $table){
        if(isset($_POST[$btn])){
            require "./includes/dbconfig.php";
            if(!isset($_SESSION['id'])){
                echo "<script>alert('Login to your account first')</script>"; 
                header("location: ../home/login.php");
            }else{
                $pro_id = $_POST['pro_id'];
                $user = $_SESSION['id'];
                $stmt = $con->prepare("SELECT * FROM $table WHERE customer_id = $user AND pro_id = $pro_id");
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    if($table == "cart"){
                        echo "<script>alert('Product is already in your cart!')</script>";
                    }else{
                        echo "<script>alert('Product is already in your wishlist!')</script>"; 
                    }
                }else{
                    $stmt = $con->prepare("INSERT INTO $table (customer_id, pro_id) VALUES ($user, $pro_id)");
                    if($stmt->execute()){
                        if($table == "cart"){
                            echo "<script>alert('Added to cart successfuly')</script>";
                        }else{
                            echo "<script>alert('Added to wishlist successfuly')</script>";
                        }
                    }
                }
            }
        }
    }
    function cartCount($table){
        require "./includes/dbconfig.php";
        $user = $_SESSION['id'];
        $stmt = $con->prepare("SELECT * From $table where customer_id = $user");
        $stmt->execute();
        $num = $stmt->rowCount();
        echo $num;
    }
    function newArrivals(){
        require "./includes/dbconfig.php";
        $stmt = $con->prepare("SELECT * FROM products order by date_added DESC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
            echo
            "
            <div class='col-md-4'>
                <figure class='card card-product-grid card-lg'> <a href='index.php?prodetails&id=".base64_encode($row['pro_id'])."' class='img-wrap' data-abc='true'><img src='../images/products/".$row['img2']."'></a>
                    <figcaption class='info-wrap'>
                        <div class='row'>
                            <div class='col-md-8'> <a href='#' class='title' data-abc='true'>".$row['product_name']."</a> </div>
                            <div class='col-md-4'>
                                <div class='rating text-right'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> </div>
                            </div>
                        </div>
                    </figcaption>
                    <div class='bottom-wrap'>
                        <form method = 'post'>
                            <input type = 'hidden' name = 'pro_id' value = '".$row['pro_id']."'>
                            <button name = 'addCart' class='btn btn-success float-right' data-abc='true'>Add To Basket <i class='fa fa-shopping-cart'></i></button>
                        </form>
                        <div class='price-wrap'> <span class='price h5'>GHC".$row['price']."</span> <br> <small class='text-success'>Free Delivery</small> </div>
                    </div>
                </figure>
                <input type='hidden' name='pro_id' value ='1'>
            </div>
            ";
        endwhile;
    }
    function hotTrends(){
        require "./includes/dbconfig.php";
        $stmt = $con->prepare("SELECT * FROM products order by date_added DESC limit 4");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
            echo
            "
            <div class='col-md-3 col-sm-6 mb-2'>
            <div class='product-grid'>
                <div class='product-image'>
                    <a href='#'>
                        <img class='pic-1' src='../images/products/".$row['img2']."'>
                        <img class='pic-2' src='../images/products/".$row['img1']."'>
                    </a>
                    <ul class='social'>
                        <li><a href='' data-tip='Quick View'><i class='fa fa-picture-o'></i></a></li>
                        <li><a href='' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>
                        <li><a href='' data-tip='Add to Cart'><i class='fa fa-shopping-cart'></i></a></li>
                    </ul>
                    <span class='product-new-label'>Sale</span>
                    <span class='product-discount-label'>".$row['discount']."%</span>
                </div>
                <ul class='rating'>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star'></li>
                    <li class='fa fa-star disable'></li>
                </ul>
                <div class='product-content'>
                    <h3 class='title'><a href='#'>".$row['product_name']."</a></h3>
                    <div class='price'>GHC".$row['price']."
                        <span>$20.00</span>
                    </div>
                    <a class='add-to-cart' href=''>+ Add To Cart</a>
                </div>
            </div>
            </div>
            ";
        endwhile;
    }

    function hotTrends1(){
        require "./includes/dbconfig.php";
        $stm = $con->prepare("SELECT * FROM products");
        $stm->execute();
        $num = $stm->rowCount();
            $stmt = $con->prepare("SELECT * FROM products order by date_added DESC limit 0, $num");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            $row = $stmt->fetch();
            while($row = $stmt->fetch()):
                echo "<div class='row'>";
                for($i = 1; $i <= $num; $i++){
                    $stmt = $con->prepare("SELECT * FROM products where pro_id = $i");
                    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
                    $stmt->execute();
                    $row = $stmt->fetch();
                    echo
                    "
                    <div class='col-md-3 col-sm-6 mb-2'>
                    <div class='product-grid'>
                        <div class='product-image'>
                            <a href='index.php?prodetails&id=".base64_encode($row['pro_id'])."'>
                                <img class='pic-1' src='../images/products/".$row['img2']."'>
                                <img class='pic-2' src='../images/products/".$row['img1']."'>
                            </a>
                            <form method = 'post'>
                                <input type = 'hidden' name = 'pro_id' value = '".$row['pro_id']."'>
                                <ul class='social'>
                                    <li><a href='' data-tip='Quick View'><button class='bg-transparent border-0 text-white' ><i class='fa fa-picture-o'></i></button></a></li>
                                    <li><a href='' data-tip='Add to Wishlist'><button class='bg-transparent border-0 text-white' name = 'wishlist'><i class='fa fa-heart'></i></button></a></li>
                                    <li><a href='' data-tip='Add to Cart'><button class='bg-transparent border-0 text-white' name = 'addCart'><i class='fa fa-shopping-cart'></i></button></a></li>
                                </ul>
                            </form>
                            <span class='product-new-label'>Sale</span>
                            <span class='product-discount-label'>".$row['discount']."%</span>
                        </div>
                        <ul class='rating'>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star disable'></li>
                        </ul>
                        <div class='product-content'>
                            <h3 class='title'><a href='#'>".$row['product_name']."</a></h3>
                            <div class='price'>GHC".$row['price']."
                                <span>$20.00</span>
                            </div>
                            <a class='add-to-cart' href=''>+ Add To Cart</a>
                        </div>
                    </div>
                    </div>
                    ";
                }
                echo "</div>";
            endwhile;
    }

    function featured(){
        require "./includes/dbconfig.php";
        $stm = $con->prepare("SELECT * FROM products");
        $stm->execute();
        $num = $stm->rowCount();
            $stmt = $con->prepare("SELECT * FROM products order by date_added DESC limit 0, $num");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            $row = $stmt->fetch();
            while($row = $stmt->fetch()):
                echo "<div class='row'>";
                for($i = 1; $i <= $num; $i++){
                    $stmt = $con->prepare("SELECT * FROM products where pro_id = $i");
                    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
                    $stmt->execute();
                    $row = $stmt->fetch();
                    echo
                    "
                    <div class='col-md-3 col-sm-6 mb-2'>
                    <div class='product-grid'>
                        <div class='product-image'>
                            <a href='#'>
                                <img class='pic-1' src='../images/products/".$row['img2']."'>
                                <img class='pic-2' src='../images/products/".$row['img1']."'>
                            </a>
                            <ul class='social'>
                                <li><buton data-tip='Quick View'><i class='fa fa-picture-o'></i></buton></li>
                                <li><a href='' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>
                                <li><a href='' data-tip='Add to Cart'><i class='fa fa-shopping-cart'></i></a></li>
                            </ul>
                            <span class='product-new-label'>Sale</span>
                            <span class='product-discount-label'>".$row['discount']."%</span>
                        </div>
                        <ul class='rating'>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star'></li>
                            <li class='fa fa-star disable'></li>
                        </ul>
                        <div class='product-content'>
                            <h3 class='title'><a href='#'>".$row['product_name']."</a></h3>
                            <div class='price'>GHC".$row['price']."
                                <span>$20.00</span>
                            </div>
                            <a class='add-to-cart' href=''>+ Add To Cart</a>
                        </div>
                    </div>
                    </div>
                    ";
                }
                echo "</div>";
            endwhile;
    }

    function proDetails(){
        require "./includes/dbconfig.php";
        if(isset($_GET['prodetails'])){
            $pro_id = base64_decode($_GET['id']);
            $stmt = $con->prepare("SELECT * from products WHERE pro_id = $pro_id");
            $stmt->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt->execute();
            while($row = $stmt->fetch()):
                $price = $row['price'];
                $discount = $row['discount'];
                $strike = (($discount/100)* $price) + $price;
                echo 
                "
                <div class='col-lg-2 order-lg-1 order-2'>
                <ul class='image_list'>
                    <li data-image='../images/products/".$row['img2']."'><img src='../images/products/".$row['img2']."' alt=''></li>
                    <li data-image='../images/products/".$row['img3']."'><img src='../images/products/".$row['img3']."' alt=''></li>
                    <li data-image='../images/products/".$row['img4']."'><img src='../images/products/".$row['img4']."' alt=''></li>
                </ul>
                </div>
                <div class='col-lg-4 order-lg-2 order-1'>
                    <div class='image_selected'><img src='../images/products/".$row['img1']."' alt=''></div>
                </div>
                <div class='col-lg-6 order-3'>
                    <div class='product_description'>
                        <nav>
                            <ol class='breadcrumb'>
                                <li class='breadcrumb-item text-info'><a href='index.php'>Products</a></li>
                                <li class='breadcrumb-item active text-info'>Product details</li>
                            </ol>
                        </nav>
                        <div class='product_name text-dark text-capitalize'>".$row['product_name']."</div>
                        <div class='product-rating text-success' style = 'font-size: 1.5rem'>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star-half-full'></i>
                        </div>
                        <small class = 'text-center text-secondary text-uppercase text-muted'>23 Reviews</small>
                        <div> <span class='product_price str'><strike style='color:#f00' 'text-success'>GHC".$strike."</strike></span> <strike class='product_discount'> <span class = 'text-success'>GHC".$price."<span> </strike></div>
                        <div> <span class='product_saved'>You Saved:</span> <span style='color:black'>GHC".($strike-$price)."<span> </div>
                        <hr class='singleline'>
                        <div>
                            <span class='product_info'>".$row['features']."</span><br><br>
                            <span class='product_info'>".$row['description']."</span><br> 
                        </div>
                        <hr class='singleline'>
                        <div class='order_info d-flex flex-row'>
                            <form action='#'>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6' style='margin-left: 13px;'>
                                <div class='product_quantity'><span class = 'text-secondary font-weight-bold text-muted'>QTY: </span><input id='quantity_input' type='text' pattern='[0-9]*' value='1'>
                                    <div class='quantity_buttons'>
                                        <div id='add' class='quantity_inc quantity_control'><i class='fa fa-chevron-up'></i></div>
                                        <div id='min' class='quantity_dec quantity_control'><i class='fa fa-chevron-down'></i></div>
                                    </div>
                                </div>
                            </div>
                            <button class='col-xs-6'> 
                                <form method = 'POST'>
                                    <input type = 'hidden' name = 'pro_id' value = '".$row['pro_id']."'>
                                    <button  name = 'addCart' class='btn btn-success shop-button m-1' data-abc='true'><i class='fa fa-shopping-cart'></i>Add to Cart</button>
                                    <button  name = 'wishlist' class='btn btn-danger shop-button m-1' data-abc='true'><i class='fa fa-heart'>Wishlist</i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                
                ";
            endwhile;
        }
    }
    function viewCart(){
        require "./includes/dbconfig.php";
        $user = $_SESSION['id'];
        $stmt = $con->prepare("SELECT * FROM cart WHERE customer_id =$user");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $num = $stmt->rowCount();
        if($num > 0){
            while($row = $stmt->fetch()):
                $pro = $row['pro_id'];
                $cart_id = $row['cart_id'];
                $stmt0 = $con->prepare("SELECT * FROM products WHERE pro_id =$pro");
                $stmt0->setFetchMode(PDO:: FETCH_ASSOC);
                $stmt0->execute();
                while($row = $stmt0->fetch()):
                    $cat = $row['cat_id'];
                    $stmt1 = $con->prepare("SELECT * FROM main_cat WHERE cat_id = $cat");
                    $stmt1->setFetchMode(PDO:: FETCH_ASSOC);
                    $stmt1->execute();
                    $row1 = $stmt1->fetch();
                    echo 
                    "
                    <tr>
                        <th scope='row' class='border-0'>
                            <div class='p-2'>
                            <img src='../images/products/".$row['img1']."' alt='' width='70' class='img-fluid rounded shadow-sm'>
                            <div class='ml-3 d-inline-block align-middle'>
                                <h5 class='mb-0'> <a href='#' class='text-dark d-inline-block align-middle'>".$row['product_name']."</a></h5><span class='text-muted font-weight-normal font-italic d-block'>Category: ".$row1['category_name']."</span>
                            </div>
                            </div>
                        </th>";
                        if($row['stock'] > 0){
                            echo "<td class='border-0 align-middle'><strong class = 'text-success'>In Stock</strong></td>";
                        }else{
                            echo "<td class='border-0 align-middle'><strong class = 'text-danger'>Out of Stock</strong></td>";
                        }
                        echo "<td class='border-0 align-middle'><strong>GHC".$row['price']."</strong></td>
                        <td class='border-0 align-middle'><strong><input type='number' class='form-control col-md-3 text-success' name='qty' value = '1'></strong></td>
                        <td class='border-0 align-middle'><a href='index.php?showcart&&delcart&&id=".$cart_id."' class='text-danger'><i class='fa fa-trash text-danger pr-1'></i></a></td>
                    </tr>
                    ";
                endwhile;
            endwhile;
        }else{
            echo 
            "<tr><td class='align-middle'>
            <div>
                <h4 class='text-capitalize text-muted'>No Product In your Cart</h4>
            </div>
            </td></tr>
            ";
        }
    }
    function wishList(){
        require "./includes/dbconfig.php";
        $user = $_SESSION['id'];
        $stmt = $con->prepare("SELECT * FROM wishlist WHERE customer_id =$user");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $num = $stmt->rowCount();
        if($num > 0){
            while($row = $stmt->fetch()):
                $pro = $row['pro_id'];
                $wishlist_id = $row['wishlist_id'];
                $stmt0 = $con->prepare("SELECT * FROM products WHERE pro_id =$pro");
                $stmt0->setFetchMode(PDO:: FETCH_ASSOC);
                $stmt0->execute();
                while($row = $stmt0->fetch()):
                    $cat = $row['cat_id'];
                    $stmt1 = $con->prepare("SELECT * FROM main_cat WHERE cat_id = $cat");
                    $stmt1->setFetchMode(PDO:: FETCH_ASSOC);
                    $stmt1->execute();
                    $row1 = $stmt1->fetch();
                    echo 
                    "
                    <tr>
                        <th scope='row' class='border-0'>
                            <div class='p-2'>
                            <img src='../images/products/".$row['img1']."' alt='' width='70' class='img-fluid rounded shadow-sm'>
                            <div class='ml-3 d-inline-block align-middle'>
                                <h5 class='mb-0'> <a href='#' class='text-dark d-inline-block align-middle'>".$row['product_name']."</a></h5><span class='text-muted font-weight-normal font-italic d-block'>Category: ".$row1['category_name']."</span>
                            </div>
                            </div>
                        </th>";
                        echo "<td class='border-0 align-middle'><strong>GHC".$row['price']."</strong></td>";
                        if($row['stock'] > 0){
                            echo "<td class='border-0 align-middle'><strong class = 'text-success'>In Stock</strong></td>";
                        }else{
                            echo "<td class='border-0 align-middle'><strong class = 'text-danger'>Out of Stock</strong></td>";
                        }
                        echo"<td class='align-middle'>
                            <form method = 'post'>
                            <a href='index.php?wishlist&&delwishlist&&id=".$wishlist_id."' class='text-white btn btn-danger' title = 'Remove'><i class='fa fa-trash'></i></a>
                                <input type = 'hidden' name = 'pro_id' value = '".$row['pro_id']."'>
                                <button name = 'addCart'  class='text-white btn btn-success rounded-pill ml-3'><i class='fa fa-shopping-cart mr-2'></i>Add to Cart</button>
                            </form>
                            </td>
                    </tr>
                    ";
                endwhile;
            endwhile;
        }else{
            echo 
            "<tr><td class='align-middle'>
            <div>
                <h4 class='text-capitalize text-muted'>No Product In your wishlist</h4>
            </div>
            </td></tr>
            ";
        }
        if(isset($_GET['delwishlist'])){
            $wishlist_id = $_GET['id'];
            $stmt = $con->prepare("DELETE FROM wishlist WHERE wishlist_id = $wishlist_id");
            $stmt->execute();
        }
    }
    function delete($msg, $table, $pk){
        require "./includes/dbconfig.php";
        if(isset($_GET[$msg])){
            $id = $_GET['id'];
            $stmt = $con->prepare("DELETE FROM $table WHERE $pk = $id");
            $stmt->execute();
        }
    }
    delete("delcart", "cart", "cart_id");
    delete("delwishlist", "wishlist", "wishlist_id");
?>