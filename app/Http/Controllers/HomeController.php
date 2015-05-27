<?php

namespace App\Http\Controllers;
use Request;
use DB;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('home', ['branches' => DB::table('branches')->get()]);
    }

    public function contact() {
        return view('contact');
    }

    public function get_post_office_location() {
        $id = Request::input('id');
        return response(
                json_encode(DB::table('branches')->select('latitude', 'longitude')->where('id', '=', $id)->get()), 200)
                ->header('Content-Type', 'Content-type: application/json'); 

    }

}