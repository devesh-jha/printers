@extends('backend.layouts.master')


@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Enter New Record</h4>
                <form action="{{route('ledger.store')}}" method="POST" class="needs-validation">
                    @csrf
                    
                            <div class="mb-3">
                            <label for="example-date-input" class="form-label">Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="date"  id="example-date-input">
                                </div>
                               
                            </div>


                            <div class="row mb-3">
                                    <label class="form-label">Select Vendor</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" placeholder="Select employee" name="vendor_id">
                                            @foreach ($vendor as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach


                                            </select>
                                    </div>
                                </div>









                            <!-- <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Name" name="name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Particulars</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Particulars" name="particulars" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Credit</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Credit" name="credit" >
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Debit</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder="Debit" name="debit">
                                <div class="valid-feedback">
                                    Looks good!
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
