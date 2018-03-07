@extends('products.layouts')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Product</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('product.index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-m-12 col-s-12">
            <div class="form-group">
                <strong>Name</strong>
                {{$product->name}}
            </div>
        </div>
        <div class="col-lg-12 col-m-12 col-s-12">
            <div class="form-group">
                <strong>Detail</strong>
                {{$product->detail}}
            </div>
        </div>
    </div>
    @endsection