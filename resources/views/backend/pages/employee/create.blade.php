@extends('backend.layouts.master')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add Details of New Employee</h4>
                <form action="{{route('employee.store')}}" method="POST" >
                    @csrf
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Enter Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Employee Name" id="example-text-input" name="name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="search" placeholder="Enter Phone Number" id="example-search-input" name="contact">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Base Salery</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" placeholder="Enter Base Salary" id="example-email-input" name="basesalery">
                    </div>
                </div>
                <div class="mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect">
                            Cancel
                        </button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection







<!-- end row -->
