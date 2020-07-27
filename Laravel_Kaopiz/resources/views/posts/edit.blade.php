@extends('master')

@section('title')
    Create Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tạo Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tạo Blog</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form role="form" method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title bài đăng</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" id="" placeholder="Điền title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả bài đăng</label>
                                <textarea class="textarea" name="content"class="form-control" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->content }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Edit</button>
                            <a href="{{route('blog.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
