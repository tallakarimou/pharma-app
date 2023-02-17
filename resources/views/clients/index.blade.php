@extends('master.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Products Sale</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="pull-right">
                            @can('product-create')
                            <a class="btn btn-success pull-right" href="{{ route('clients.create') }}"> Create New
                                Sale</a>
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
                        <th>Name</th>
                        <th>TELEPHONE</th>
                        <th>ADRESS</th>
                        <th class="disabled-sorting text-right">Action</th>
                    </tr>
                </thead>

                <tbody>
@foreach($orders as $order)

</th>
    <tr data-entry-id="{{ $order->id }}">
        <td>
            {{ $order->id ?? '' }}
        </td>
        <td>
            {{ $order->name ?? '' }}
        </td>
        <td>
            {{ $order->tel ?? '' }}
        </td>
        <td>
            {{ $order->adress ?? '' }}
        </td>
        <td>
            <ul>
            @foreach($order->products as $item)
                <li>{{ $item->name }} ({{ $item->pivot->quantity }} x XAF{{ $item->price }})</li>
            @endforeach
            </ul>
        </td>
        <td>
            {{-- ... buttons ... --}}
        </td>

    </tr>
   @endforeach

</Tbody>
@endsection
