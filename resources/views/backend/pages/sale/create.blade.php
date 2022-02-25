@extends('backend.layouts.master')


@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New Sale Details</h4>

            <form action="{{route('sale.store')}}" method="POST" >
                @csrf
                <div class="row">


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Enter Customer Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Customer Name" id="example-text-input" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Customer Name" id="example-text-input" name="contact" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Addresss</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text" placeholder="Enter Address" id="example-text-input" name="address" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">GST Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Customer's GST No.'" id="example-text-input" name="f=gstno" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Advance Payment</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter amount" id="example-text-input" name="advancepay" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Due Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" placeholder="Enter Customer Name" id="example-text-input" name="date" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="justify-center" style="margin-left:50%; font-size:20px">Description</label>
                        <div class="col-sm-2">
                            <button type="button"  id="add_field_button">Add New Item</button>
                        </div>
                        <div style="display:grid; grid-template-columns:repeat(5,350px); justify-content:space-between " class="input_fields_wrap">
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Items" id="example-text-input" name="item[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="HSN" id="example-text-input" name="hsn[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Quantity" id="example-text-input" name="quantity[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Rate" id="example-text-input" name="rate[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Tax" id="example-text-input" name="tax[]" required>
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
@section('scripts')
<script type="text/javascript">


    $(document).ready(function() {
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $("#add_field_button"); //Add button ID

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            //add input box
            var template = `
            <div class="col-sm-2">
                                <input  type="text" placeholder="Items" id="example-text-input" name="item[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="HSN" id="example-text-input" name="hsn[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Quantity" id="example-text-input" name="quantity[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Rate" id="example-text-input" name="rate[]" required>
                            </div>
                            <div class="col-sm-2">
                                <input  type="text" placeholder="Tax" id="example-text-input" name="tax[]" required>
                            </div>
            `;

            $(wrapper).append(template);
        });
    });
</script>
@endsection




