<?php

class HomeController extends BaseController {

    /*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function index()
    {
        //get the last registered 4 members
        $members = User::orderBy('created_at', 'desc')->take(4)->get();
        //create view with collection
        return View::make('home')->withMembers($members);
    }

}
