@extends('backend.layouts.master')


@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Enter New Daily Expense Record</h4>
                <form action="{{route('expense.update',[$expense->id])}}" method="POST" class="needs-validation">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Name" value="{{$expense->name}}" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Enter Amount</label>
                                <input type="text" class="form-control" id="validationCustom02"
                                    placeholder="amount" value="{{$expense->amount}}" name="amount" >
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Category</label>
                                <select class="form-select" id="validationCustom03"  name="category" >
                                    <option selected disabled value="">Choose...</option>
                                    <option @if ($expense->category=="Inventory Stock")
                                        selected
                                    @endif>Inventory Stock</option>
                                    <option @if ($expense->category=="Salery")
                                        selected
                                    @endif>Salery</option>
                                    <option @if ($expense->category=="Transport")
                                        selected
                                    @endif>Transport</option>
                                    <option @if ($expense->category=="Others")
                                        selected
                                    @endif>Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Account Type</label>
                                <select class="form-select" id="validationCustom03" value="{{$expense->account}}" name="account" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option @if ($expense->account=="Cash")
                                        selected
                                    @endif >Cash</option>
                                    <option @if ($expense->account=="Cheque")
                                        selected
                                    @endif>Cheque</option>
                                    <option @if ($expense->account=="Online")
                                        selected
                                    @endif>Online</option>
                                    <option @if ($expense->account=="Others")
                                        selected
                                    @endif>Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <div>
                            <textarea  class="form-control" value="{{$expense->description}}" name="description"></textarea>
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
