<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script src="./js/validations.js"></script>

<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->

<script>
    // $(".pay").hide();
    $(document).ready(function(){
        $('#pod').click(function(){
            if($(this).prop("checked") == true){
                $(".pay").hide();
                // alert("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
                $(".pay").show();
                // alert("Checkbox is unchecked.");
            }
        });
        
        $(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		});
	});	
    });
</script>