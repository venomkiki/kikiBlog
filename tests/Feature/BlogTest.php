<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Blog;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function blog_create() //test store
    {
        $post = Blog::create(['title'=>'fifa' , 'content'=>'is the best player']);
        $this->assertEquals('fifa', $post->title);
        //this is the page user goes to after logging in.
        $this->get('/Blogs');
        //this is the information displayed on the user's page.
        $this->assertEquals('is the best player',$post->content);
    }

    public function updating_post()
    {
        $post = Posts::create(['id'=>'1','title'=>'fifa','content'=>'messi']);
        $post->title = "fifa";
        $post->content = "messi is a goat";
        //When the user hit's the endpoint to update the task
        $this->put('/Blogs/'.$post->id);
        //The task should be updated in the database.
        $this->assertDatabaseHas('blogs',['id'=> $post->id , 'title' => 'fifa', 'content' => 'messi']);
        $res = $this->get('/Blogs');
        $res->assertSee($post->title);
        $res->assertSee('messi', $post->content);
    }



}
