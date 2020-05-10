@section('title')
    Edit Post
@endsection
@extends('master')
@section('main')



    
      <div class="container">
        
         <div class="row">
          <h1>Edit Post</h1>
         <form action="/post/{{$post->id}}/edit" method="POST" class="col s12">
            @csrf
            @method('put')
            <div class="input-field col s8 offset-s2">
              <div class="row">
                <div class="input-field col s12">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name"
                class="{{$errors->has('name') ? 'red' : ''}}"
                value="{{$post->author}}"
                placeholder="your name">
                  
                </div>
                <div class="input-field col s12">
                  <label for="title">Title</label>
                   <input type="text" id="title" name="title"
                   class="{{$errors->has('title') ? 'red' : ''}}"
                value="{{$post->title}}"

                   placeholder="title">
                  </div>
                  <div class="input-field col s12">
                    <label for="body">Body</label>
                     <input id="body" type="text" name="body"
                     class="{{$errors->has('body') ? 'red' : ''}}"
                  value="{{$post->body}}"
                     placeholder="body">
                    </div>
              </div>
              <button class="btn pink">Save</button>
            </div>
          </form>
          @if ($errors->any())
               <p class="red-text">There was an error, try again latter</p>
          @endif
         </div>
        
      </div>
  
@endsection