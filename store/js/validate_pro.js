$("#addPro").submit(function(event) {

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