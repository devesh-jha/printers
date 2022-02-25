@extends('backend.layouts.master')


@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Enter New Daily Expense Record</h4>
                <form action="{{route('expense.store')}}" method="POST" class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Name" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Enter Amount</label>
                                <input type="number" class="form-control" name="amount"
                                parsley-type="email" placeholder="Enter Total amount"/>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Category</label>
                                <select class="form-select" id="validationCustom03" name="category" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Inventory Stock</option>
                                    <option>Salery</option>
                                    <option>Transport</option>
                                    <option>Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Account Type</label>
                                <select class="form-select" id="validationCustom03" name="account" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Cash</option>
                                    <option>Cheque</option>
                                    <option>Online</option>
                                    <option>Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label for="example-date-input" class="form-label">Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="date"  id="example-date-input">
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <div>
                            <textarea required class="form-control" name="description"></textarea>
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
<!-- end row -->

@endsection
