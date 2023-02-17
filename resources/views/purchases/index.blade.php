@extends('master.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Purchsases Table</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="pull-right">
                            @can('product-create')
                            <a class="btn btn-success pull-right" href="{{ route('purchases.create') }}"> Create New
                                Purchase</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>


            @if ($message = Session::get('success'))

            <div class="alert alert-success">

                <p>{{ $message }}</p>

            </div>

            @endif

            <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Users_id</th>
                        <th>Suppliers_id</th>
                        <th>Products_id</th>
                        <th class="disabled-sorting text-right">Products Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($purchases as $purchase)
                    <tr>
                        <td class='text-center'>{{ ++$i }}</td>

                        <td>{{ $product->name }}</td>
                        <td>&euro; {{ $product->price }} </td>
                        <td>{{ $product->detail }}</td>
                        <td class="text-right">
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a type='button' class="btn btn-info btn-link" rel="tooltip"
                                    href="{{ route('products.show',$product->id) }}">
                                    <i class="material-icons">person</i>
                                </a>
                                @can('product-edit')
                                <a type='button' class="btn btn-warning btn-link" rel="tooltip"
                                    href="{{ route('products.edit',$product->id) }}">
                                    <i class="material-icons">dvr</i>
                                </a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('product-delete')
                                <button type="submit" class="btn btn-danger btn-link" rel="tooltip">
                                    <i class="material-icons">close</i>
                                </button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</div>
</div>
</table>

</div>
</div>
</div>

{!! $products->links() !!}

@endsection
