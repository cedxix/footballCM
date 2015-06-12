@extends('gallery.master')

@section('custom-css')
    <link rel="stylesheet" href="/dist/css/components/sticky.css"/>
    <link rel="stylesheet" href="/dist/css/components/slidenav.css"/>
    <link rel="stylesheet" href="/dist/css/components/slideshow.css"/>

    <link rel="stylesheet" href="pgwslider/pgwslider.css"/>
@endsection

@section('title')
    Our gallery
@stop
@section('full-size')

    {{-- TEAM PLAYERS --}}
    @for ($i = 0; $i < 2; $i++)
        <div class="uk-width-1-1 uk-grid uk-block">
            <div class="uk-width-1-1 uk-block-content">
                <div class="uk-block-title">
                    Scoring against {{ $i }}
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
    @endfor
    {{--END TEAM PLAYERS --}}
@endsection

@section('content')
@endsection
@section('aside')
@endsection

@section('custom-js')
    <script type="application/javascript" src="dist/js/components/slideset.js"></script>
    <script type="application/javascript" src="dist/js/components/slideshow.js"></script>
@endsection