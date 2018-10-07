@extends('user.app')
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Laravel')
@section('subheading','Learn,grow and walk together')

@section('main_content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
            {{$about[0]->title}}
            </h2>
            <br>
            {{$about[0]->body}}
            <hr>
          <p class="post-meta">Posted by
            
           Ruhid
        </div>
        <hr>
 
      </div>
    </div>
  </div>
  <hr>
@endsection