@extends('products.layouts)
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Laravel CRUD</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('products.create')}}" class="btn btn-info">Create new product</a>
            </div>
        </div>
    </div>
    @endsection