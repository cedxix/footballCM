@extends('team-fixtures.master')

@section('title')
    Club News / Blog
@endsection
@section('content')
    {{-- TEAM PLAYERS --}}
    <div class="uk-width-1-1 uk-grid uk-block">
        <div class="uk-width-1-1 uk-block-content">
            <div class="uk-block-title-grey uk-margin-small-bottom">
                <i class="uk-icon uk-icon-newspaper-o"></i>
                Our news
            </div>
            @for ($i = 0; $i < 4; $i++)
                <article class="uk-article">
                    <h2 class="uk-article-title uk-text-danger">
                        <a href="/news/details">Article Heading {{ $i }}</a>
                    </h2>

                    <a href="layouts_post.html">
                        <img width="200" height="200"
                             style="background-image: url('/img/news/2891_fernando_torres.jpg');
                             background-position: center center;
                             background-size: cover;
                             width:200px;height: 200px;"
                             class="uk-align-medium-left" id=""/>
                    </a>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquid ex
                        ea commodi consequat...
                    </p>

                    <p class="uk-article-meta">Written by Tony on 12 April 2013. Posted in <a href="/news">News</a></p>

                    <div class="uk-clearfix">
                        <a href="/news/details">
                            <i class="uk-icon uk-icon-angle-right"></i>
                            Continue Reading
                        </a>
                    </div>
                </article>
            @endfor


        </div>
    </div>
    {{--END TEAM PLAYERS --}}
@endsection

@section('custom-js')
    <script type="application/javascript" src="/dist/js/jquery.backstretch.min.js"></script>
    <script type="application/javascript">
//        $(".uk-thumbnail").backstretch("http://dl.dropbox.com/u/515046/www/garfield-interior.jpg");
    </script>
@endsection