<div class="super_container ">
    <div class="single_product bg-white">
        <div class="container-fluid">
            <div class="row">
                <?php proDetails();  ?>
            </div>
        </div>
        <div class='row text-center '>
            <h4 class='text-center text-uppercase text-muted'>Featured products Here!</h4>
		</div>
	</div>
            <?php //include "slick.php" ?>
        </div>
    </div>
</div>
<style>
/* caro */
.blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;
}
/*/ caro */
    .super_container{
        margin-top: -2% !important;
        background: #fff;
    }
    .breadcrumb-item+.breadcrumb-item::before {
        content: ">"
    }

    .breadcrumb {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: .1rem 0rem !important;
        margin-bottom: 0rem;
        list-style: none;
        background-color: #ffffff;
        border-radius: .25rem
    }

    .single_product {
        /* padding-top: 66px; */
        /* padding-bottom: 140px; */
        background-color: #e5e5e5;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
        padding: 0px 1%;
    }

    .product_name {
        font-size: 20px;
        font-weight: 400;
        margin-top: 0px
    }

    .badge {
        display: inline-block;
        padding: 0.50em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem
    }

    .product-rating {
        margin-top: 10px
    }

    .rating-review {
        color: #5b5b5b
    }

    .product_price {
        display: inline-block;
        font-size: 1rem;
        font-weight: 500;
        margin-top: 9px;
        clear: left
    }

    .product_discount {
        display: inline-block;
        font-size: 1.5rem;
        font-weight: 300;
        margin-top: 9px;
        clear: left;
        margin-left: 10px;
        color: red
    }

    .product_saved {
        display: inline-block;
        font-size: 15px;
        font-weight: 200;
        color: #999999;
        clear: left
    }

    .singleline {
        margin-top: 1rem;
        margin-bottom: .40rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .product_info {
        color: #4d4d4d;
        display: inline-block
    }

    .product_options {
        margin-bottom: 10px
    }

    .product_description {
        padding-left: 0px
    }

    .product_quantity {
        /* width: 104px; */
        height: 47px;
        border: solid 1px #e5e5e5;
        border-radius: 3px;
        overflow: hidden;
        padding-left: 8px;
        padding-top: -4px;
        padding-bottom: 44px;
        float: left;
        margin-right: 22px;
        margin-bottom: 11px
    }

    .order_info {
        margin-top: 18px
    }

    .shop-button {
        height: 47px
    }

    .product_fav i {
        line-height: 44px;
        color: #cccccc
    }

    .product_fav {
        display: inline-block;
        width: 52px;
        height: 46px;
        background: #FFFFFF;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        border-radius: 11%;
        text-align: center;
        cursor: pointer;
        margin-left: 3px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .br-dashed {
        border-radius: 5px;
        border: 1px dashed #dddddd;
        margin-top: 6px
    }

    .pr-info {
        margin-top: 2px;
        padding-left: 2px;
        margin-left: -14px;
        padding-left: 0px
    }

    .break-all {
        color: #5e5e5e
    }

    .image_selected {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: calc(100% + 15px);
        height: 525px;
        -webkit-transform: translateX(-15px);
        -moz-transform: translateX(-15px);
        -ms-transform: translateX(-15px);
        -o-transform: translateX(-15px);
        transform: translateX(-15px);
        border: solid 1px #e8e8e8;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 15px
    }

    .image_list li {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 165px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
        margin-bottom: 15px;
        cursor: pointer;
        padding: 15px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
        overflow: hidden
    }

    @media (max-width: 390px) {
        .product_fav {
            display: none
        }
    }

    .bbb_combo {
        width: 100%;
        margin-right: 7%;
        padding-top: 21px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 24px;
        border-radius: 5px;
        margin-top: 0px;
        text-align: -webkit-center
    }

    .bbb_combo_image {
        width: 170px;
        height: 170px;
        margin-bottom: 15px
    }

    .fs-10 {
        font-size: 10px
    }

    .step {
        background: #167af6;
        border-radius: 0.8em;
        -moz-border-radius: 0.8em;
        -webkit-border-radius: 6.8em;
        color: #ffffff;
        display: inline-block;
        font-weight: bold;
        line-height: 3.6em;
        margin-right: 5px;
        text-align: center;
        width: 3.6em;
        margin-top: 116px
    }

    .row-underline {
        content: "";
        display: block;
        border-bottom: 2px solid #3798db;
        margin: 0px 0px;
        margin-bottom: 20px;
        margin-top: 15px
    }

    .deal-text {
        margin-left: -10px;
        font-size: 25px;
        margin-bottom: 10px;
        color: #000;
        font-weight: 700
    }

    .padding-0 {
        padding-left: 0;
        padding-right: 0
    }

    .padding-2 {
        margin-right: 2px;
        margin-left: 2px
    }

    .vertical-line {
        display: inline-block;
        border-left: 3px solid #167af6;
        margin: 0 10px;
        height: 364px;
        margin-top: 4px
    }

    .p-rating {
        color: green
    }

    .combo-pricing-item {
        display: flex;
        flex-direction: column
    }

    .boxo-pricing-items {
        display: inline-flex
    }

    .combo-plus {
        margin-left: 10px;
        margin-right: 18px;
        margin-top: 10px
    }

    .add-both-cart-button {
        margin-left: 36px
    }

    .items_text {
        color: #b0b0b0
    }

    .combo_item_price {
        font-size: 18px
    }

    .p_specification {
        font-weight: 500;
        margin-left: 22px
    }

    .mt-10 {
        margin-top: 10px
    }

    @charset "utf-8";
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px
    }

    body {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #FFFFFF;
        color: #000000
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    ul {
        list-style: none;
        margin-bottom: 0px
    }

    .single_product {
        padding-top: 16px;
        padding-bottom: 140px
    }

    .image_list li {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 165px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
        cursor: pointer;
        padding: 15px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
        overflow: hidden
    }

    .image_list li:last-child {
        margin-bottom: 0
    }

    .image_list li:hover {
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3)
    }

    .image_list li img {
        max-width: 100%
    }

    .image_selected {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: calc(100% + 15px);
        height: 525px;
        -webkit-transform: translateX(-15px);
        -moz-transform: translateX(-15px);
        -ms-transform: translateX(-15px);
        -o-transform: translateX(-15px);
        transform: translateX(-15px);
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 15px
    }

    .image_selected img {
        max-width: 100%
    }

    .product_category {
        font-size: 12px;
        color: rgba(0, 0, 0, 0.5)
    }

    .product_rating {
        margin-top: 7px
    }

    .product_rating i {
        margin-right: 4px
    }

    .product_rating i::before {
        font-size: 13px
    }

    .product_text {
        margin-top: 27px
    }

    .product_text p:last-child {
        margin-bottom: 0px
    }

    .order_info {
        margin-top: 16px
    }

    .product_quantity {
        width: 182px;
        height: 50px;
        border: solid 1px #e5e5e5;
        border-radius: 5px;
        overflow: hidden;
        padding-left: 25px;
        float: left;
        margin-right: 30px
    }

    .product_quantity span {
        display: block;
        height: 50px;
        font-size: 16px;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.5);
        line-height: 50px;
        float: left
    }

    .product_quantity input {
        display: block;
        width: 30px;
        height: 50px;
        border: none;
        outline: none;
        font-size: 16px;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.5);
        text-align: left;
        padding-left: 9px;
        line-height: 50px;
        float: left
    }

    .quantity_buttons {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 29px;
        border-left: solid 1px #e5e5e5
    }

    .quantity_inc,
    .quantity_dec {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 50%;
        cursor: pointer
    }

    .quantity_control i {
        font-size: 11px;
        color: rgba(0, 0, 0, 0.3);
        pointer-events: none
    }

    .quantity_control:active {
        border: solid 1px rgba(14, 140, 228, 0.2)
    }

    .quantity_inc {
        padding-bottom: 2px;
        justify-content: flex-end;
        border-top-right-radius: 5px
    }

    .quantity_dec {
        padding-top: 2px;
        justify-content: flex-start;
        border-bottom-right-radius: 5px
    }
</style>
