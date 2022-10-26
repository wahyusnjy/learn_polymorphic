@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Ecommerce</h5>
                <a  class="btn btn-primary mb-4" href="{{ url('ecommerce/create') }}">Add</a>
                <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($ecommerce as $key => $value)
                    <tbody>
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td><a href="{{ $value->link }}">{{ $value->link }}</a></td>
                            <td>{{ $value->address }}</td>
                            <td>
                            <a href="{{ url('ecommerce/edit/'.$value->id) }}"
                            class="btn btn-warning">Edit</a>
                            <a href="{{ url('ecommerce/destroy/'.$value->id) }}"
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
