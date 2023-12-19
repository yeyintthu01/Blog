<x-layout>

    <!-- single blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div>
            <div>Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
            <div><a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a></div>
            <div>{{$blog->created_at->diffForHumans()}}</div>
          </div>
          <p class="lh-md mt-3">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>

    @auth
    <section class="container">
        <div class="col-md-8 mx-auto">
             
            <x-comment-form :blog="$blog" />
            
        </div>
    </section>
    @else
    <p class="text-center">Please <a href="/login">login</a> to participate in this session.</p>
    @endauth

    @if($blog->comments->count())
    <x-comments :comments="$blog->comments"/>
    @endif
    <x-subscribe />
    <x-blogs-you-may-like-section :randomBlogs="$randomBlogs" />
</x-layout>
    
    
