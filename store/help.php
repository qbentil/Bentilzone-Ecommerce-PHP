<div class="content">
<?php require './includes/nav.php' ?>
    <div class="bodyRight">
    <form action='' method='POST' autocomplete = 'off' enctype='multipart/form-data' id = "help" novalidate>
        <h4 class="title">BentilZone Help Center</h4>
    <div class="contentform">
    <div class="text-center p-1 mb-2">You need any help? kindly visit our <a href = ""><i class="text-success">Documentation</i></a> page for your solution Or<br clear = "all">
        <span> email the admin in the form below</span>
    </div>
    <div class="form-group">
        <label for="username">Email</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-home"></i></span>
            </div>
            <input type="text" name="email" id="email" class="form-control"  placeholder = "Enter your email" value = "<?php if(isset($restock)) echo $restock ?>" required>
            <div class="invalid-feedback">Enter your email</div>
        </div>
    </div>
    <div class="form-group">
        <label for="username">Subject</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-home"></i></span>
            </div>
            <input type="text" name="subject" id="subject" class="form-control"  placeholder = "Enter Subject" value = "<?php if(isset($restock)) echo $restock ?>" required>
            <div class="invalid-feedback">Enter Help subject</div>
        </div>
        <!-- <small class = "text-info">Products are search using this subject</small> -->
    </div>
    <div class="form-group">
        <label for="username">Mesage</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-home"></i></span>
            </div>
            <textarea name="mesage" id="mesage" class="form-control"  placeholder = "Enter your mesage" required><?php if(isset($restock)) echo $restock ?></textarea>
            <div class="invalid-feedback">Please enter help needed here</div>
        </div>
    </div>    
    </div>
    <button type="submit" class="bouton-contact">Send</button>
    
    </form> 
    </div>
</div>