


<footer>
  <h1 class="pink-text">Last 3 posts</h1>
  <ul>
    @foreach ($latestPosts as $post)
  <a href="/post/{{$post->id}}">Post by {{$post->user->name}} |</a> 
    @endforeach
    
    
  </ul>
</footer>