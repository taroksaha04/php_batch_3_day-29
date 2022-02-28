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
                        <div class="card-header text-center bg-primary font-weight-bold">All Student</div>
                        <div class="card-body bg-secondary">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl NO</th>
                                    <th>Student Id</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Student Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->mobile}}</td>
                                    <td>
{{--                                        name dite hobe route er edit-student--}}
{{--                                        jhokon edit button click kortechi thokhon kivabe id pass korbo--}}
                                        <a href="{{route('edit-student',['id'=> $student->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
{{--                                        <a href="{{route('delete-student',['id'=> $student->id])}}" class="btn btn-danger btn-sm">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                        </a>--}}

                                        <a href="" class="btn btn-danger btn-sm" onclick="deleteStudent({{$student->id}})">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form method="POST" action = "{{route('delete-student',['id'=>$student->id])}}" id="deleteStudentForm{{$student->id}}">
                                            @csrf
                                        </form>

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
    <script>
        function deleteStudent(id) {
            //alert('test');
            //confirm('ok');
            event.preventDefault();
            var check = confirm('Are You sure to delete this..');
            //alert(check);
            if(check){
               // alert('ok');
                document.getElementById('deleteStudentForm'+id).submit();
            }
        }
    </script>


@endsection
