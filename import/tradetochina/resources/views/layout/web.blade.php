<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset ("web/assets/ico/apple-touch-icon-144-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset ("web/assets/ico/apple-touch-icon-114-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset ("web/assets/ico/apple-touch-icon-72-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset ("web/assets/ico/apple-touch-icon-57-precomposed.png") }}">
    <link rel="shortcut icon" href="{{ asset ("web/assets/ico/favicon.png") }}">
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset ("web/assets/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ("web/assets/css/style.css") }}" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="{{ asset ("web/assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href="{{ asset ("web/assets/css/owl.theme.css") }}" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ asset ("web/assets/js/pace.min.js") }}"></script>


    <style>

        .themeControll {
            background: #2d3e50;
            height: auto;
            width: 170px;
            position: fixed;
            left: 0;
            padding: 20px 0;
            top: 100px;
            z-index: 999999;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -o-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transition: opacity .5s linear, -webkit-transform .7s cubic-bezier(.56, .48, 0, .99);
            -moz-transition: opacity .5s linear, -moz-transform .7s cubic-bezier(.56, .48, 0, .99);
            -o-transition: opacity .5s linear, -o-transform .7s cubic-bezier(.56, .48, 0, .99);
            -ms-transition: opacity .5s linear, -ms-transform .7s cubic-bezier(.56, .48, 0, .99);
            transition: opacity .5s linear, transform .7s cubic-bezier(.56, .48, 0, .99);
        }

        .themeControll.active {
            display: block;
            -webkit-transform: translateX(-170px);
            -moz-transform: translateX(-170px);
            -o-transform: translateX(-170px);
            -ms-transform: translateX(-170px);
            transform: translateX(-170px);
            -webkit-transition: opacity .5s linear, -webkit-transform .7s cubic-bezier(.56, .48, 0, .99);
            -moz-transition: opacity .5s linear, -moz-transform .7s cubic-bezier(.56, .48, 0, .99);
            -o-transition: opacity .5s linear, -o-transform .7s cubic-bezier(.56, .48, 0, .99);
            -ms-transition: opacity .5s linear, -ms-transform .7s cubic-bezier(.56, .48, 0, .99);
            transition: opacity .5s linear, transform .7s cubic-bezier(.56, .48, 0, .99);

        }

        .themeControll a {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            clear: both;
            color: #fff;
            display: block;
            height: auto;
            line-height: 16px;
            margin-bottom: 5px;
            padding-bottom: 8px;
            text-transform: capitalize;
            width: auto;
            font-family: Roboto Condensed, Helvetica Neue, Helvetica, sans-serif;
        }

        .tbtn {
            background: #2D3E50;
            color: #FFFFFF !important;
            font-size: 30px;
            height: auto;
            padding: 10px;
            position: absolute;
            right: -40px;
            top: 0;
            width: 40px;
            cursor: pointer;
        }

        .linkinner {
            display: block;
            height: 400px;
        }

        .linkScroll .scroller-bar {
            width: 17px;
        }

        .linkScroll .scroller-bar, .linkScroll .scroller-track {
            background: #1d2e40 !important;
            border-color: #1d2e40 !important;

        }

        @media (max-width: 780px) {
            .themeControll {
                display: none;
            }

        }


    </style>
</head>
<body>
<div class="themeControll" style="display: none">

    <h3 style=" color:#fff; font-size: 10px; line-height: 12px;" class="uppercase color-white text-center"> All
        Pages </h3>

    <div class="linkinner linkScroll scrollbar ">
        <a target="_blank" href="coming-soon.html"> Coming soon (Landing page)
            <span class="label label-success " style="font-size: 10px"><em>NEW</em></span></a>
        <a target="_blank" href="index-v-2.html"> home Page V2</a>
        <a target="_blank" href="blogs.html"> blog</a>
        <a target="_blank" href="blog-details.html"> Blog Details</a>
        <a target="_blank" href="about-us.html"> about us</a>
        <a target="_blank" href="account-archived-ads.html"> account archived</a>
        <a target="_blank" href="account-close.html"> account close</a>
        <a target="_blank" href="account-favourite-ads.html"> favourite ads</a>
        <a target="_blank" href="account-home.html"> account home</a>
        <a target="_blank" href="account-myads.html"> account my ads</a>
        <a target="_blank" href="account-pending-approval-ads.html"> pending approval</a>
        <a target="_blank" href="account-saved-search.html"> saved search</a>
        <a target="_blank" href="ads-details.html"> ads details</a>
        <a target="_blank" href="ads-details-2-vertical-thumb.html"> ads details 2</a>
        <a target="_blank" href="ads-details-automobile.html"> ads Details Automobile
            <span class="label label-success " style="font-size: 10px"></span>
        </a>
        <a target="_blank" href="property-list.html"> property List
            <span class="label label-success " style="font-size: 10px"><em>NEW</em></span>
        </a>
        <a target="_blank" href="property-details.html"> property Details
            <span class="label label-success " style="font-size: 10px"><em>NEW</em></span>
        </a>

        <a target="_blank" href="blank-page.html"> Blank Page</a>
        <a target="_blank" href="category.html"> category</a>
        <a target="_blank" href="category-grid-view-default-with-ajax-tab.html"> category grid view-</a>
        <a target="_blank" href="contact.html"> Contact</a>
        <a target="_blank" href="forgot-password.html"> forgot password</a>
        <a target="_blank" href="faq.html"> faq</a>
        <a target="_blank" href="form.html"> form elements</a>
        <a target="_blank" href="post-ads.html"> post ads</a>
        <a target="_blank" href="posting-success.html"> posting success</a>
        <a target="_blank" href="signup.html"> sign up</a>
        <a target="_blank" href="sub-category-sub-location.html"> sub category </a>
        <a target="_blank" href="statements.html"> Order Statements <span class="label label-success "
                                                                          style="font-size: 10px"></span></a>
        <a target="_blank" href="seller-profile.html"> Seller profile
            <span class="label label-success " style="font-size: 10px"></span></a>
        <a target="_blank" href="terms-conditions.html"> Terms Conditions
            <span class="label label-success " style="font-size: 10px"><em>NEW</em></span></a>


        <a> <strong>-- JOBS --</strong> <span class="label label-success " style="font-size: 10px"></span>
        </a>

        <a target="_blank" href="job-home.html"> Job Home </a>
        <a target="_blank" href="job-list.html"> Job List </a>
        <a target="_blank" href="job-details.html"> Job details </a>
        <a target="_blank" href="job-login.html"> Job login </a>
        <a target="_blank" href="job-post.html"> Job post </a>
        <a target="_blank" href="job-signup.html"> Job signup </a>

    </div>
    <p class="tbtn"><i class="fa fa-angle-double-left"></i></p>
</div>
<!--themeControll-->


<div id="wrapper">

    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                        BOOT<span>CLASSIFIED </span> </a></div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger"
                                               href="post-ads.html">Post Free Add</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    @yield('content')
    @section('script')
    @show

    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-left navbar-link footer-nav">
                <li><a href="index.html"> Home </a> <a href="about-us.html"> About us </a> <a href="terms-conditions.html"> Terms and
                        Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a
                            href="faq.html"> FAQ </a>
            </ul>
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; 2015 BootClassified</li>
            </ul>
        </div>

    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<script src="{{ asset ("web/assets/bootstrap/js/bootstrap.min.js") }}"></script>

<!-- include carousel slider plugin  -->
<script src="{{ asset ("web/assets/js/owl.carousel.min.js") }}"></script>

<!-- include equal height plugin  -->
<script src="{{ asset ("web/assets/js/jquery.matchHeight-min.js") }}"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="{{ asset ("web/assets/js/hideMaxListItem.js") }}"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="{{ asset ("web/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js") }}"></script>
<script src="{{ asset ("web/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js") }}"></script>


<!-- include custom script for site  -->
<script src="{{ asset ("web/assets/js/script.js") }}"></script>


<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="{{ asset ("web/assets/plugins/autocomplete/jquery.mockjax.js") }}"></script>
<script type="text/javascript" src="{{ asset ("web/assets/plugins/autocomplete/jquery.autocomplete.js") }}"></script>
<script type="text/javascript" src="{{ asset ("web/assets/plugins/autocomplete/usastates.js") }}"></script>

<script type="text/javascript" src="{{ asset ("web/assets/plugins/autocomplete/autocomplete-demo.js") }}"></script>


</body>
</html>
