@extends('master')

@section('title')
    Edit student page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-secondary font-weight-bold">Edit Student Form</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
{{--                            update er jonno id die url e pathiechi--}}
                            <form action="{{route('update-student',['id' => $student->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$student->name}}" name="name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{$student->email}}" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{$student->mobile}}"name="mobile"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Student"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
