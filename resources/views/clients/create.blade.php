@extends('master.app')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Client</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>
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

{!! Form::open(array('route' => 'clients.store','method'=>'POST')) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">mail_outline</i>
                </div>
                <h4 class="card-title"> New Sale</h4>
            </div>
            <div class="card-body ">

                <div class="form-group">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('tel', null, array('placeholder' => 'Telephone','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('adress', null, array('placeholder' => 'Adress','class' => 'form-control')) !!}
                </div>
                <div class="card">
                    <div class="card-header">
                        Products
                    </div>

                    <div class="card-body">
                        <table class="table" id="products_table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="product0">
                                    <td>
                                        <select name="products[]" class="form-control">
                                            <option value="">-- choose product --</option>
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">
                                                {{ $product->name }} (XAF{{ number_format($product->price, 2) }})
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="quantities[]" class="form-control" value="1" />
                                    </td>

                                </tr>
                                <tr id="product1"></tr>
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-md-12">
                                <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                                <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>



                <div class="card-footer text-right">

                    <button type="submit" class="btn btn-rose">Register</button>

                </div>

            </div>

            <script>
                        $(document).ready(function(){
                            let row_number = 1;
                            $("#add_row").click(function(e){
                            e.preventDefault();
                            let new_row_number = row_number - 1;
                            $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
                            $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
                            row_number++;
                            });

                            $("#delete_row").click(function(e){
                            e.preventDefault();
                            if(row_number > 1){
                                $("#product" + (row_number - 1)).html('');
                                row_number--;
                            }
                            });
                        });



            </script>



            {!! Form::close() !!}
        </div>

    </div>



@endsection
