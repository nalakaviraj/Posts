<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard;

class RegistrationController extends Controller
{
    //
public function __construct(){

$this->middleware('guest');

}

    public function create()
    {

    	return view('registration.create');



    }


    public function store()

    {

    	 //Validate the form



    	$this->validate(request(),[


    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'


    	]);


    	// Create and save the user

    	$user = User::create([
'name' => request('name'),
'email' => request('email'),
'password' => Hash::make(request('password'))
]);




    	//Sign them in


    	 auth()->login($user);


    	// Redirect to the home page

    	 return redirect('/');
    	 // or we can use Redirect('/')


    }

}
