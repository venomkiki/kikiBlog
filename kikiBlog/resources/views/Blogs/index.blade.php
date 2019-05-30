@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($blogs as $blog)
 <div class="col-md-7">
     <div class="card">
         <div class="card-header">
             <a href="{{route('blogs_path', ['blog' =>$blog->id])}}" class="href">{{$blog->title}}</a>
         </div>
         <div class="card-body">
             {{$blog->content}}
             <br><br><br>
             <p class="lead">
                posted {{$blog->created_at->diffForHumans()}}
             </p>

             <a href ="{{route('blog_path' ,['blog'=>$blog->id])}}" class="btn btn-outline-primary">View Post</a>
         </div>
     </div>
 </div>

    @endforeach
</div>
    @stop