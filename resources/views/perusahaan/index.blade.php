@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Perusahaan</h5>
                <a  class="btn btn-primary mb-4" href="{{ url('perusahaan/create') }}">Add</a>
                <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>NPWP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perusahaan as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->address }}</td>
                        <td>{{ $p->npwp }}</td>
                        <td>
                        <a href="{{ url('/perusahaan/edit/'. $p->id) }}"
                        class="btn btn-warning">Edit</a>
                        <a href="{{ url('/perusahaan/destroy/'. $p->id) }}"
                        class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
