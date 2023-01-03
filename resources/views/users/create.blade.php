@extends('master.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
              
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title"> New User</h4>
                  </div>
                  <div class="card-body ">

                  <div class="form-group">
                      <label class="bmd-label-floating"> Name *</label>
                      {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail" class="bmd-label-floating"> Email Address *</label>
                      {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}   
                    </div>
                    <div class="form-group">
                      <label for="examplePassword" class="bmd-label-floating"> Password *</label>
                      {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label for="examplePassword1" class="bmd-label-floating"> Confirm Password *</label>
                      {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>

                        <div>
                          <div class="form-group">
                            <label class="bmd-label-floating">Role *</label>
                             {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                        </div>
                     </div>
                  </div>
                  <div class="card-footer text-right">
                    
                    <button type="submit" class="btn btn-rose">Register</button>

                  </div>
                </div>
              
              {!! Form::close() !!}
            </div>
</div>


              
@endsection