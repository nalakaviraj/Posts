<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;




class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        
        //Given I have two records in the database that are posts
        //and each one is posted a month apart

        $first=factory(Post::class)->create();
        $second=factory(Post::class)->create(['created_at'=> \Carbon\Carbon::now()->subMonth()

 
        ]);

        //when i fetch the archives
                                                                             

        $posts=Post::archives();

        //Then the response should be in the proper format.


  

        $this->assertEquals([

            [

            	    "year" => $first->created_at->format('Y'),
    				"month" => $first->created_at->format('F'),
    				"published" => 3

            ],


            [

            	    "year" => $second->created_at->format('Y'),
    				"month" => $second->created_at->format('F'),
    				"published" => 3

            ]

        ], $posts);

    }




}
