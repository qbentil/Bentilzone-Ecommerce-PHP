<?php 
session_start();

    if($_SESSION['allowed'] != session_id()){
        header("location: ../home/login.php");
    }else{
        $user_id = $_SESSION['id'];
        $name  =   $_SESSION['name'];
        $email =   $_SESSION['email'];
        $img   =   $_SESSION['img'];
    }

?>
<?php 
require "includes/function.php";
require "../home/includes/function.php";
echo logout(); 
addCart("addCart", "cart");
addCart("wishlist", "wishlist");
require "includes/head.php";
require "includes/home_nav.php";
require "includes/defaultContent.php";
require "includes/otherContent.php";
require "includes/footer.php";
require "includes/scripts.php";
?>
<script>
    $("#min").click(function(){
        qty = $("#quantity_input").val();
        // alert(qty);
        if ($.isNumeric(qty)){
            if (parseInt(qty) -1 > 0){ qty--;}
            $("#quantity_input").val(qty);
        }else{
            $("#quantity_input").val("1");
        }
    })
    $("#add").click(function(){
        qty = $("#quantity_input").val();
        // alert(qty);
        if ($.isNumeric(qty)){
            $("#quantity_input").val(parseInt(qty)+1);
        }else{
            $("#quantity_input").val("1");
        }
    })
</script>
<script>
    $('.myPro').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 4,
		slidesToScroll: 1,
		nextArrow: '<i class="arrow right">',
		prevArrow: '<i class="arrow left">',
		infinite: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
});
</script>
