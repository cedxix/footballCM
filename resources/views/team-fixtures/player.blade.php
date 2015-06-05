@extends('team-fixtures.master')

@section('title')
    Player profile
@endsection

@section('content')
    {{-- TEAM PLAYERS --}}
    <div class="uk-block">
        <div class="uk-grid uk-margin-small-bottom">
            <div class="uk-width-4-6">
                <div class="uk-h2 uk-text-danger">1.Luca Pecorrari</div>
            </div>

            <div class="uk-width-2-6 uk-margin-small-bottom">
                <form class="uk-form uk-form-controls-condensed" action="post">
                    <select name="player_id" id="" class="uk-width-1-1">
                        <option value="0">1. Lucas Pecorrari</option>
                    </select>
                </form>
            </div>

        </div>
        <hr/>
        <div>
            <div class="uk-grid uk-grid-small">
                <div class="uk-clearfix uk-width-2-6 uk-text-justify">
                    <img src="/img/team_players/seniors/Luca-Pecorari-300x300.jpg" alt=""
                         class="uk-thumbnail" style="max-height: 400px;"/>
                </div>

                <div class="uk-width-4-6 uk-block uk-padding-top-remove uk-margin-right-remove">
                    <div class="uk-block-content">
                        <div class="uk-block-title">Player details</div>
                        <table class="uk-table uk-table-striped uk-table-condensed">
                            <tbody>
                            <tr>
                                <th>Number</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td>Goalkeeper</td>
                            </tr>
                            <tr>
                                <th>First name</th>
                                <td>Luca</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>25</td>
                            </tr>
                            <tr>
                                <th>Last name</th>
                                <td>Pecorari</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>London</td>
                            </tr>
                            <tr>
                                <th>Current Team</th>
                                <td>London Bari FC Senior</td>
                            </tr>
                            <tr>
                                <th>Past Team</th>
                                <td>London Bari FC Senior</td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td>Goalkeeper</td>
                            </tr>
                            <tr>
                                <th>Seasons</th>
                                <td>2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015</td>
                            </tr>
                            <tr>
                                <th>Height</th>
                                <td>185</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>78</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="uk-block">
        <div class="uk-block-content">
            <div class="uk-block-title-grey">Biography</div>
            <p>
                Mario Bellucci is one of the youngest players to join the team. A confident presence on the field who
                communicates well, he has become a key member of the squad since joining in 2010.

            <p>
                As a talented goalkeeper, he has established himself in the first-team squad this season. The previous
                year,
                he had spent six productive months training overseas. He says this experience truly improved his
                performance
                and widened his understanding of the game. He came back more quick and powerful than ever before. The
                tall
                shot-stopper proved himself within weeks of joining the squad.
            </p>

            His quick reflexes and command of the penalty area was vital to the squad’s win last season. He claimed a
            100 per cent record in his six appearances. He’s clearly demonstrated he is a serious contender for the
            number one goalkeeping position.
            </p>

        </div>
    </div>
    {{--END TEAM PLAYERS --}}
@endsection
