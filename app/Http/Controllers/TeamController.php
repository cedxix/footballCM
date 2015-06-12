<?php namespace londonbarifc\Http\Controllers;

use londonbarifc\Http\Requests;
use londonbarifc\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return view('team-fixtures.index');
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function fixtures()
    {
        //
        return view('team-fixtures.fixtures');
    }


}
