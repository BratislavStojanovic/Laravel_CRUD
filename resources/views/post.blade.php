

@section('title')
    Single Post
@endsection

@extends('master')

@section('main')
    <div class="row">
      <div class="col s6 offset-s3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
          <span class="card-title">{{$post->title}}</span>
          <p>{{$post->body}}</p>
          </div>
          <div class="card-action">
          <a href="#">{{$post->user->name}}</a>
          <a href="#" class="right">{{convert($post->created_at)}}</a>
          <a href="{{$post->id}}/edit">Edit post</a>
          <a href="{{$post->id}}/delete">Delete post</a>
          </div>
        </div>
      </div>
    </div>
@endsection