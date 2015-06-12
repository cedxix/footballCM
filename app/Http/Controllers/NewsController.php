<?php namespace londonbarifc\Http\Controllers;

use londonbarifc\Http\Requests;
use londonbarifc\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    //
    public function index()
    {
        return view('news.index');
    }

    public function read_news($slug)
    {
        return view('news.read');
    }


}
