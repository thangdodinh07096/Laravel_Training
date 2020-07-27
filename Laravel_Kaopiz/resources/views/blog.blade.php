@extends('master')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8">
                @foreach($posts as $post)
                    <h2><a href="{{ route('post.show', $post->id) }}" style=" text-decoration: none;">{{ $post->title }}</a></h2>
                    <h5>Title description, {{ $post->created_at }}</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>{{ $post->content }}</p>
                    <br>
                @endforeach
                    {!! $posts->links() !!}
            </div>

        </div>
    </div>
@endsection
