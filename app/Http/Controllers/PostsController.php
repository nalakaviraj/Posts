<?php

namespace App\Http\Controllers;
 
use App\Repositories\posts;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index','show']);



    }



    

     public function index(posts $posts) 
    {

     

        $posts=$posts->all();

       
        
        // $posts=Post::latest()
        // ->filter(request(['month','year']))
        // ->get();


 

    	// $posts=Post::latest(); 


     //    if($month=request('month'))
     //    {

     //        $posts->whereMonth('created_at',Carbon::parse($month)->month);


     //    }

     //      if($year=request('year'))
     //    {

     //        $posts->whereYear('created_at', $year);


     //    }

     //    $posts=$posts->get();

    	return view('posts.index',compact('posts')); 


    }
  

      public function show(Post $post)
    { 
        $archives=Post::archives();
      

    	return view('posts.show',compact('post'));  

    } 

  
       public function create()
    {

    	return view('posts.create');  

    }
     


    public function store()

    {

    	
    	// $post= new Post;

    	// $post->title=request('title');

    	// $post->body=request('body');

    	// $post->save();



    	$this->validate(request(),[


    		'title'=>'required',
    		'body'=>'required'
        ]);


        auth()->user()->publish(


            new Post(request(['title','body']))

        );


        // Post::create([


        //      'title'=>request('title'),
        //      'body' =>request('body'),

        //      'user_id'=>auth()->id() 
        // ]);


    	// Post::create(request([


     //        'title',

     //        'body',

     //        'user_id'=> auth()->user()->id

     //    ]));



 


    	return redirect('/');

    }

}
