@extends('master.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-rose card-header-text">
                <div class="card-text">
                    <h4 class="card-title">Add New sale</h4>
                </div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>

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

                <form action="{{ route('sales.store') }}" method="POST">
                    @csrf

                    <table class="table table-bordered" id="dynamicTable">
                        <tr>
                            <th>item</th>
                            <th>tax</th>
                            <th>price</th>
                            <th>selling_price</th>
                            <th>total_price</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="invetory[0][item]"  class="form-control" /></td>
                            <td><input type="text" name="invetory[0][tax]"  class="form-control" /></td>
                            <td><input type="text" name="invetory[0][price]"  class="form-control" /></td>
                             <td><input type="text" name="invetory[0][selling_price]"  class="form-control" /></td>
                              <td><input type="text" name="invetory[0][total_price]"  class="form-control" /></td>

                        </tr>
                    </table>
                   <button type="button" name="add" id="add" class="btn btn-success">Add More</button>

                    <button type="submit" class="btn btn-success">Save</button>



                </form>
          </div>
    </div>
</div>

    <script type="text/javascript">

        var i = 0;

        $("#add").click(function(){

            ++i;

            $("#dynamicTable").append('<tr><td><input type="text" name="invetory['+i+'][item]"  class="form-control" /></td><td><input type="text" name="invetory['+i+'][tax]"  class="form-control" /></td><td><input type="text" name="invetory['+i+'][price]" class="form-control" /></td><td><input type="text" name="invetory['+i+'][selling_price]" class="form-control" /></td><td><input type="text" name="invetory['+i+'][total_price]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
        });

        $(document).on('click', '.remove-tr', function(){
             $(this).parents('tr').remove();
        });

    </script>

    @endsection
