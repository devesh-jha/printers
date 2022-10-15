@extends('backend.layouts.master')


@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New Sale Details</h4>

            <form action="{{route('sale.store')}}" method="POST">
                @csrf
                <div class="row">
                <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Enter Invoice ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Invoice ID"
                                 name="invoiceid" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Enter Customer Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Customer Name"
                                 name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" placeholder="+91 1234567890"
                                id="example-text-input" name="contact" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Addresss</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text" placeholder="Enter Address"
                                id="example-text-input" name="address" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">GST Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter Customer's GST No.'"
                                id="example-text-input" name="gstno" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Advance Payment</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Enter amount" id="example-text-input"
                                name="advancepay" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Due Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" placeholder="Enter Customer Name"
                                id="example-text-input" name="date" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">GST Yes/No</label>
                        <div class="col-sm-10">
                            <select class="form-control" type="date" placeholder="Enter Customer Name"
                                id="gst-sel" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="d-flex">
                            <label for="example-text-input" class="justify-center"
                                style="margin-left:50%; font-size:20px">Description</label>
                            <div style="margin-left:auto">
                                <button type="button" class="btn btn-primary" id="add_field_button"
                                    style="margin-bottom:10px">Add New Item</button>
                            </div>
                        </div>
                        <div style="display:grid; grid-template-columns:repeat(5,250px); justify-content:space-between " id="myMainId"
                            class="input_fields_wrap">
                            <style>
                                .my-input {
                                    border-radius: 5px;
                                    border: 1px solid black;
                                    padding: 10px;
                                    width: 220px;
                                    margin-top: 10px;
                                    outline: none;
                                }

                            </style>
                            <div class="col-sm-2">
                                <input type="text" class="my-input" name="items[]" id="example-text-input"
                                    placeholder="item" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="my-input" name="hsn[]" id="example-text-input"
                                    placeholder="hsn" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="my-input" name="quantity[]" id="example-text-input"
                                    placeholder="quantity" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="my-input" name="rate[]" id="example-text-input"
                                    placeholder="rate" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="my-input" name="tax[]" id="tax-input"
                                    placeholder="tax" >
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <button class="btn btn-success" type="submit" style="width: 100%">Submit form</button>
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
    $(document).ready(function () {
        $("#gst-sel").trigger("change");
        var gstCheck = "yes";
        var gstCheck = $("#gst-sel").change(function() {
            if ($("#gst-sel").val() == "yes") {
            return $("#gst-sel").val();
            } else {
                var gstTaxIn = document.querySelector("#tax-input");
                gstTaxIn.style.display = "none";
                // var mainClass = document.querySelector(".input_fields_wrap");
                // $("#myMainId").removeAttr('style');
                // mainClass.style.display = "grid";
                // mainClass.style.gridTemplateColumns = "repeat(4,250px)";
                // mainClass.style.justifyContent = "space-between";
                return $("#gst-sel").val();
            }
        });


        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $("#add_field_button"); //Add button ID

        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            //add input box
            console.log(gstCheck);
            console.log($("#gst-sel").val());
            if ($("#gst-sel").val() == "yes") {
                var template = `
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="items[]" id="example-text-input"
                                        placeholder="item" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="hsn[]" id="example-text-input"
                                        placeholder="hsn" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="quantity[]" id="example-text-input"
                                        placeholder="quantity" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="rate[]" id="example-text-input"
                                        placeholder="rate" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="tax[]" id="example-text-input"
                                        placeholder="tax" required>
                                </div>
            `;
            }else{
                var template = `
                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="items[]" id="example-text-input"
                                        placeholder="item" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="hsn[]" id="example-text-input"
                                        placeholder="hsn" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="quantity[]" id="example-text-input"
                                        placeholder="quantity" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="rate[]" id="example-text-input"
                                        placeholder="rate" required>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="my-input" name="tax[]" id="example-text-input"
                                        placeholder="tax" hidden>
                                </div>

                `;
            }

            $(wrapper).append(template);

        });
    });



</script>
@endsection
