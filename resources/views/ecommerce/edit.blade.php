@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Edit Ecommerce</h5>
                <form class="row g-3" action={{ url('/ecommerce/update/'.$ecommerce->id) }}
                    method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingName" placeholder="Your Name"
                                name="name" value="{{ $ecommerce->name }}" >
                            <label for="floatingName">Name</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingLink" placeholder="Your Name"
                                name="link" value="{{ $ecommerce->link }}" >
                            <label for="floatingLink">Link</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingAddress" placeholder="Your Name"
                                name="address" value="{{ $ecommerce->address }}" >
                            <label for="floatingAddress">Address</label>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="reset" class="btn btn-danger" href="{{ url('/ecommerce/') }}">Back</a>
                    </div>
                </form>
                <!-- End floating Labels Form -->
            </div>
        </div>
    </div>
</div>

@endsection
