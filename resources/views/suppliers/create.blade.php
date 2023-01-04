@extends('master.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Supplier</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'suppliers.store','method'=>'POST')) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title"> New Supplier</h4>
                  </div>
                  <div class="card-body ">

                  <div class="form-group">
                      {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      {!! Form::text('tel', null, array('placeholder' => 'Telephone','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      {!! Form::text('adress', null, array('placeholder' => 'Adress','class' => 'form-control')) !!}
                    </div>
                   
                  <div class="card-footer text-right">

                    <button type="submit" class="btn btn-rose">Register</button>

                  </div>
                </div>

              {!! Form::close() !!}
            </div>
</div>




@endsection