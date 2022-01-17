$(document).ready(function() {
    function login(){
        $(".email").keyup(function(){
            alert("email")
            var email = $(".email").val();
            alert(email);
        })
        var password = $(".password").val();
    }
    login();
});