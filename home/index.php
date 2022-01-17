
<?php 
// $_SESSION['loggedIn'] = false;
require "includes/head.php";
addCart("addCart", "cart");
addCart("wishlist", "wishlist");
require "includes/navbar.php";
require "includes/defaultcontent.php";
require "includes/othercontent.php";
require "includes/footer.php";
require "includes/welcome.php";
require "includes/form_modals.php";
require "includes/scripts.php";

?>
<script>
    $(document).ready(function(){

    $('#myCarousel').carousel({
    interval: 3000,
    })

    });
</script>
