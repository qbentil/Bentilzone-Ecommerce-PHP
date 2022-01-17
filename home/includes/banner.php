<div id="myShowcase" class="carousel showcase slide carousel-fade showcase-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active showcase-item">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                            <h4>iPhone XS</h4>
                            <p>This has many features that are simply awesome. The phone comes with a 3.50-inch display with a resolution of 320x480 pixels.</p> <br> <a href="#">BUY NOW</a>
                        </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564246609/Ecommerce/img-2.jpg" class="mx-auto" alt="slide"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item showcase-item">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                            <h4>HP Pavillion</h4>
                            <p>This has many features that are simply awesome.The phone comes with a 3.50-inch display with a resolution of 320x480 pixels.</p> <br> <a href="#">BUY NOW</a>
                        </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564246609/Ecommerce/img-1.jpg" class="mx-auto" alt="slide"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <a class="carousel-control-prev prev" href="#myShowcase" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next next" href="#myShowcase" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<style>
.showcase .showcase-item .mask {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-attachment: fixed
}

.showcase h4 {
    font-size: 50px;
    margin-bottom: 15px;
    color: #FFF;
    line-height: 100%;
    letter-spacing: 0.5px;
    font-weight: 600
}

.showcase p {
    font-size: 18px;
    margin-bottom: 15px;
    color: #d5d5d5
}

.showcase .showcase-item a {
    background: #FF0000;
    font-size: 14px;
    color: #FFF;
    padding: 13px 32px;
    display: inline-block
}

.showcase .showcase-item a:hover {
    background: #FF0000;
    text-decoration: none
}

.showcase .showcase-item h4 {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

.showcase .showcase-item p {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

.showcase .showcase-item a {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

.showcase .showcase-item .mask img {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
    display: block;
    height: auto;
    max-width: 100%
}

.showcase h4,
.showcase p,
.showcase a,
.showcase .showcase-item .mask img {
    -webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.showcase .container {
    max-width: 1430px
}

.showcase .showcase-item {
    height: 100%;
    min-height: 550px
}

.showcase {
    position: relative;
    z-index: 1;
    background: #000;
    background-size: cover
}

.next,
.prev {
    height: 40px;
    width: 40px;
    padding: 12px;
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
    background-color: #FF0000
}

.showcase-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease, -webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.showcase-fade .showcase-item {
    opacity: 0;
    -webkit-transition-duration: .6s;
    transition-duration: .6s;
    -webkit-transition-property: opacity;
    transition-property: opacity
}

.showcase-fade .showcase-item-next.showcase-item-left,
.showcase-fade .showcase-item-prev.showcase-item-right,
.showcase-fade .showcase-item.active {
    opacity: 1
}

.showcase-fade .showcase-item-left.active,
.showcase-fade .showcase-item-right.active {
    opacity: 0
}

.showcase-fade .showcase-item-left.active,
.showcase-fade .showcase-item-next,
.showcase-fade .showcase-item-prev,
.showcase-fade .showcase-item-prev.active,
.showcase-fade .showcase-item.active {
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0)
}

@supports (transform-style:preserve-3d) {

    .showcase-fade .showcase-item-left.active,
    .showcase-fade .showcase-item-next,
    .showcase-fade .showcase-item-prev,
    .showcase-fade .showcase-item-prev.active,
    .showcase-fade .showcase-item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.showcase-fade .showcase-item-left.active,
.showcase-fade .showcase-item-next,
.showcase-fade .showcase-item-prev,
.showcase-fade .showcase-item-prev.active,
.showcase-fade .showcase-item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}
</style>
