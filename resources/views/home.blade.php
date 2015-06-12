@extends('master')

@section('custom-css')
    <link rel="stylesheet" href="/dist/css/components/sticky.css"/>
    <link rel="stylesheet" href="/dist/css/components/slidenav.css"/>
    <link rel="stylesheet" href="/dist/css/components/slideshow.css"/>

    <link rel="stylesheet" href="pgwslider/pgwslider.css"/>
@endsection
@section('feature')
    <div class="uk-block tm-block-dark uk-padding-remove">
        <ul class="pgwSlider">
            <li><img src="img/news/2891_fernando_torres.jpg"
                     alt="Glodi Mungu ( captain of London Bari 1st team)"
                     data-description="scouted at London Bari Soccer Showcase">
            </li>
            <li>
                <img src="http://static.pgwjs.com/img/pg/slider/montreal_mini.jpg"
                     alt="Montréal, QC, Canada"
                     data-large-src="montreal.jpg">
            </li>
            <li>
                <a href="#">
                    <img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"
                         alt="Shanghai, China">
                </a>
            </li>

        </ul>
    </div>
@endsection

@section('content')
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title">
                Welcome message
            </div>

            <div class="uk-heading-large uk-text-bold">
                Welcome !
            </div>
            <hr/>
            <div class="uk-text-justify">
                <div class="uk-clearfix">
                    <img class="uk-align-medium-left" src="img/logo.png" width="200px" alt="">

                    London Bari is a semi professional football club based at the Old Spotted Dog Stadium,
                    Upton
                    Lane E7 9NP. London Bari also supports grass roots football and currently has 8 teams in
                    total.

                    <p>
                        This one-stop site is for all the latest news, announcements, fixtures and results
                        for
                        the
                        number one team in the Essex Senior Football League
                    </p>

                    <p>
                        We’ve got plenty of club merchandise available over on our shop for you to check out
                        so
                        make
                        sure you grab it whilst it’s hot.
                    </p>

                    <p>
                        Never want to miss out? Then make sure to sign up to our subscribers list right away
                        and
                        join us
                        on our social media links.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title">
                Next fixture
            </div>
            <div class="uk-text-justify" style="margin-top:10px ;padding: 0 10px;">
                <div class="uk-clearfix uk-flex">
                    <div class="uk-width-1-6">
                        <img class="uk-align-medium-left " src="img/team_logo/logo-o.png" alt="">
                    </div>


                    <div class="uk-width-4-6  uk-text-center">
                        <div class="uk-row">
                            <span class="uk-h5">5 August 2015</span>
                        </div>
                        <div class="uk-row uk-text-bold">
                            <span class="uk-h2 ">LONDON BARI FC VS. BLUE BIRD</span>
                            <span class="uk-h2">3:00 pm</span>
                        </div>
                        <div class="uk-row uk-text-bold">

                            <a href="#"><i class="uk-icon uk-icon-credit-card"></i> Tickets & More</a>
                        </div>
                    </div>
                    <div class="uk-width-1-6">
                        <img class="uk-align-center" src="img/team_logo/bluebirds-128x123.png"
                             alt="">
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title">
                Our players
            </div>
            <div class="uk-margin" data-uk-slideset="{default: 4}">
                <div class="uk-slidenav-position uk-margin">
                    <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-4">
                        <li class="uk-active" style=""><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDoxL3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+MTwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="1 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:1/size:100"
                                    data-holder-rendered="true"></li>
                        <li class="uk-active" style=""><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDoyL3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+MjwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="2 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:2/size:100"
                                    data-holder-rendered="true"></li>
                        <li class="uk-active" style=""><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDozL3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+MzwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="3 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:3/size:100"
                                    data-holder-rendered="true"></li>
                        <li class="uk-active" style=""><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo0L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+NDwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="4 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:4/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo1L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+NTwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="5 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:5/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo2L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+NjwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="6 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:6/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo3L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+NzwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="7 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:7/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo4L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+ODwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="8 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:8/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDo5L3NpemU6MTAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi41LjIuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcy8+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMwRDhGREIiLz48Zz48dGV4dCB4PSIyNjIuOTIxODc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+OTwvdGV4dD48L2c+PC9zdmc+"
                                    width="600" height="400" alt="9 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:9/size:100"
                                    data-holder-rendered="true"></li>
                        <li style="display: none;"><img
                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzYwMHg0MDAvc2t5L2F1dG8vdGV4dDoxMC9zaXplOjEwMApDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNS4yLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnMvPjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEQ4RkRCIi8+PGc+PHRleHQgeD0iMjI1Ljg0Mzc1IiB5PSIyNDQuNyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMDBwdCI+MTA8L3RleHQ+PC9nPjwvc3ZnPg=="
                                    width="600" height="400" alt="10 [600x400]"
                                    data-src="holder.js/600x400/sky/auto/text:10/size:100"
                                    data-holder-rendered="true"></li>
                    </ul>
                    <a href="#" class="uk-slidenav uk-slidenav-previous"
                       data-uk-slideset-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title-grey">
                Our news
            </div>

            <div>
                <ul class="uk-list uk-list-line">
                    <li>
                        <i class="uk-icon uk-icon-minus uk-icon-newspaper-o"> </i><a href="">
                            London Bari FC News #0001
                        </a>
                        <span class="uk-text-muted">12/06/2015</span>
                    </li>
                    <li>
                        <i class="uk-icon uk-icon-minus uk-icon-newspaper-o"> </i><a href="">
                            London Bari FC News #0001
                        </a>
                        <span class="uk-text-muted">12/06/2015</span>
                    </li>
                    <li>
                        <i class="uk-icon uk-icon-minus uk-icon-newspaper-o"> </i><a href="">
                            London Bari FC News #0001
                        </a>
                        <span class="uk-text-muted">12/06/2015</span>
                    </li>
                    <li>
                        <i class="uk-icon uk-icon-minus uk-icon-newspaper-o"> </i><a href="">
                            London Bari FC News #0001
                        </a>
                        <span class="uk-text-muted">12/06/2015</span>
                    </li>
                    <li>
                        <i class="uk-icon uk-icon-minus uk-icon-newspaper-o"> </i><a href="">
                            London Bari FC News #0001
                        </a>
                        <span class="uk-text-muted">12/06/2015</span>
                    </li>


                </ul>
            </div>
        </div>

    </div>
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title" style="max-height: 350px;">
                Social timeline
            </div>
            <div>
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/londonbarifc"
                   data-widget-id="605084245846069248"
                   data-chrome="nofooter noborders transparent">
                    Tweets by @londonbarifc
                </a>
                <script>
                    !function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
        </div>
    </div>
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content uk-block-no-margin">
            <div class="uk-block-title-grey">
                Follow us on youtube
            </div>
            <div>
                <iframe width="100%" height="315" src="http://www.youtube.com/embed/KBC_ieTk0CY"
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script type="application/javascript" src="dist/js/components/slideset.js"></script>
    <script type="application/javascript" src="dist/js/components/slideshow.js"></script>

    <script type="application/javascript" src="pgwslider/pgwslider.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $('.pgwSlider').pgwSlider({
                'maxHeight': 450,
                'verticalCentering': true,
                'adaptiveHeight': false
            });

        });
    </script>
@endsection
