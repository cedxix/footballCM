@extends('team-fixtures.master')

@section('custom-css')
@endsection

@section('feature')

@section('heading-block')
    <div class="uk-width-1-1 uk-heading-large">
        <div class="uk-block uk-padding-remove">
            <div class=" title">@yield('title','London Bari FC')</div>
        </div>
    </div>
@show

@section('full-size')
@show


@endsection
@section('content')
    {{-- TEAM PLAYERS --}}
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title">
                Goalkeeper
            </div>
            <div class="uk-margin uk-width-1-1">
                <ul class="uk-grid uk-grid-small" data-uk-grid-margin>
                    <li class="uk-width-1-4 border">
                        <div class="uk-panel ">
                            <div class="uk-overlay uk-overlay-hover">
                                <img class="uk-overlay-scale"
                                     src="/img/team_players/seniors/Luca-Pecorari-300x300.jpg"
                                     width="180" height="180" alt="">
                            </div>
                            <div class="uk-clearfix uk-block uk-width-1-1">
                                <div class="uk-badge uk-badge-danger">24</div>
                                <a href="/players" class="uk-text-bold
                                uk-text-small
                                uk-text-middle">
                                    Luca Pecorari
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{--END TEAM PLAYERS --}}
@endsection

@section('aside')
    {{--NEXT FIXTURE--}}
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title">
                Next fixture
            </div>
            <div class="uk-text-justify" style="margin-top:10px ;padding: 0 10px;">
                <div class="uk-clearfix uk-flex">
                    <div class="uk-width-1-6">
                        <img class="uk-align-medium-left " src="/img/team_logo/logo-o.png" alt="">
                    </div>
                    <div class="uk-width-4-6  uk-text-center">
                        <div class="uk-row">
                            <span class="uk-h6">5 August 2015</span>
                        </div>
                        <div class="uk-row uk-text-bold">
                            <span class="uk-h5 ">LONDON BARI FC VS. BLUE BIRD</span>
                            <span class="uk-h5">3:00 pm</span>
                        </div>
                        <div class="uk-row uk-text-bold">
                            <a href="/teams-fixtures/fixtures"><i class="uk-icon uk-icon-credit-card"></i> Tickets &
                                More</a>
                        </div>
                    </div>
                    <div class="uk-width-1-6">
                        <img class="uk-align-center" src="/img/team_logo/bluebirds-128x123.png"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--END NEXT FIXTURE--}}
    {{-- PREVIOUS FIXTURE--}}
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title-grey">
                Previous Match
            </div>
            <div class="uk-text-justify" style="margin-top:10px ;padding: 0 10px;">
                <div class="uk-clearfix uk-flex">
                    <div class="uk-width-1-6">
                        <img class="uk-align-medium-left " src="/img/team_logo/logo-o.png" alt="">
                    </div>

                    <div class="uk-width-4-6  uk-text-center">
                        <div class="uk-row">
                            <span class="uk-h6">5 August 2015</span>
                        </div>
                        <div class="uk-row uk-text-bold">
                            <span class="uk-h5">LONDON BARI FC VS. BLUE BIRD</span>
                        </div>
                        <div class="uk-h3 uk-row uk-text-bold"> 4 - 0</div>
                    </div>
                    <div class="uk-width-1-6">
                        <img class="uk-align-center" src="/img/team_logo/bluebirds-128x123.png"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--END  PREVIOUS FIXTURE--}}
    {{-- STANDING --}}
    <div class="uk-block uk-width-1-1">
        <div class="uk-block-content">
            <div class="uk-block-title-grey">
                Standing
            </div>
            <div class="uk-text-justify" style="margin-top:10px ;padding: 0 5px;">
                <table class="uk-table uk-table-condensed uk-text-small">
                    <caption>Season Standings</caption>
                    <thead>
                    <tr>
                        <th>Pos</th>
                        <th>Team</th>
                        <th>W</th>
                        <th>D</th>
                        <th>L</th>
                        <th>Pts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="uk-text-danger">
                        <th>1</th>
                        <th>
                            <img src="/img/team_logo/logo-o.png" style="width: 18px;height: 18px;margin-right: 2px">
                            London Bari FC
                        </th>
                        <th>27</th>
                        <th>5</th>
                        <th>6</th>
                        <th>86</th>
                    </tr>
                    <tr class="">
                        <th>2</th>
                        <th>
                            <img src="/img/team_logo/bulls-98x128.png"
                                 style="width: 18px;height: 18px;margin-right: 2px">
                            Richmond
                        </th>
                        <th>26</th>
                        <th>6</th>
                        <th>6</th>
                        <th>84</th>
                    </tr>
                    <tr class="">
                        <th>3</th>
                        <th>
                            <img src="/img/team_logo/bluebirds-128x123.png"
                                 style="width: 18px;height: 18px;margin-right: 2px">
                            Bluebird
                        </th>
                        <th>25</th>
                        <th>7</th>
                        <th>6</th>
                        <th>82</th>
                    </tr>
                    </tbody>
                </table>
                <div class="uk-text-right uk-margin-bottom">
                    <a class="uk-text-small" href="#">view full table >></a>
                </div>
            </div>
        </div>
    </div>
    {{--END  STANDING --}}
    {{--SOCIAL --}}
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
            </div>
        </div>
    </div>
    {{--END SOCIAL --}}
@endsection

@section('custom-js')
@endsection
