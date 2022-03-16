@extends('backend.layouts.master')


@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Validation type</h4>

                <form action="{{route('form.store')}}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label>Required</label>
                        <select type="text" class="form-control" id="vendor"
                                placeholder="First name" name="vendor_id" >
                                <option value="">Select Vendor</option>
                                @foreach ($vendor as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="mb-3">
                        <label>Required</label>
                        <select type="text" class="form-control" id="product"
                                placeholder="First name" name="product_id" onchange="myFunction2(this.options[this.selectedIndex])" >

                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Product Name </label>
                        <div>
                            <input type="text" class="form-control" name="name"
                                    parsley-type="text" placeholder="Enter a Product Name"/>
                        </div>
                    </div>
                    <div class="mb-3" id="size">
                        <label>Size</label>
                        <div>
                            <input type="text" class="form-control" name="size"
                                    parsley-type="text" placeholder="Enter a valid size"/>
                        </div>
                    </div>
                    <div class="mb-3" id="gsm">
                        <label>GSM</label>
                        <div>
                            <input type="text" class="form-control" name="gsm"
                                    parsley-type="email" placeholder="Enter GSM"/>
                        </div>
                    </div>
                    <div class="mb-3" id="sheets">
                        <label>Sheets</label>
                        <div>
                            <input type="number" class="form-control" name="sheets"
                                    parsley-type="email" placeholder="Enter Sheets"/>
                        </div>
                    </div>
                    <div class="mb-3" id="rfbundle">
                        <label>Ream For Bundle</label>
                        <div>
                            <input type="number" class="form-control" name="rfbundle"
                                    parsley-type="email" placeholder="Enter a Ream For Bundle"/>
                        </div>
                    </div>
                    <div class="mb-3" id="bundle">
                        <label>Total Bundle</label>
                        <div>
                            <input type="number" class="form-control" name="bundle"
                                    parsley-type="email" placeholder="Enter Total Bundle"/>
                        </div>
                    </div>

                    <div class="mb-3" id="count">
                        <label>Total Count</label>
                        <div>
                            <input type="number" class="form-control" name="count"
                                    parsley-type="email" placeholder="Enter Total Count"/>
                        </div>
                    </div>
                    <div class="mb-3" id="wt_per_box">
                        <label>Weight Per Box</label>
                        <div>
                            <input type="text" class="form-control" name="wt_per_box"
                                    parsley-type="email" placeholder="Enter Weight of One Box"/>
                        </div>
                    </div>
                    <div class="mb-3" id="thickness">
                        <label>Thickness</label>
                        <div>
                            <input type="text" class="form-control" name="thickness"
                                    parsley-type="email" placeholder="Enter Thickness"/>
                        </div>
                    </div>
                     <div class="mb-3" id="price">
                        <label>Total Price</label>
                        <div>
                            <input type="text" class="form-control" name="price"
                                    parsley-type="email" placeholder="Enter Price"/>
                        </div>
                    </div>
                    <div class="mb-3" id="amount_given">
                        <label>Amount Given</label>
                        <div>
                            <input type="text" class="form-control" name="amount_given"
                                    parsley-type="email" placeholder="Enter Total amount Given"/>
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


</div> <!-- end row -->











@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#vendor').on('change', function () {
                var idVendor = this.value;
                $("#product").html('');
                $.ajax({
                    url: "{{url('form/create')}}",
                    type: "POST",
                    data: {
                        vendor_id: idVendor,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#product').html('<option value="">Select Product</option>');
                        $.each(result, function (key, value) {
                            $("#product").append('<option value="' + value
                            .id + '"  id="'+value.name+'" >' + value.name + '</option>');
                        });
                    }
                });
            });

        });

        var gsm = document.querySelector("#gsm");
        var size = document.querySelector("#size");
        var sheets = document.querySelector("#sheets");
        var rfbundle = document.querySelector("#rfbundle");
        var bundle = document.querySelector("#bundle");
        var price = document.querySelector("#price");
        var amount_given = document.querySelector("#amount_given");
        var count = document.querySelector("#count");
        var wt_per_box = document.querySelector("#wt_per_box");
        var thickness = document.querySelector("#thickness");

        // if()
        function myFunction2(selectObject){

            var value = selectObject;
            if(value.text == 'color' || value.text == 'Color' || value.text == 'Colour' ){
                gsm.style.display = "none";
                size.style.display = "none";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "block";
                thickness.style.display = "none";
            }
            else if(value.text == 'Paper' || value.text == 'paper' || value.text == 'papers'){
                gsm.style.display = "block";
                size.style.display = "block";
                sheets.style.display = "block";
                rfbundle.style.display = "block";
                bundle.style.display = "block";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "none";
                wt_per_box.style.display = "none";
                thickness.style.display = "none";
            }
            else if(value.text == 'Lamination Role'|| value.text == 'lamination role'){
                gsm.style.display = "none";
                size.style.display = "none";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "none";
                thickness.style.display = "block";
            }
            else if(value.text == 'punch'|| value.text == 'Punch'){
                gsm.style.display = "none";
                size.style.display = "block";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "none";
                thickness.style.display = "none";
            }
            else if(value.text == 'ctp'|| value.text == 'CTP'){
                gsm.style.display = "none";
                size.style.display = "block";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "none";
                thickness.style.display = "none";
            }
            else if(value.text == 'Gum'|| value.text == 'fevicall'){
                gsm.style.display = "none";
                size.style.display = "none";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "block";
                thickness.style.display = "none";
            }
            else if(value.text == 'other'|| value.text == 'others' || value.text == 'Others' || value.text == 'others'){
                gsm.style.display = "none";
                size.style.display = "none";
                sheets.style.display = "none";
                rfbundle.style.display = "none";
                bundle.style.display = "none";
                price.style.display = "block";
                amount_given.style.display = "block";
                count.style.display = "block";
                wt_per_box.style.display = "block";
                thickness.style.display = "none";
            }
        }

    </script>
@endsection
