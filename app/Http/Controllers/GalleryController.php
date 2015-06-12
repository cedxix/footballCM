<?php namespace londonbarifc\Http\Controllers;

use londonbarifc\Http\Requests;
use londonbarifc\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GalleryController extends Controller {

	//
    public function index()
    {
        return view('gallery.index');
    }

}
