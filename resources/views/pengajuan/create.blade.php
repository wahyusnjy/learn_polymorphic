@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Add Pengajuan</h5>
                <form class="row g-3" action={{ url('/pengajuan/store/') }}
                    method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control mt-3" id="floatingName" placeholder="Your Name"
                                name="name" >
                            <label for="floatingName">Name</label>
                        </div>
                    </div>

                    {{-- css hide --}}
                    <style>
                        .tutup {
                            width: 0;
                            height: 0;
                            opacity: 0;
                        }

                        .hide {
                            width: 0;
                            height: 0;
                            opacity: 0;
                        }

                        .page {
                            height: 58px;
                        }
                    </style>

                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label class="form-label" style="font-weight: bold;"><i
                                    class="fa fa-database"></i> Select Vendor</label>
                            <select class="form-select page pageSelect" id="pageSelect"
                                placeholder="Proposed To" name="vendor">
                                <option value="" disabled selected hidden>Select Vendor </option>
                                <option value="company">Company</option>
                                <option value="privateperson">Private Person</option>
                                <option value="ecommerce">Ecommerce</option>
                            </select>
                            {{-- Perusahaan Dropdown --}}
                            <select class=" form-select hide mt-2" id="selectedInput"
                                name="vendor_id">
                                @foreach ($pt as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- End Perusahaan Dropdown --}}

                            {{-- Private Person Dropdown --}}
                            <select class=" form-select hide" id="selectedInput2"
                                name="vendor_id">
                                @foreach ($op as $o)
                                    <option value="{{ $o->id }}">{{ $o->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- End Private Person Dropdown --}}

                            {{-- Ecommerce Dropdown --}}
                            <select class=" form-select hide" id="selectedInput3"
                                name="vendor_id">
                                @foreach ($ec as $e)
                                    <option value="{{ $e->id }}">{{ $e->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- End Ecommerce Dropdown --}}
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="reset" class="btn btn-danger" href="{{ url('/who-submitted/') }}">back</a>
                    </div>
                </form>
                <!-- End floating Labels Form -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var pageSelect = document.getElementById('pageSelect');
    var selectedInput = document.getElementById('selectedInput');
    var selectedInputCustom = document.getElementById('selectedInputCustom');

    var selectedInput2 = document.getElementById('selectedInput2');
    var selectedInputCustom2 = document.getElementById('selectedInputCustom2');

    var selectedInput3 = document.getElementById('selectedInput3');
    var selectedInputCustom3 = document.getElementById('selectedInputCustom3');

    // Company
    pageSelect.addEventListener('change', function() {
        if (this.value == "company") {
            selectedInput.classList.remove('hide');
        } else {
            selectedInput.classList.add('hide');
        }
    })

    // Private Person
    pageSelect.addEventListener('change', function() {
        if (this.value == "privateperson") {
            selectedInput2.classList.remove('hide');
        } else {
            selectedInput2.classList.add('hide');
        }
    })

    // Ecommerce
    pageSelect.addEventListener('change', function() {
        if (this.value == "ecommerce") {
            selectedInput3.classList.remove('hide');
        } else {
            selectedInput3.classList.add('hide');
        }
    })
</script>
@endsection
