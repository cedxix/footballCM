<!DOCTYPE html >
<html class="bkg-feature">
<head lang="fr">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="dist/css/uikit.london-fc.css"/>
    <link rel="stylesheet" href="dist/css/components/slidenav.css"/>
    <link rel="stylesheet" href="dist/css/components/slideshow.css"/>
    <link rel="stylesheet" href="dist/css/components/sticky.css"/>
    <link rel="stylesheet" href="dist/css/custom.css"/>

    <title>London Bari FC</title>
</head>
<body style="">

<div style="padding-top: 50px;">
    <div class="uk-container uk-container-center uk-padding-remove" style="background-color: #f2f2f2;">

        <div class="main-header uk-width-1-1">
            <div class="brand">
                <img src="img/logo.png" alt="London Bary FC Logo" class="uk-flex-right"/>
            </div>

            <div class="uk-grid social-bar">
                <ul class="social-list">
                    <li><a href=""><i class="uk-icon uk-icon-button uk-icon-youtube"></i></a></li>
                    <li><a href=""><i class="uk-icon uk-icon-button uk-icon-youtube"></i></a></li>
                    <li><a href=""><i class="uk-icon uk-icon-button uk-icon-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="uk-navbar uk-navbar-attached">
            <div class="uk-container">
                <ul class="uk-navbar-nav">
                    <li><a href="" class="">Home</a></li>
                    <li><a href="">Fixtures & Results</a></li>

                    <li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
                        <a href="">Teams <i class="uk-icon-caret-down"></i></a>

                        <div class="uk-dropdown uk-dropdown-navbar">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Senior team</a></li>
                                <li><a href="#">Junior team</a></li>
                                <li><a href="#">Minus team</a></li>
                            </ul>
                        </div>

                    </li>

                    <li><a href="">Gallery</a></li>
                    <li><a href="">News & blog</a></li>
                    <li><a href="">Store</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--- SLIDER -->
<div class=" uk-container-center uk-container uk-padding-remove">
    <div class="">
        <div class="uk-slidenav-position" data-uk-slideshow>
            <ul class="uk-slideshow uk-overlay-active" style="height: 400px;overflow: hidden;">
                <li aria-hidden="false" class="uk-active"
                    style="animation-duration: 500ms; -webkit-animation-duration: 500ms; height: 411px;">
                    <div class="uk-cover-background uk-position-cover"
                         style="background-image: url(img/news/1400063233_8397.jpg);"></div>
                    <img src="img/news/1400063233_8397.jpg" width="800" height="400" alt=""
                         style="width: 100%; height: auto;">

                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                        <div class="">
                            <h2 class="uk-heading-large feature-title">London Bari Reserves Double Winners
                                2013/2014</h2>
                        </div>


                    </div>
                </li>
                <li aria-hidden="true"
                    style="animation-duration: 500ms; -webkit-animation-duration: 500ms; height: 411px;"
                    class="">
                    <div class="uk-cover-background uk-position-cover"
                         style="background-image: url(http://getuikit.com/docs/images/placeholder_800x400_2.jpg);"></div>
                    <img src="http://getuikit.com/docs/images/placeholder_800x400_2.jpg" width="800" height="400" alt=""
                         style="width: 100%; height: auto;">
                </li>
            </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"
               style="color: rgba(255,255,255,0.4)"></a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"
               style="color: rgba(255,255,255,0.4)"></a>
        </div>
    </div>
</div>
<!--- /SLIDER -->
<div class="uk-grid uk-margin-remove">


    <div class="uk-width-1-1 uk-container uk-container-center uk-padding-remove ">
        <div class="uk-grid uk-margin-remove tm-block-light">
            <div class="uk-width-3-5 uk-block">
                @yield('content')
            </div>


            <div class="uk-width-2-5 uk-block" style="padding-right: 30px">
                @yield('aside')
            </div>
        </div>
    </div>


    <div class="uk-width-1-1 uk-container uk-container-center uk-padding-remove" style="background: #333333;">

        <ul class="uk-grid" data-uk-grid-margin style="padding: 10px;">

            <!-- These elements have a width in percent -->
            <li class="uk-width-medium-1-5"><img src="img/sponsor/grababuildersponsorlogo.png"
                                                 alt="Graba builder sponsor logo"/></li>
            <li class="uk-width-medium-1-5"><img src="img/sponsor/Ray-Investments.jpg"
                                                 alt="Graba builder sponsor logo"/></li>
            <li class="uk-width-medium-1-5"><img src="img/sponsor/sxsports.jpg" alt="Graba builder sponsor logo"/></li>
            <li class="uk-width-medium-1-5"><img src="img/sponsor/UEL.png" alt="Graba builder sponsor logo"/></li>

            <!-- These elements have a width in pixel -->
            <li class="uk-width" style="width: 100px;">...</li>
            <li class="uk-width" style="width: 150px;">...</li>

        </ul>
    </div>

</div>

<script src="dist/js/jquery-1.11.3.min.js"></script>
<script type="application/javascript" src="dist/js/uikit.min.js"></script>
<script type="application/javascript" src="dist/js/components/slideset.js"></script>
<script type="application/javascript" src="dist/js/components/slideshow.js"></script>
<script type="application/javascript" src="dist/js/components/slideshow-fx.min.js"></script>

<script type="application/javascript">
</script>

</body>
</html>
