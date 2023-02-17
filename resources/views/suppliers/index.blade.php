@extends('master.app')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title ">Simple Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th> No </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Telephone </th>
                          <th> Adress </th>
                          <th> Items </th>
                        </thead>

                        <tbody>
                        @foreach ($suppliers as $supplier )
                          <tr>
                            <td> {{ $supplier->id ?? ''}} </td>
                            <td> {{ $supplier->name ?? ''}} </td>
                            <td> {{ $supplier->email ?? ''}} </td>
                            <td> {{ $supplier->tel ?? ''}} </td>
                            <td> {{ $supplier->adress?? '' }} </td>

                            <td>
                                @foreach ( $supplier->products as $item)
                                    <li>{{ $item->name }} {{ $item->pivot->quantity }}</li>
                                @endforeach
                            </td>

                          </tr>
                    @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@endsection
