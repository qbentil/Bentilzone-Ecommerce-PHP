
    <div class="myAlert-top alert alert-light text-info">
    <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
    <div><span class="fa fa-gift ml-3 fa-2x ml-3"></span> Welcome! to <strong><span class="fa fa-shopping-basket">BentilZone</span></strong></div>
    </div>

<style>
    .myAlert-top{
    position: fixed;
    float: right;
    top: 10%; 
    width:30%;
    }
    .alert{
    display: none;
    }
    .myAlert-bottom{
        position: fixed;
        bottom: 5px;
        left:2%;
        width: 50%;
    }


</style>
<script>
    $(document).ready(function(){
        alert('working');
        myAlertTop();
    })
    function myAlertTop(){
        $(".myAlert-top").fadeIn('slow');
        setTimeout(function(){
            $(".myAlert-top").fadeOut(); 
        }, 5000);
    }

    function myAlertBottom(){
    $(".myAlert-bottom").show();
    setTimeout(function(){
        $(".myAlert-bottom").hide(); 
    }, 2000);
    }
</script>




