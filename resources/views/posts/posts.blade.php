 <div class="blog-post">
            <h2 class="blog-post-title">


              <a href="/posts/{{$post->id}}">

              {{$post->title}}</h2>

            </a>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} <a href="#">{{$post->user->name}}
            </a>
        </p>


            {{$post->body}}

            
  </div>      