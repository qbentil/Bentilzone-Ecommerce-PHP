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
        <tr>
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
            echo "<tr>
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

    function add_product(){
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
            if(empty($waranty)){
                $error = true;
                echo "<script>alert('Enter Product Warranty');</script>";
                exit;
            }
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
                $error = true;
                $model_no = NULL;
            }
            if(empty($waranty)){
                $waranty = NULL;
            }
            move_uploaded_file($img1_temp, "../images/products_img/$img1");
            move_uploaded_file($img2_temp, "../images/products_img/$img2");
            move_uploaded_file($img3_temp, "../images/products_img/$img3");
            move_uploaded_file($img4_temp, "../images/products_img/$img4");
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
                    "INSERT INTO products(product_name, cat_id, subcat_id, img1, img2, img3, img4, feature, description, price, pro_model, stock warranty, keyword) 
                    values('$product_name', ' $cat_id', '$subcat_id', '$img1', '$img2', '$img3', ' $img4', '$feature', '$description' '$price', ' $model_no', '$stock', ' $warranty', ' $keywords')"
                );
                if($stmt->execute()){
                    echo "<script>alert('Product has been added successfully');</script>";
                }else{
                    echo "<script>alert('Product addition addition failed');</script>";
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
                    $rewaranty = $waranty;
                    $remodel = $model_no;
                    $rekey = $keywords;
                }
            }
        }
    }
?>