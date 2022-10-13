@extends('backend.layouts.master')


@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New Vendor Details</h4>

            <form action="{{route('vendor.store')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip01" class="form-label">Vendor Name</label>
                            <input type="text" class="form-control" id="validationTooltip01"
                                placeholder="First name" name="name" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip01" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="validationTooltip01"
                                placeholder="Number" name="contact" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip02" class="form-label">Address</label>
                            <textarea type="text" class="form-control" id="validationTooltip02"
                                placeholder="Number" name="address" required>
                            </textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end card -->
</div> <!-- end col -->
</div>
@endsection
