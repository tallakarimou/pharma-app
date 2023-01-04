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
                          <th> Action </th>
                        </thead>

                        <tbody>
                        @foreach ($data as $key => $supplier)
                          <tr>
                            <td> {{++$i}} </td>
                            <td> {{ $supplier->name }} </td>
                            <td> {{ $supplier->email }} </td>
                            <td> {{ $supplier->tel }} </td>
                            <td> {{ $supplier->adress }} </td>
                             <td>
                     <a class="btn btn-info btn-sm" href="{{ route('suppliers.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('suppliers.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['suppliers.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                              </td>
                          </tr>
                    @endforeach
                        </tbody>
                      </table>
                    {!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection