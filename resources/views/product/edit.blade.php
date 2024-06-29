@extends('master')

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Update Product Form</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{session('message')}}</p>
                            <form action="{{route('product.update',['id'=>$product->id])}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->name}}" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Price</label>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$product->price}}" class="form-control"
                                               name="price"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->description}}" class="form-control"
                                               name="description"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image"/>
                                        <img src="{{asset($product->image)}}" alt="" height="100" width="100"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Product Info"/>
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
