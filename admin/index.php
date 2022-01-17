<?php 
session_start();


if(isset($_POST['action'])){
    if($_SESSION['allowed'] != session_id()){
        header("location: http//".$_SERVER['SERVER_NAME'].":89/bentizone/home/index.php");
    }else{

	}
}

?>
<?php require './includes/head.php' ?>
<div class="wrapper">
		<?php require './includes/bodyleft.php' ?>
		<?php require './includes/bodyright.php' ?>
</div>
<?php require './includes/scripts.php' ?>
