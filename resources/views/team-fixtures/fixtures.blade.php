@extends('team-fixtures.master')

@section('title')
    Senior Team / Fixtures
@endsection

@section('custom-css')
    <link rel="stylesheet" href="/dist/css/components/"/>
@endsection


@section('content')
    {{-- TEAM PLAYERS --}}
    <div class="uk-block">
        <div class="uk-block-content">
            <div class="uk-block-title">fixtures table</div>
            <div class="uk-padding-small-top">
                <div class="uk-grid">
                    <div class="uk-row">
                        <div class="uk-width-1-2 uk-clearfix" style="background-color: red">
                            <div class="uk-width-1-6" style="background-color: #808080">s</div>
                        </div>
                        <div class="uk-width-1-2" style="background-color: yellow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--END TEAM PLAYERS --}}
@endsection
