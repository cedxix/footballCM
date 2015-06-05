<?php namespace londonbarifc\Http\Controllers;

use londonbarifc\Http\Requests;
use londonbarifc\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlayerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function player_details()
    {
        //
        return view('team-fixtures.player');
    }
}
