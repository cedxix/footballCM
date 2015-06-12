@extends('news.index')

@section('title')
    News title
@stop

@section('full_content')
    <div class="uk-width-1-1 uk-padding-remove" style="height: 450px;" id="featured">
    </div>
@stop
@section('content')
    {{-- TEAM PLAYERS --}}

    <div class="uk-block">
        <div class="uk-block-content" style="padding: 10px;   ">
            <article class="uk-article">
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <h2>Subheading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>


                <p class="uk-article-meta">Written by Author on 12 April 2013. Posted in
                    <a href="layouts_blog.html">Blog</a>
                </p>

            </article>
        </div>
    </div>

    {{--END TEAM PLAYERS --}}
@endsection

@section('custom-js')
    <script type="application/javascript" src="/dist/js/jquery.backstretch.min.js"></script>
    <script type="application/javascript">
        $("#featured").backstretch("/img/news/blog-1-1-640x360.jpg",
                {
                    centeredY: false,
                    centeredX:true
                });
    </script>
@endsection