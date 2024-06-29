@extends('master')
@section('title')
    Detail Page
@endsection
@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset($product['image'])}}" alt=""/>
                        <div class="card-img-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{$product['name']}}</h1>
                        <h4>Tk. {{$product['price']}}</h4>
                        <p>{{$product['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
