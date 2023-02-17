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
                          <th> stocks </th>
                        </thead>

                        <tbody>
                        @foreach ($stocks as $stock )
                          <tr>

                            <td> {{ $stock->id ?? ''}} </td>
                            <td> {{ $stock->name ?? ''}} </td>

                            <td>
                                @foreach ( $stocks as $item)
                                    <li>{{ $item->quantity }} {{ $item->expire_at }}</li>
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
