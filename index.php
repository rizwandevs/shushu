
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>API SOUL</title>
    <meta name="author" content="">
    <meta name="description" content="Landing Page">
    <meta name="keywords"
        content="landing, creative, works, showcase, portfolio, projects, modern, agency, freelancers">
    <link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
    <link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
    <link href="assets/images/cr7.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Jaro:opsz@6..72&family=Manrope:wght@200..800&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/iconfont.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/venobox.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/color-1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            font-family: jaro !important;
        }
        body {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.7)), url(assets/images/21.png);
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: cover;
        }  
        div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm){
            background-color: #659636 !important;            
        } 
        .search_list{
            list-style: none;
            margin-left:20px;
        }
        .search_list_p{
            padding: 0;
            margin-left:20px;
        }
        .search_list li{
            margin:0px;
        }
        #searchInput::-webkit-search-cancel-button{
            /* position:relative; */
            /* right:20px;   */

            /* -webkit-appearance: none; */
            /* height: 20px; */
            /* width: 20px; */
            /* border-radius:10px; */
            /* background: red; */
        }
        .hero-section{
            padding-bottom: 50px;
        }
        .terms_condition{
            margin-bottom: 3rem ;
        }
        @media only screen and (max-width: 800px) {
            body{
                
                background-repeat: no-repeat; 
                background-position: center;
                background-attachment: fixed;       
                webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height:100%;
                width:100%; 
            }
            .dtr-form-row-2col .dtr-form-column{
                width: 100%;
            }
            .hero-section{
                padding-bottom: 0px;
            }
            .hero-section-image{

                max-width: 80%;
            }
            .responsive-text-h2{
                font-size: 1.8em;
                line-height: 1em;
            }
            .search-section{
                padding-bottom: 1rem;
                padding-top: 1.5rem;
            }
            .form-section{
                padding-top: 1rem;
                padding-bottom: 1.5rem;
            }
            .search-section-image{
                width: 150px;
            }
            .terms_condition{
                margin-bottom: 0 ;
            }
            .responsive-container{
                display:flex;
            }
            .footer-first-section{
                width: 50%;
            }
            .text-descripition{
                margin-bottom: 0rem;
                line-height: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- Header
============================================= -->
        <header id="dtr-header-global" class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark dtr-menu">
                <div class="container">
                    <a class="navbar-brand logo-light" href="#home"><img width="50"
                            src="assets/images/cr7.png" alt="logo"></a>
                    <a class="navbar-brand logo-dark" href="#home"><img width="50"
                            src="assets/images/cr7.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="dtr-scrollspy navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link" href="#products">Contact us</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#about">Technologies</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#features">Price list</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#reviews">Services</a> </li>
                        </ul>
                    </div>
                    <div class="dtr-btn ml-4 d-none d-lg-block"> <a href="#" class="text-dark">+972-556-555-461 <span><i
                                    class="icon-whatsapp" aria-hidden="true"></i></span> </a> </div>
                </div>
            </nav>
        </header>
        <!-- header ends
================================================== -->

        <!-- hero section starts
================================================== -->
        <section id="home" class="hero-section dtr-py-8 hero-default-bg color-white" >
            <div class="container">
                <div class="row align-items-center">

                    <!-- column 1 starts -->
                    <div class="col-6 col-md-6 col-sm-12 dtr-sm-mb-30px">

                        <!-- Heading -->
                        <h1 class="dtr-mb-2 wow fadeInUp " data-wow-delay="0.4s">API Soul </h1>

                        <!-- Text -->
                        <p class=" wow fadeInUp w-100 text-descripition" data-wow-delay="0.6s">Thank you for reaching out
                            our service, please insert your phone
                            number or a person name and we will get it to you</p>

                        <!-- button -->
                        <!-- <div class="dtr-btn wow fadeInUp" data-wow-delay="0.8s"> <a href="#">Get a quote<span><i class="icon-arrow-right" aria-hidden="true"></i></span> </a> </div> -->
                    </div>
                    <div class="col-6 col-md-6 col-sm-12 dtr-sm-mb-30px " >
                        <img src="assets/images/cr7.png" alt="" srcset="" class="hero-section-image" width="350">
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 text-right wow fadeInRight d-none" data-wow-delay="0.4s">

                        <!-- Image -->
                        <img src="assets/images/video-bg-img.png" alt="video-bg">

                        <!-- video button starts -->
                        <div class="dtr-video-wrapper dtr-video-button-lg">
                            <div class="dtr-video-wrapper-inner"> <a class="dtr-video-popup dtr-video-button"
                                    data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=kuceVNBTJio"><span
                                        class="dtr-video-button-wrap-inner"></span> <span
                                        class="dtr-border-animation dtr-border-1"></span> <span
                                        class="dtr-border-animation dtr-border-2"></span> </a> </div>
                        </div>
                        <!-- video button ends -->

                    </div>
                    <!-- column 2 ends -->

                </div>
            </div>
        </section>
        <!-- hero section starts
================================================== -->

        <!-- search section starts
================================================== -->

        <section id="quote" class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 bg-parrot-green color-white dtr-py-7 dtr-px-5  text-size-md search-section">
                        <!-- <p class="text-size-xl dtr-mb-4 text-dark custom-font">Search for Information</p> -->
                        <h2 class="text-dark responsive-text-h2">Search for Information</h2>
                        <p>
                            <input name="search" type="search" placeholder="Search by Name or Phone" id="searchInput">
                            <div id="searchResults"></div>
                        </p>
                    </div>
                    <div class="col-12 col-lg-12 bg-yello dtr-py-7 dtr-px-5 form-section">
                        <div class="d-flex dtr-mb-4">
                            <div class="dtr-mr-5">
                                <h2 class="text-dark">Heading Here</h2>
                                <p class="text-dark text-descripition">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                                    deleniti, labore
                                    necessitatibus quod eum asperiores nihil eligendi quo quisquam </p>
                            </div>
                            <span class="dtr-icon-with-bg dtr-icon-blue ml-auto search-section-image"><img width="45"
                                    src="assets/images/cr7.png" alt=""></span>
                        </div>

                        <div class="dtr-form dtr-submit-full">
                            <form id="Addform" >
                                <fieldset>
                                    <div class="dtr-form-row-2col">
                                        <p class="dtr-form-column">
                                            <input name="name" type="text" placeholder="Name" id="name">
                                        </p>
                                        <p class="dtr-form-column ">
                                            <input name="phone" type="text" placeholder="Phone (e.g., 054-1234567)"
                                                id="phone">
                                            <span id="error-message" style="color: red; display: none;">Invalid phone
                                                number. Please use Israeli prefixes (054, 050, etc.).</span>
                                        </p>
                                    </div>
                                    <div class="dtr-form-row-2col ml-1 d-flex  align-items-baseline terms_condition">
                                        <input type="checkbox" id="terms" required/>
                                        <label for="terms" class="ml-3 font-weight-normal"> I agree to the terms: “You
                                            will be charged by your cellular provider,” and “The info you get is not
                                            100% correct but we will try to do our best.”</label>
                                    </div>
                                    <button type="submit" id="submitBtn" class=" dtr-btn-round bg-dark-green text-light submit-btn custom-font">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- search section ends
================================================== -->

        <!-- footer starts
================================================== -->

        <footer id="dtr-footer-global" class="color-white">
            <div class="container  responsive-container">
                <div class="row footer-first-section">
                    <div class="col-12 col-sm-12 col-lg-12 dtr-sm-mb-30px">
                        <p><img src="assets/images/cr7.png" width="50" alt="image" class="wow pulse"
                                data-wow-delay="0.4s"></p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-6 "> APIsoul All rights reserved. Design by .App 2019 © </div>
                    <div class="col-12 col-md-6">
                        <ul class="dtr-social-list text-right color-muted-white">
                            <li><a href="#" class="dtr-facebook"></a></li>
                            <li><a href="#" class="dtr-twitter"></a></li>
                            <li><a href="#" class="dtr-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends
================================================== -->

    </div>
    <!-- #dtr-wrapper ends -->
    <!-- JS FILES -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.js" type="text/javascript"></script>
    <script src="assets/js/swiper.min.js" type="text/javascript"></script>
    <script src="assets/js/venobox.min.js" type="text/javascript"></script>
    <script src="assets/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.form.js" type="text/javascript"></script>
    <script src="assets/js/wow.min.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script>
        // wow animations
        if ($(window).outerWidth() >= 767) {
            new WOW().init({
                mobile: false,
            });
        }

        $(document).ready(function () {

            //----- add user data work here -----

            $('#Addform').on('submit', function (e) {
                e.preventDefault();

                const nameInput = $('#name').val().trim();
                const phoneInput = $('#phone').val().trim();
                const phoneRegex = /^05[0-9]-\d{7}$/;

                let isValid = true;
                const nameErrorDiv = $('#name-error');
                const phoneErrorDiv = $('#phone-error');

                if (nameInput === '') {
                    isValid = false;
                    if (nameErrorDiv.length === 0) {
                        $('#name').after('<div id="name-error" style="color: red; margin-top: 5px;">Name is required.</div>');
                    }
                } else {
                    $('#name-error').remove();
                }

                if (!phoneRegex.test(phoneInput)) {
                    isValid = false;
                    if (phoneErrorDiv.length === 0) {
                        $('#phone').after('<div id="phone-error" style="color: red; margin-top: 5px;">Invalid phone number. Please use Israeli prefix (e.g., 054-1234567).</div>');
                    }
                } else {
                    $('#phone-error').remove();
                }

                if (isValid) {
                    $.ajax({
                        url: 'insert.php', 
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            name: nameInput,
                            phone: phoneInput
                        },
                        success: function (response) {                        
                            if (response.success) {
                                Swal.fire({
                                    title: "Thank you!",
                                    text: response.message || "Your submission was successful!",
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    $('#Addform')[0].reset(); 
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: response.message || "Something went wrong. Please try again.",
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                title: 'Error!',
                                text: 'An unexpected error occurred. Please try again later.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });

            $('#name').on('input', function () {
                $('#name-error').remove(); 
            });

            $('#phone').on('input', function () {
                $('#phone-error').remove(); 
            });

            //----- search work here -----
            $('#searchInput').on('input', function() {
                if (!$(this).val()) {
                    $(this).trigger("keyup");
                }
            });

            $('#searchInput').on('keyup', function () {
                let query = $(this).val();
                
                if (query.length >= 2) { 
                    $.ajax({
                        url: 'search.php',
                        method: 'GET',
                        data: { search: query },
                        dataType: 'json',  
                        success: function (response) {                            
                            let results = '';
                            if (Array.isArray(response) && response.length > 0) {                                
                                results += '<ul class="search_list">';
                                response.forEach(user => {
                                    
                                    results += `<li>NAME : ${user.name} - Phone no : ${user.phone}</li>`;
                                });
                                results += '</ul>';
                            } else {
                                results = '<p class="search_list_p">No results found.</p>';
                            }
                            $('#searchResults').html(results);
                        },
                        error: function () {
                            $('#searchResults').html('<p>An error occurred. Please try again.</p>');
                        }
                    });
                } else {
                    $('#searchResults').html('');  // Clear results if the query is empty or less than 2 characters
                }
            });


        });

    </script>
</body>

</html>