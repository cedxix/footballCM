<!DOCTYPE html >
<html class="bkg-feature">
<head lang="fr">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="dist/css/uikit.london-fc.css"/>
    <link rel="stylesheet" href="dist/css/components/sticky.css"/>
    <link rel="stylesheet" href="dist/css/custom.css"/>
    @yield('custom-css')

    <title>London Bari FC</title>
</head>
<body>
{{--HEADER--}}
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
{{--HEADER END--}}

<!--- SLIDER -->
<div class=" uk-container-center uk-container uk-padding-remove">
    @yield('feature')
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
    {{--FOOTER START --}}
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
    {{--FOOTER END--}}
</div>
{{--SCRIPT--}}
<script src="dist/js/jquery-1.11.3.min.js"></script>
<script type="application/javascript" src="dist/js/uikit.min.js"></script>
{{--END MAIN SCRIPT --}}

@yield('custom-js')


</body>
</html>
