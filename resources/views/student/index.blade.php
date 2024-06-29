@extends('master')

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Student Info</div>
                        <div class="card-body">
                            <p class="text-success">{{Session('message')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td><img src="{{asset($student->image)}}" width="100" height="80"
                                                 alt="student image"></td>
                                        <td>
                                            <a href="{{route('student.edit', ['id'=>$student->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{route('student.destroy', ['id'=>$student->id])}}"
                                               class="btn btn-danger">Delete</a>
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
