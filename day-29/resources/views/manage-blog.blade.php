@extends('master')


@section('title')
    Manage Student Page
@endsection

@section('body')
    {{--    <h1>Manage Student page...</h1>--}}
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row bg-dark">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">All Blog</div>
                        <div class="card-body bg-secondary">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl NO</th>
                                    <th>Blog Id</th>
                                    <th>blog title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $blogs)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blogs->id}}</td>
                                        <td>{{$blogs->title}}</td>
                                        <td>{{$blogs->author}}</td>
                                        <td>{{$blogs->description}}</td>
                                        <td>
                                            <a href="{{route('edit-blog',['id'=> $blogs->id])}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
