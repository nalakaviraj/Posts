<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard;

use App\Http\Requests\RegistrationForm;

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


    public function store(RegistrationForm $form)

    {



        $form->persist();


        session()->flash('message','hell thank you');




    	// Create and save the user





    	// Redirect to the home page

    	 return redirect('/');
    	 // or we can use Redirect('/')


    }

}
