<div class="bodyLeft">
        <?php require 'sidebar.php' ?>
</div>
<?php  if(isset($_GET['add_product'])){ ?>
        <div class="content">
                <?php require 'nav.php' ?>
                <div class="bodyRight">
                <?php require 'add_pro.php' ?>
                </div>
        </div>
<?php } ?>
<?php 
        if(isset($_GET['add_subcategory'])){
                require 'add_subcat.php';
        }
        if(isset($_GET['add_category'])){
                require 'add_cat.php';
        }
        if(isset($_GET['view_product'])){
                require 'view_product.php';
        }
        if(isset($_GET['change_password'])){
                require 'change_pass.php';
        }
        if(isset($_GET['storeprofile'])){
                require 'store_profile.php';
        }
        if(isset($_GET['view_products'])){
                require 'products.php';
        }
        if(isset($_GET['view_categories'])){
                require 'categories.php';
        }
        if(isset($_GET['view_sub_categories'])){
                require 'sub_categories.php';
        }
        if(isset($_GET['outofstock_pro'])){
                require 'oos.php';
        }
        if(isset($_GET['ondemand_pro'])){
                require 'op.php';
        }
        if(isset($_GET['wishlist_pro'])){
                require 'wlp.php';
        }
        if(isset($_GET['cancelled_orders'])){
                require 'cancelled_orders.php';
        }
        if(isset($_GET['pending_orders'])){
                require 'pending_orders.php';
        }
        if(isset($_GET['complete_orders'])){
                require 'complete_orders.php';
        }
        if(isset($_GET['contact_admin'])){
                require 'help.php';
        }

?>