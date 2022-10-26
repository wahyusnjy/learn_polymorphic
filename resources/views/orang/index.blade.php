@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Orang</h5>
                <a  class="btn btn-primary mb-4" href="{{ url('orang/create') }}">Add</a>
                <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($orang as $key => $value)
                    <tbody>
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->contact }}</td>
                            <td>
                                <a href="{{ url('orang/edit/'.$value->id) }}"
                                class="btn btn-warning">Edit</a>
                                <a href="{{ url('orang/destroy/'.$value->id) }}"
                                class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection

