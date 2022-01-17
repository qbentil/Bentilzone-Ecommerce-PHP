<?php 
    $storeID = $_SESSION['id'];
    require './includes/dbconfig.php';
    $stmt = $con->prepare("SELECT * from store where store_id = $storeID");
    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $stmt->execute();
    while($row = $stmt->fetch()):
?>
<form class="form-horizontal font-weight-bold text-muted text-uppercase p-2" enctype='multipart/form-data' method = "post">
<div class="content">
    <?php require './includes/nav.php'; store_details($_SESSION['id']); ?>
    <div class="bodyRight">
    <div class="container">
    <h1 class = "text-center text-uppercase">Edit Profile</h1>
    <hr class = "text-info">
    <div class="row">
    <!-- left column -->
    <div class="col-md-3">
        <div class="text-center">
        <img src="<?php echo '../images/brands/'.$row['brand_logo'] ?>" class="avatar img-circle" width = "150" height = "150" style = "border-radius: 50%; background:#009f;" alt="avatar">
        <!-- <h6>Upload a different photo</h6> -->
            <div class="form-group">
            <label for="img3"  class = "text-center ml-5 text-danger font-weight-bold">Brand Logo<span></span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-upload"></i></span></div>
                <div class="custom-file text-left">
                    <input type="file" class="custom-file-input" name="logo" placeholder="">
                    <label class="custom-file-label" for="logo">Upload New</label>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-9 personal-info">
        <h3 class = "text-uppercase text-center text-success">Shop Details</h3>
        

        <div class="row">
            <div class="form-group col-md-6">
                <label class=" control-label">Store Name</label>
                <div class="">
                <input class="form-control" type="text" name = "storeName" value="<?php echo $row['store_name']; ?>">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class=" control-label">Brand name:</label>
                <div class="">
                <input class="form-control" type="text" name = "brand" value="<?php echo $row['brand_name']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class=" control-label">Description:</label>
                <div class="">
                    <!-- <input type="text" value=""> -->
                    <textarea class="form-control"  name = "description" id=""><?php echo $row['description']; ?></textarea>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class=" control-label">Manager Name:</label>
                <div class="">
                <input class="form-control" type="text" name = "mName" value="<?php echo $row['mName']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class=" control-label">Manger Phone:</label>
                <div class="">
                    <input class="form-control" type="text" name = "mPhone" value="<?php echo $row['mPhone']; ?>">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class=" control-label">Manager Email:</label>
                <div class="">
                <input class="form-control" type="text" name = "mEmail" value="<?php echo $row['mEmail']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class=" control-label">Address</label>
                <div class="">
                <input class="form-control" type="text" name = "mAddress" value="<?php echo $row['mAddress']; ?>">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label class=" control-label"></label>
                <div class="">
                    <input type="submit" class="btn btn-primary col-md-4 mr-1 " name = "update" value="Save Changes">
                    <input type="reset" class="btn btn-secondary col-md-4 ml-1 " value="Reset">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
    </div>
</div>
</form>

<?php     updateStore($storeID);endwhile; ?>
