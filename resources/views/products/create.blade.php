@extends('master.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-rose card-header-text">
                <div class="card-text">
                    <h4 class="card-title">Add New Product</h4>
                </div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

                </div>

            </div>

            @if ($errors->any())

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif

            <div class="card-body ">

                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="price">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="text" name="detail" class="form-control" placeholder="datail">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    @endsection
