<?php 
if(isset($_GET['showcart'])){
    require "./cart.php";
}
if(isset($_GET['wishlist'])){
    require "./wishlist.php";
}
if(isset($_GET['checkout'])){
    require "./order.php";
}
if(isset($_GET['payment'])){
    require "./payment.php";
}
if(isset($_GET['prodetails'])){
    require "./prodetails.php";
}
if(isset($_GET['sort'])){
    require "./catPro.php";
}

?>