@extends('master.app')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New stock</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('stock.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(array('route' => 'stock.store','method'=>'POST')) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">mail_outline</i>
                </div>
                <h4 class="card-title"> New Stock</h4>
            </div>
            <div class="card-body ">

                <div class="form-group">
                    <select name="products[]" class="form-control">
                        <option value="">-- choose product --</option>
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                  <hr>
                <div class="form-group">
                    {!! Form::number('quantity', null, array('placeholder' => 'add quantity','class' => 'form-control')) !!}
                </div>


                <div class="form-group">
                    {!! Form::date('expired_at', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>


                <input type="hidden" name='product_id' value={{ $product->id }}  class="form-control" >

                <div class="card-footer text-right">

                    <button type="submit" class="btn btn-rose">Register</button>

                </div>

            </div>





            {!! Form::close() !!}
        </div>

    </div>



@endsection
