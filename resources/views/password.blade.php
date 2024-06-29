
@extends('master')
@section('title')
    Contact Page
@endsection
@section('body')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name Program</div>
                        <div class="card-body">
                            <form action="{{route('password-generator')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Password Length</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="password_length"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{session('message')}}"/>
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

