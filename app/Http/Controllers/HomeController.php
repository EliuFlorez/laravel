<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commands\CreateArticleCommand;

class HomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        /** Comantamos el Middleware solo para poder acceder el controlador sin tener que loguearnos **/
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('home');
    }
    
    public function create(){
        return view('createPost');
    }
    
    public function store(Request $request){
        $this->dispatchFrom('App\Commands\CreateArticleCommand', $request);
        return redirect()->back();
    }

}
