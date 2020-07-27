@extends('master')

@section('title')
    Create Blog
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bài đăng mới</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Thời gian</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Detail</a>
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
{{--                                            @csrf--}}
{{--                                            {{method_field('delete')}}--}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
