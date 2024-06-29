@extends('master')
@section('title')
    About Page
@endsection
@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">

                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name Program</div>
                        <div class="card-body">
                            <form action="{{route('make-full-name')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{session('result')}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Full Name"/>
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
