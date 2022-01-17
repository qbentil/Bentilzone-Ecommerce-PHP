
<?php 
	require_once('includes/dbconfig.php');
    if(isset($_GET['action']) && $_GET['action'] == 'verify'){
	$id 	= base64_decode($_GET['id']);
	$token 	= $_GET['token'];
	// echo $id;
	// echo $token;

	$stmt = $con->prepare("SELECT * FROM store WHERE store_id = $id");
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $row = $stmt->execute();
    $count = $stmt->rowCount();
	if(is_array($row) && $count >0) {
		if(sha1($row['store_id']) == $token) {
			$sql = $con->prepare("UPDATE store SET activated = 1 WHERE store_id = $id");
			if($run = $sql->execute()) {
				$msg =  'Congratulations, Your Store has been activated. You can login now.<br>
				<a href="../login.html">Click here to login</a>';
			} else {
				$msg =  'Some problem occurred. Please Try after some time.';
			}
		} else {
            $msg =  "We can't find your detail in our database" ;
		}
	} else {
		$msg = "We can't find your detail in our database" ;
	}
    }   
?>
<?php require './includes/head.php' ?>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <div class="container-fluid">
        <h5 class="title"><span class="fa fa-shopping-basket"></span>BentilZone</h5>
            <div class="col-9">
                <?php if(isset($msg)) echo $msg; ?>
            </div>
        </div>
            
    </div>
</div>
    <?php require './includes/footer.php' ?>
    <?php require './includes/scripts.php' ?>