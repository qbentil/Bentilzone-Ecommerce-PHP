<?php 
session_start();

    if($_SESSION['allowed'] != session_id()){
        header("location: ../home/store_login.php");
    }else{
        // define('ID', $_SESSION['id']);
        $_SESSION['id'];
        $brand =$_SESSION['bName'];
        $store =$_SESSION['sName'];
        $logo =$_SESSION['logo'];
    }
?>
<?php require './includes/function.php' ?>
<?php logout(); ?>
<?php require './includes/head.php' ?>
<div class="wrapper">
		<?php require './includes/bodyleft.php'?>
		<?php require './includes/bodyright.php' ?>
</div>
<?php require './includes/scripts.php' ?>
