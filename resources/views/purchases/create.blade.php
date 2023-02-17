@extends('master.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-rose card-header-text">
                <div class="card-text">
                    <h4 class="card-title">Add New Purchase</h4>
                </div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('purchases.index') }}"> Back</a>

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

                <form action="{{ route('purchases.store') }}" method="POST">
                    @csrf

                    <table class="table table-bordered" id="dynamicTable">
                        <tr>
                            <th>item</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                        


                </form>
          </div>
    </div>
</div>


    @endsection



