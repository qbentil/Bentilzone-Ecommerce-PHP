<style>
    
    .shfooter .collapse {
    display: inherit;
    }
    @media (max-width:767px) {
    .shfooter ul {
        margin-bottom: 0;
    }

    .shfooter .collapse {
        display: none;
    }

    .shfooter .collapse.show {
        display: block;
    }

    .shfooter .title .fa-angle-up,
    .shfooter .title[aria-expanded=true] .fa-angle-down {
        display: none;
    }

    .shfooter .title[aria-expanded=true] .fa-angle-up {
        display: block;
    }

    .shfooter .navbar-toggler {
        display: inline-block;
        padding: 0;
    }

    }

    .resize {
    text-align: center;
    }
    .resize {
    margin-top: 3rem;
    font-size: 1.25rem;
    }
    /*RESIZESCREEN ANIMATION*/
    .fa-angle-double-right {
    animation: rightanime 1s linear infinite;
    }

    .fa-angle-double-left {
    animation: leftanime 1s linear infinite;
    }
    @keyframes rightanime {
    50% {
        transform: translateX(10px);
        opacity: 0.5;
    }
    100% {
        transform: translateX(10px);
        opacity: 0;
    }
    }
    @keyframes leftanime {
    50% {
        transform: translateX(-10px);
        opacity: 0.5;
    }
    100% {
        transform: translateX(-10px);
        opacity: 0;
    }
    }

</style>

<footer id="footer" class="d-flex-column text-center">
    <hr class="mt-0">
    <!--Social buttons-->
    <div class="text-center">
        <h4>You can find us at</h4>
        <ul class="list-unstyled list-inline">
        <li class="list-inline-item">
            <a href="#!" class="sbtn btn-large mx-1" title="Facebook">
            <i class="fa fa-facebook-square fa-2x"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="sbtn btn-large mx-1" title="Linkedin">
            <i class="fa fa-linkedin fa-2x"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="sbtn btn-large mx-1" title="Twitter">
            <i class="fa fa-twitter-square fa-2x"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="sbtn btn-large mx-1" title="Youtube">
            <i class="fa fa-youtube-square fa-2x"></i>
            </a>
        </li>
        </ul>
    </div>
    <!--/.Social buttons-->
    <hr class="mb-0">
    <!--Footer Links-->
    <div class="container text-left text-md-center">
        <div class="row">
        <!--First column-->
        <div class="col-md-3 mx-auto shfooter">
            <h5 class="my-2 font-weight-bold d-none d-md-block">why us</h5>
            <div class="d-md-none title" data-target="#Product" data-toggle="collapse">
            <div class="mt-3 font-weight-bold">why us
                <div class="float-right navbar-toggler">
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                </div>
            </div>
            </div>
            <ul class="list-unstyled collapse" id="Product">
            <li><a href="https://codepen.io/jettaz">positive wits</a></li>
            <li><a href="https://codepen.io/jettaz">marketing poets</a></li>
            <li><a href="https://codepen.io/jettaz">poetry with respect to taste</a></li>
            <li><a href="https://codepen.io/jettaz">latest on poetry</a></li>
            </ul>
        </div>
        <!--/.First column-->
        <hr class="clearfix w-100 d-md-none mb-0">
        <!--Second column-->
        <div class="col-md-3 mx-auto shfooter">
            <h5 class="my-2 font-weight-bold d-none d-md-block">menu</h5>
            <div class="d-md-none title" data-target="#Company" data-toggle="collapse">
            <div class="mt-3 font-weight-bold">menu
                <div class="float-right navbar-toggler">
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                </div>
            </div>
            </div>
            <ul class="list-unstyled collapse" id="Company">
            <li><a href="https://codepen.io/jettaz">home</a></li>
            <li><a href="https://codepen.io/jettaz">about us</a></li>
            <li><a href="https://codepen.io/jettaz">gallery</a></li>
            <li><a href="https://codepen.io/jettaz">latest</a></li>
            <li><a href="https://codepen.io/jettaz">contact us</a></li>
            </ul>
        </div>
        <!--/.Second column-->
        <hr class="clearfix w-100 d-md-none mb-0">
        <!--Third column-->
        <div class="col-md-3 mx-auto shfooter">
            <h5 class="my-2 font-weight-bold d-none d-md-block">get help</h5>
            <div class="d-md-none title" data-target="#Resources" data-toggle="collapse">
            <div class="mt-3 font-weight-bold">Resources
                <div class="float-right navbar-toggler">
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                </div>
            </div>
            </div>
            <ul class="list-unstyled collapse" id="Resources">
            <li><a href="https://codepen.io/jettaz">Blog</a></li>
            <li><a href="https://codepen.io/jettaz">scripts</a></li>
            <li><a href="https://codepen.io/jettaz">audio</a></li>
            <li><a href="https://codepen.io/jettaz">videos</a></li>
            <li><a href="https://codepen.io/jettaz">live performances</a></li>
            </ul>
        </div>
        <!--/.Third column-->
        <hr class="clearfix w-100 d-md-none mb-0">
        <!--Fourth column-->
        <div class="col-md-3 mx-auto shfooter">
            <h5 class="my-2 font-weight-bold d-none d-md-block">Get Help</h5>
            <div class="d-md-none title" data-target="#Get-Help" data-toggle="collapse">
            <div class="mt-3 font-weight-bold">Get Help
                <div class="float-right navbar-toggler">
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                </div>
            </div>
            </div>
            <ul class="list-unstyled collapse" id="Get-Help">
            <li><a href="https://codepen.io/jettaz" target="_blank">get in touch</a></li>
            <li><a href="https://codepen.io/jettaz">talk to us</a></li>
            <li><a href="https://codepen.io/jettaz">order for scripts</a></li>
            <li><a href="https://codepen.io/jettaz">ask for special treats</a></li>
            <li><a href="https://codepen.io/jettaz">Login</a></li>
            </ul>
        </div>
        <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <hr class="mb-0">
    <!--Copyright-->
    <div class="py-3 text-center">
        Copyright © <?php echo "20".date('y') ?> <a href="">BentilZone</a> | reserved to no immitation
    </div>
    <!--/.Copyright-->
</footer>
<!-- <h5 class="resize"><i class="fa fa-angle-double-left"></i>Resize screen<i class="fa fa-angle-double-right"></i> -->