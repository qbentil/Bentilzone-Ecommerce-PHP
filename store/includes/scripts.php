	
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="assets/js/Simple-Slider.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	<script>
		$(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>

<script src="js/validations.js"></script>
<script>
	$("#addSubcat").submit(function(event) {

	// make selected form variable
	var vForm = $(this);

	/*
	If not valid prevent form submit
	https://developer.mozilla.org/en-US/docs/Web/API/HTMLSelectElement/checkValidity
	*/
	if (vForm[0].checkValidity() === false) {
	event.preventDefault()
	event.stopPropagation()
	} else {

	// Replace alert with ajax submit here...
	// alert("your form is valid and ready to send");

	}

	// Add bootstrap 4 was-validated classes to trigger validation messages
	vForm.addClass('was-validated');


	});
</script>
<script>
	$("#addCat").submit(function(event) {

	// make selected form variable
	var vForm = $(this);

	/*
	If not valid prevent form submit
	https://developer.mozilla.org/en-US/docs/Web/API/HTMLSelectElement/checkValidity
	*/
	if (vForm[0].checkValidity() === false) {
	event.preventDefault()
	event.stopPropagation()
	} else {

	// Replace alert with ajax submit here...
	// alert("your form is valid and ready to send");

	}

	// Add bootstrap 4 was-validated classes to trigger validation messages
	vForm.addClass('was-validated');


	});
</script>
<script>
	$("#help").submit(function(event) {

	// make selected form variable
	var vForm = $(this);

	/*
	If not valid prevent form submit
	https://developer.mozilla.org/en-US/docs/Web/API/HTMLSelectElement/checkValidity
	*/
	if (vForm[0].checkValidity() === false) {
	event.preventDefault()
	event.stopPropagation()
	} else {

	// Replace alert with ajax submit here...
	// alert("your form is valid and ready to send");

	}

	// Add bootstrap 4 was-validated classes to trigger validation messages
	vForm.addClass('was-validated');


	});
</script>
</body>
</html>