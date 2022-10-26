@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Pengajuan</h5>
                <a  class="btn btn-primary mb-4" href="{{ url('pengajuan/create') }}">Add</a>
                <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Vendor</th> 
                        </tr>
                    </thead>
                    @foreach($pengajuan as $key => $value)
                    <tbody>
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->vendorable->name }}</td>
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

