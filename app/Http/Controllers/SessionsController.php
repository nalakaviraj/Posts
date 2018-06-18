<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

class SessionsController extends Controller
{
    //

    public function __construct()
{


$this->middleware('guest',['except'=> 'destroy']);
 
}


    public function create()
    {


    	return view('sessions.create');


    	
    }

 public function store()
    {



    	// Attempt to authenticate the user

    	if(! auth()->attempt(request(['email','password']) ))
    	{


    		return back()->withErrors([

    			'message'=>'please chech your credentials and try again'


    		]);

    	}

    	 return redirect('/');

    	// If so,sign them in
    	

    	//  Redirect to the homepage

    	// If not redirect back


    	
    }




public function destroy()
{


	auth()->logout();

	return redirect('/');

}


}
