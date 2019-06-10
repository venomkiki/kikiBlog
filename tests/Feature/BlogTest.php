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


    public function blog_create()
    {
        $post = Blog::create(['title'=>'fifa' , 'content'=>'is the best player']);
        $this->assertEquals('fifa', $post->title);
        $this->get('/Blogs');
        $this->assertEquals('is the best player',$post->content);
    }

//    public function updating_post()
//    {
//        $post = Posts::update(['id'=>'1','title'=>'fifa','content'=>'messi']);
//        $post->title = "fifa";
//        $post->content = "messi is a goat";
//        $this->put('/Blogs/'.$post->id);
//        $this->assertDatabaseHas('blogs',['id'=> $post->id , 'title' => 'fifa', 'content' => 'messi']);
//        $res = $this->get('/Blogs');
//        $res->assertSee($post->title);
//        $res->assertSee('messi', $post->content);
//    }



}
