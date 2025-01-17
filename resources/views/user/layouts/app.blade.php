<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset('/') }}assets/users/images/favicon.ico">
    <link rel="icon" href="{{ asset('/') }}assets/users/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('/') }}assets/users/images/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset('/') }}assets/users/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/users/css/vendors/ion.rangeSlider.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/vendors/slick/slick-theme.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/users/css/demo4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/ion.rangeSlider.min.css" />

    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
        
    </style>
    <link rel="stylesheet" href="{{ asset('/') }}assets/users/css/custom.css">


</head>
<body class="theme-color4 light ltr">

@include('user.layouts.header')

@yield('body')

@include('user.layouts.footer')

<div class="modal fade newletter-modal" id="newsletter">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="{{ asset('/') }}assets/users/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                <div class="modal-title">
                    <h2 class="tt-title">Sign up for our Newsletter!</h2>
                    <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                    <p class="font-light">Oh, and it's free!</p>

                    <div class="input-group mb-3">
                        <input placeholder="Email" class="form-control" type="text">
                    </div>

                    <div class="cancel-button text-center">
                        <button class="btn default-theme w-100" data-bs-dismiss="modal"
                            type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="modal-contain">
                    <div>
                        <div class="modal-messages">
                            <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                            you cart.
                        </div>
                        <div class="modal-product">
                            <div class="modal-contain-img">
                                <img src="{{ asset('/') }}assets/users/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                            <div class="modal-contain-details">
                                <h4>Premier Cropped Skinny Jean</h4>
                                <p class="font-light my-2">Yellow, Qty : 3</p>
                                <div class="product-total">
                                    <h5>TOTAL : <span>$1,140.00</span></h5>
                                </div>
                                <div class="shop-cart-button mt-3">
                                    <a href="shop-left-sidebar.php"
                                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                        SHOPPING</a>
                                    <a href="cart.php"
                                        class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                        CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratio_asos mt-4">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-sm-12 p-0">
                                <div
                                    class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('/') }}assets/users/images/fashion/product/front/1.jpg"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('/') }}assets/users/images/fashion/product/front/2.jpg"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('/') }}assets/users/images/fashion/product/front/3.jpg"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product/details.html">
                                                        <img src="{{ asset('/') }}assets/users/images/fashion/product/front/4.jpg"
                                                            class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tap-to-top">
    <a href="#home">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<div class="bg-overlay"></div>
<script src="{{ asset('/') }}assets/users/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/feather/feather.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/lazysizes.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/slick/slick.js"></script>
<script src="{{ asset('/') }}assets/users/js/slick/slick-animation.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/slick/custom_slick.js"></script>
<script src="{{ asset('/') }}assets/users/js/price-filter.js"></script>
<script src="{{ asset('/') }}assets/users/js/ion.rangeSlider.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/filter.js"></script>
<script src="{{ asset('/') }}assets/users/js/newsletter.js"></script>
<script src="{{ asset('/') }}assets/users/js/cart_modal_resize.js"></script>
<script src="{{ asset('/') }}assets/users/js/bootstrap/bootstrap-notify.min.js"></script>
<script src="{{ asset('/') }}assets/users/js/theme-setting.js"></script>
<script src="{{ asset('/') }}assets/users/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/ion.rangeSlider.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    });
</script>
@yield('scripts')
</body>

</html>