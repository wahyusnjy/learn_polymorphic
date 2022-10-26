@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Edit Perusahaan</h5>
                <form class="row g-3" action={{ url('/perusahaan/update/'.$perusahaan->id) }}
                    method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingName" placeholder="Your Name"
                                name="name" value="{{ $perusahaan->name }}">
                            <label for="floatingName">Perusahaan Name</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingAddress" placeholder="Your Name"
                                name="address" value="{{ $perusahaan->address }}">
                            <label for="floatingAddress">Address</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingNpwp" placeholder="Your Name"
                                name="npwp" value="{{ $perusahaan->npwp }}">
                            <label for="floatingNpwp">NPWP</label>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="reset" class="btn btn-danger" href="{{ url('/perusahaan/') }}">Back</a>
                    </div>
                </form>
                <!-- End floating Labels Form -->
            </div>
        </div>
    </div>
</div>

@endsection
