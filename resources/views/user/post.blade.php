@extends('user.app')
@section('bg-img',asset(Storage::disk('local')->url($post->image)))
@section('title',$post->title)
@section('subheading',$post->subtitle)
@section('main_content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.1&appId=483146138841383&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <!-- Post Content -->
 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created at: {{$post->created_at->diffForHumans() }}</small>
          <br><br>
        <h3> Categories:</h3>
          <br>
          @foreach ($post->categories as $category)
          <a href="{{ route('category',$category->slug) }}"style="text-decoration:none"> <small class="pull-left "style="border-radius:5px; border:1px solid gray;padding:5px;">
             {{$category->name}}
          </small></a>
          @endforeach
        
         

            {!!htmlspecialchars_decode($post->body)!!}
                <h3>Tags:</h3>
                <br>
           @foreach ($post->tags as $tag)
           <a href="{{ route('tag',$tag->slug) }}"style="text-decoration:none"> <small class="pull-left"style="border-radius:5px; border:1px solid gray;padding:5px;">
              {{$tag->name}}
                </small></a>
          @endforeach
        </div>
        <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>

      </div>
    </div>
  </article>

  <hr>

@endsection