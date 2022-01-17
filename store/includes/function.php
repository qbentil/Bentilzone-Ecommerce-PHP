<?php
    // <!-- Add Category -->
    function add_cat() {
        require './includes/dbconfig.php';
        $error = false;
        if(isset($_POST['addCategory'])){
            $cat_name = $_POST['category'];
            if(empty($cat_name)){
                $error = true;
                echo "<script>alert('Cartegory Name cannot be empty!')</script>";
            }
            $stmt = $con->prepare("SELECT * FROM main_cat WHERE category_name = '$cat_name'");
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count > 0){
                $error = true;
                echo "<script>alert(' Category already exists in store')</script>";
            }
            if(!$error){
                // check if exist
                $stmt = $con->prepare("INSERT INTO main_cat(category_name) values(:category_name)");
                $stmt->bindParam(':category_name', $cat_name);
                $inserted = $stmt->execute();
                if($inserted){
                    echo "<script>alert(' Category Added Successfully!')</script>";
                }else{
                    echo "<script>alert('Category Addition Failed. Try again!')</script>";
                }
            }
        }
    } 
    function view_cat(){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM main_cat ORDER bY category_name ASC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $i = 1;
        while($row = $stmt->fetch()):
        echo "
        <tr class = 'text-center'>
        <td>".$i++."</td>
        <td>".$row['category_name']."</td>
        <td class='td-actions '>
            <a href=''><i class='fa fa-edit p-1 m-1 bg-success text-white'></i></a>
            <a href=''><i class='fa fa-times p-1 m-1 bg-danger text-white'></i></a>
        </td>
        </tr>
        ";
        endwhile;
    }
    // <!-- /Add Category -->
    function fetch_cat(){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM main_cat order by category_name ASC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
            echo "<option value=".$row['cat_id'].">".$row['category_name']."</option>";
        endwhile;
    }
    function fetch_subcat(){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM sub_cat order by subcat_name ASC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
            echo "<option value=".$row['subcat_id'].">".$row['subcat_name']."</option>";
        endwhile;
    }

    function add_subcat(){
        require './includes/dbconfig.php';
        $error = false;
        if(isset($_POST['addSubcat'])){
            $subcat_name = $_POST['subcat'];
            if(empty($subcat_name)){
                $error = true;
                echo "<script>alert('Sub Category Name cannot be empty!')</script>";
                exit;
            }
            if(isset($_POST['main_cat'])){
                $main_cat= $_POST['main_cat'];
            }else{
                $error = true;
                echo "<script>alert('Select Main Category')</script>";
                exit;
            }
            if(!$error){
                $stmt = $con->prepare("SELECT * FROM sub_cat WHERE subcat_name = '$subcat_name'");
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0){
                    echo "<script>alert('Sub Category already exist in store')</script>";
                }else{
                    $stmt = $con->prepare("INSERT INTO sub_cat(subcat_name, maincat_id) values(:subcat_name, :main_cat)");
                    $stmt->bindParam(':subcat_name', $subcat_name);
                    $stmt->bindParam(':main_cat', $main_cat);
                    $inserted = $stmt->execute();
                    if($inserted){
                        echo "<script>alert('Sub Category inserted successfully')</script>";
                    }else{
                        echo "<script>alert(' Failed to add Sub Category ')</script>";
                    }
                }
            }
        }
    }
    function view_subcat(){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM sub_cat ORDER bY subcat_name ASC");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $i = 1;
        while($row = $stmt->fetch()):
            $maincat_id = $row['maincat_id'];
            $stmt2 = $con->prepare("SELECT * FROM main_cat WHERE cat_id = $maincat_id ");
            $stmt2->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt2->execute();
            $maincat = $stmt2->fetch();
            echo "<tr class = 'text-center'>
            <td>".$i++."</td>
            <td>".$row['subcat_name']."</td>
            <td>".$maincat['category_name']."</td>
            <td class='td-actions'>
                <a href=''><i class='fa fa-edit p-1 m-1 bg-success text-white'></i></a>
                <a href=''><i class='fa fa-times p-1 m-1 bg-danger text-white'></i></a>
            </td>
            </tr>";
        endwhile;
    }
    function rowcount($table){
        require 'dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM $table");
        $stmt->execute();
        $num = $stmt->rowCount();
        echo $num;
    }
    function cCount($table, $id){
        require 'dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM $table where store_id = $id");
        $stmt->execute();
        $num = $stmt->rowCount();
        echo $num;
    }
    function osCount($id){
        require 'dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM products where store_id = $id and stock =0");
        $stmt->execute();
        $num = $stmt->rowCount();
        echo $num;
    }
    function osPro($id){
        require 'dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM products where store_id = $id and stock =0");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $i = 1;
        while($row = $stmt->fetch()):
            echo "
            <tr>
                <td>".$i++."</td>
                <td>
                    <img src='../images/products/".$row['img1']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img2']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img3']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img4']."' alt='' width = '20' height = '20'>
                </td>
                <td>".$row['product_name']."</td>
                <td>".$row['price']."</td>
                <td class='td-actions '>
                    <a href='' title = 'Quick view' data-toggle='modal' data-target='#viewProduct' ><i class='fa fa-picture-o p-1 m-1 bg-info text-white'></i></a>
                    <a href='index.php?outofstock_pro&del&id=".base64_encode($row['pro_id'])."' title = 'Edit' ><i class='fa fa-edit p-1 m-1 bg-success text-white'></i></a>
                    <a href='' title = 'Delete' data-toggle='modal' data-target='#myModal'><i class='fa fa-trash-o p-1 m-1 bg-danger text-white'></i></a>
                </td>
            </tr>
            ";
        endwhile;
    }
    function wishlistCount(){
        require 'dbconfig.php';
        $store = $_SESSION['id'];
        $count = 0;
        $stmt = $con->prepare("SELECT * FROM wishlist");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
            $pro = $row['pro_id'];
            $stmt0 = $con->prepare("SELECT * FROM products where pro_id = $pro");
            $stmt0->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt0->execute();
            $row0 = $stmt0->fetch();
            if($row0['store_id'] == $store){
                $count++;
            }
        endwhile;
        echo $count;
    }
    function wishlistpro(){
        require 'dbconfig.php';
        $store = $_SESSION['id'];
        $stmt = $con->prepare("SELECT * FROM wishlist");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $i = 1;
        while($row = $stmt->fetch()):
            $pro = $row['pro_id'];
            $stmt0 = $con->prepare("SELECT * FROM products where pro_id = $pro");
            $stmt0->setFetchMode(PDO:: FETCH_ASSOC);
            $stmt0->execute();
            $row0 = $stmt0->fetch();
            if($row0['store_id'] == $store){
                echo "
                <tr class = 'text-center'>
                    <td>".$i."</td>
                    <td>
                        <img src='../images/products/".$row0['img1']."' alt='' width = '20' height = '20'>
                        <img src='../images/products/".$row0['img2']."' alt='' width = '20' height = '20'>
                        <img src='../images/products/".$row0['img3']."' alt='' width = '20' height = '20'>
                        <img src='../images/products/".$row0['img4']."' alt='' width = '20' height = '20'>
                    </td>
                    <td>".$row0['product_name']."</td>
                    <td>".$row0['price']."</td>
                    <td>".$row0['stock']."</td>
                    <td class='td-actions '>
                        <a href='' title = 'Quick view' data-toggle='modal' data-target='#viewProduct' ><i class='fa fa-picture-o p-1 m-1 bg-info text-white'></i></a>
                        <a href='index.php?wishlist_pro&del&id=".base64_encode($row0['pro_id'])."' title = 'Edit' ><i class='fa fa-edit p-1 m-1 bg-success text-white'></i></a>
                        <a href='' title = 'Delete' data-toggle='modal' data-target='#myModal'><i class='fa fa-trash-o p-1 m-1 bg-danger text-white'></i></a>
                    </td>
                </tr>
                ";
            }
            $i++;
        endwhile;
    }
    function add_product(){

        $storeID =  $_SESSION['id'];
        // echo $storeID;
        require './includes/dbconfig.php';
        $error = false;
        if(isset($_POST['addProduct'])){
            $product_name = $_POST['name'];
            $feature = $_POST['feature'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $stock = $_POST['stock'];
            $warranty = $_POST['warranty'];
            $keywords = $_POST['keywords'];
            $model_no = $_POST['model'];

            $img1 = $_FILES['img1']['name'];
            $img1_temp = $_FILES['img1']['tmp_name'];

            $img2 = $_FILES['img2']['name'];
            $img2_temp = $_FILES['img2']['tmp_name'];

            $img3 = $_FILES['img3']['name'];
            $img3_temp = $_FILES['img3']['tmp_name'];

            $img4 = $_FILES['img4']['name'];
            $img4_temp = $_FILES['img4']['tmp_name'];
            // validation
            if(empty($product_name)){
                $error = true;
                echo "<script>alert('Enter Product name');</script>";
                exit;
            }
            if(isset($_POST['category'])){
                $cat_id= $_POST['category'];
                // echo $cat_id;
            }else{
                $error = true;
                echo "<script>alert('Select Product\'s Category');</script>";
                exit;
            }
            if(empty($price)){
                $error = true;
                echo "<script>alert('Enter Product price');</script>";
                exit;
            }
            // if(empty($warranty)){
            //     $error = true;
            //     echo "<script>alert('Enter Product Warranty');</script>";
            //     exit;
            // }
            if(empty($feature)){
                $error = true;
                echo "<script>alert('Enter Product feature');</script>";
                exit;
            }
            if(isset($_POST['subcategory'])){
                $subcat_id= $_POST['subcategory'];
            }else{
                $error = true;
                echo "<script>alert('Select Product\'s Sub Category');</script>";
                exit;
            }
            if(empty($description)){
                $error = true;
                echo "<script>alert('Enter Product Description');</script>";
                exit;
            }
            if(empty($stock)){
                $error = true;
                echo "<script>alert('Enter Number in Stock');</script>";
                exit;
            }
            if(empty($keywords)){
                $error = true;
                echo "<script>alert('Enter product keywords');</script>";
                exit;
            }
            if(empty($img1)){
                $error = true;
                echo "<script>alert('Add Product Image 1');</script>";
                exit;
            }
            if(empty($img2)){
                $error = true;
                echo "<script>alert('Add Product Image 2');</script>";
                exit;
            }
            if(empty($model_no)){
                // $error = true;
                $model_no = NULL;
            }
            if(empty($warranty)){
                $warranty = NULL;
            }
            move_uploaded_file($img1_temp, "../images/products/$img1");
            move_uploaded_file($img2_temp, "../images/products/$img2");
            move_uploaded_file($img3_temp, "../images/products/$img3");
            move_uploaded_file($img4_temp, "../images/products/$img4");
            if($error){
                $rename = $product_name;
                $reprice = $price;
                $refeature = $feature;
                $redescription = $description;
                $reimg1 = $img1;
                $reimg2 = $img2;
                $reimg3 = $img3;
                $reimg4 = $img4;
                $restock = $stock;
                $rediscount = $discount;
                $rewaranty = $warranty;
                $remodel = $model_no;
                $rekey = $keywords;
            }
            if(!$error){
                $stmt = $con->prepare(
                    "INSERT INTO products (product_name, cat_id, subcat_id, store_id, img1, img2, img3, img4, features, description, price, pro_model, stock, warranty, keywords, discount) 
                    values('$product_name', '$cat_id', '$subcat_id', '$storeID', '$img1', '$img2', '$img3', '$img4', '$feature', '$description', '$price', '$model_no', '$stock', '$warranty', '$keywords', '$discount')"
                );
                if($stmt->execute()){
                    echo "<script>alert('Product has been added successfully');</script>";
                }else{
                    echo "<script>alert('Product addition failed');</script>";
                    $rename = $product_name;
                    $reprice = $price;
                    $refeature = $feature;
                    $redescription = $description;
                    $reimg1 = $img1;
                    $reimg2 = $img2;
                    $reimg3 = $img3;
                    $reimg4 = $img4;
                    $restock = $stock;
                    $rediscount = $discount;
                    $rewaranty = $warranty;
                    $remodel = $model_no;
                    $rekey = $keywords;
                }
            }
        }
    }

    function logout(){
        if(isset($_GET['logout'])){
            session_start();
            ob_start();
            session_unset();
            session_destroy();
            header('location: ../home/store_login.php');
        }
    }
    function viewpro(){
        $storeID = $_SESSION['id'];
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * FROM products where store_id = $storeID order by date_added desc");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        $i = 1;
        while($row = $stmt->fetch()):
            echo "
            <tr class = 'text-center'>
                <td>".$i++."</td>
                <td>
                    <img src='../images/products/".$row['img1']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img2']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img3']."' alt='' width = '20' height = '20'>
                    <img src='../images/products/".$row['img4']."' alt='' width = '20' height = '20'>
                </td>
                <td>".$row['product_name']."</td>
                <td>".$row['price']."</td>
                <td>".$row['stock']."</td>
                <td class='td-actions '>
                    <a href='index.php?editPro&&id=".base64_encode($row['pro_id'])."' title = 'Quick view' data-toggle='modal' data-target='#viewProduct' ><i class='fa fa-picture-o p-1 m-1 bg-info text-white'></i></a>
                    <a href='index.php?editPro&&id=".base64_encode($row['pro_id'])."' title = 'Edit' ><i class='fa fa-edit p-1 m-1 bg-success text-white'></i></a>
                    <a href='' title = 'Delete' data-toggle='modal' data-target='#myModal'><i class='fa fa-trash-o p-1 m-1 bg-danger text-white'></i></a>
                </td>
            </tr>
            ";
        endwhile;
    }
    function store_details($id){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * from store where store_id = $id");
        $stmt->setFetchMode(PDO:: FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()):
        endwhile;    
    }
    function updateStore($id){
        require "./includes/dbconfig.php";
        $error =  false;
        if(isset($_POST['update'])){

            $sName = strip_tags(htmlspecialchars($_POST['storeName']));
            $sBrand = strip_tags(htmlspecialchars($_POST['brand']));
            $sDesc = strip_tags(htmlspecialchars($_POST['description']));
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
            
            // $check = $con->prepare("SELECT * FROM store WHERE brand_name = '$sBrand'");
            // $check->execute();
            // $result = $check->rowCount();
            // if($result > 0){
            //     $error = true;
            //     echo "<script>alert('Oops! Brand Name has been taken already.');</script>";
            //     $_SESSION['msg'] = "Oops! Brand Name has been taken already.";
            //     exit;
            // }
            if(!$error){

                // inserting data into database
                $sql = "UPDATE `store` SET
                `store_name`= '$sName',
                `brand_logo`='$logo',
                `brand_name`='$sBrand',
                `description`='$sDesc',
                `mName`='$mName',
                `mPhone`='$mPhone',
                `mEmail`='$mEmail',
                `mAddress`='$mAddress',
                WHERE `store_id` = $id";
                $stmt = $con->prepare($sql);
                if($stmt->execute()){
                    echo "<script>alert('Store Profile has been updated successfully');</script>";
                    // $_SESSION['msg'] = "Store Profile has been updated successfully";
                }else{
                    echo "<script>alert('Sorry Something went wrong');</script>";
                    // $_SESSION['msg'] = "Sorry Something went wrong.";
                }
            }else{
                echo "<script>alert('Fill out all forms correctly!');</script>";
                // $_SESSION['msg'] = "Fill out all forms correctly!";
            }
        }
    }
    function update_product(){
        require './includes/dbconfig.php';
        $error = false;
        if(isset($_POST['updateProduct'])){
            $pro_id = base64_decode($_GET['id']);
            $product_name = $_POST['name'];
            $feature = $_POST['feature'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $stock = $_POST['stock'];
            $warranty = $_POST['warranty'];
            $keywords = $_POST['keywords'];
            $model_no = $_POST['model'];
            $cat_id= $_POST['category'];
            $subcat_id= $_POST['subcategory'];

            // Checking and uploading new images
            if(!empty($_FILES['img1']['name'])){
                $img1 = $_FILES['img1']['name'];
                $img1_temp = $_FILES['img1']['tmp_name'];
                move_uploaded_file($img1_temp, "../images/products/$img1");
            }else{
                $img1 = $_SESSION['img1'] ;
            }
            if(!empty($_FILES['img2']['name'])){
                $img2 = $_FILES['img2']['name'];
                $img2_temp = $_FILES['img2']['tmp_name'];
                move_uploaded_file($img2_temp, "../images/products/$img2");
            }else{
                $img2 = $_SESSION['img2'] ;
            }
            if(!empty($_FILES['img3']['name'])){
                $img3 = $_FILES['img3']['name'];
                $img3_temp = $_FILES['img3']['tmp_name'];
                move_uploaded_file($img3_temp, "../images/products/$img3");
            }else{
                $img3 = $_SESSION['img3'] ;
            }
            if(!empty($_FILES['img4']['name'])){
                $img4 = $_FILES['img4']['name'];
                $img4_temp = $_FILES['img4']['tmp_name'];
                move_uploaded_file($img4_temp, "../images/products/$img4");
            }else{
                $img4 = $_SESSION['img4'] ;
            }
            // validation
            if(empty($product_name)){
                $error = true;
                echo "<script>alert('Enter Product name');</script>";
                exit;
            }

            if(empty($price)){
                $error = true;
                echo "<script>alert('Enter Product price');</script>";
                exit;
            }
            if(empty($feature)){
                $error = true;
                echo "<script>alert('Enter Product feature');</script>";
                exit;
            }
            if(empty($description)){
                $error = true;
                echo "<script>alert('Enter Product Description');</script>";
                exit;
            }
            if(empty($stock)){
                $error = true;
                echo "<script>alert('Enter Number in Stock');</script>";
                exit;
            }
            if(empty($keywords)){
                $error = true;
                echo "<script>alert('Enter product keywords');</script>";
                exit;
            }
            if(empty($model_no)){
                $model_no = NULL;
            }
            if(empty($warranty)){
                $warranty = NULL;
            }
            if(!$error){
                $stmt = $con->prepare(
                    "UPDATE products SET 
                    product_name ='$product_name', 
                    cat_id = $cat_id, 
                    subcat_id = $subcat_id, 
                    img1 = '$img1', 
                    img2 = '$img2', 
                    img3 = '$img3', 
                    img4 = '$img4', 
                    features = '$feature', 
                    description = '$description', 
                    price = '$price', 
                    pro_model = '$model_no', 
                    stock = '$stock', 
                    warranty '$warranty', 
                    keywords = '$keywords', 
                    discount = '$discount'
                    WHERE pro_id = $pro_id"
                );
                if($stmt->execute()){
                    echo "<script>alert('Product has been Updated successfully');</script>";
                }else{
                    echo "<script>alert('Product Update failed');</script>";
                }
            }
        }
    }
    function qView($id){
        require './includes/dbconfig.php';
        $stmt = $con->prepare("SELECT * from products WHERE store_id = $id AND pro_id = $pro_id");
    }
?>