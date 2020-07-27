@extends('master')

@section('title')
    Blog Detail
@endsection

@section('content')
    <div class="container" style="margin-top:30px; margin-bottom: 30px">
        <div class="row">
            <h2 class="col-9">{{ $post->title }}</h2>
            <div class="col-3" style="text-align:right;">
                <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                <form style="display: inline-block;" action="{{ route('post.delete', $post->id) }}" method="post" accept-charset="utf-8">
                    @csrf
                    {{method_field('delete')}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <h5>{{ $post->created_at }}</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>{{ $post->content }}</p>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Comments</h3>
            </div>
            @foreach($comments as $comment)
                <div class="row" style=" margin: 10px">
                    <div class="col-sm-1">
                        <div>
                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" style="width: 100%; height: 50px; margin-top: 10px">
                        </div>
                    </div>

                    <div class="col-sm-11">
                        <div>
                            <div>
                                <strong style="font-size: 20px">{{$comment->user_name}}</strong> <span style="font-size: 14px; color: #2F96B4;">commented {{$comment->created_at}}</span>
                            </div>
                            <div>
                                {{$comment->content_comment}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <form role="form" method="post" action="{{route('comment.store', $post->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div>
                            Name: <input type="text" name="user_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="textarea" name="content_comment" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 15px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Comment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
