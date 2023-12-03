@extends ('layout')

@section('title')
    <title>All Blogs</title>
@endsection
@section('content')
    @foreach($blogs as $blog)
        <h1><a href="blogs/{{$blog->slug}}"><?= $blog->title; ?></a></h1>
        <div>
            <p>published at - {{$blog->date}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach
@endsection
    
