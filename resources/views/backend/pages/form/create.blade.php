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
                                placeholder="First name" name="product_id" >

                            </select>
                    </div>
                    <div class="mb-3">
                        <label>Product Name </label>
                        <div>
                            <input type="text" class="form-control" name="name"
                                    parsley-type="text" placeholder="Enter a Product Name"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Sixe</label>
                        <div>
                            <input type="text" class="form-control" name="size"
                                    parsley-type="text" placeholder="Enter a valid size"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>GSM</label>
                        <div>
                            <input type="text" class="form-control" name="gsm"
                                    parsley-type="email" placeholder="Enter GSM"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Sheets</label>
                        <div>
                            <input type="number" class="form-control" name="sheets"
                                    parsley-type="email" placeholder="Enter Sheets"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Ream For Bundle</label>
                        <div>
                            <input type="number" class="form-control" name="rfbundle"
                                    parsley-type="email" placeholder="Enter a Ream For Bundle"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Total Bundle</label>
                        <div>
                            <input type="number" class="form-control" name="bundle"
                                    parsley-type="email" placeholder="Enter Total Bundle"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Total Price</label>
                        <div>
                            <input type="text" class="form-control" name="price"
                                    parsley-type="email" placeholder="Enter Price"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Amount Given</label>
                        <div>
                            <input type="text" class="form-control" name="amount_given"
                                    parsley-type="email" placeholder="Enter Total amount Given"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Total Count</label>
                        <div>
                            <input type="number" class="form-control" name="count"
                                    parsley-type="email" placeholder="Enter Total Count"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Weight Per Box</label>
                        <div>
                            <input type="text" class="form-control" name="wt_per_box"
                                    parsley-type="email" placeholder="Enter Weight of One Box"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Thickness</label>
                        <div>
                            <input type="text" class="form-control" name="thickness"
                                    parsley-type="email" placeholder="Enter Thickness"/>
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
                        console.log(result);
                        $.each(result, function (key, value) {
                            $("#product").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });

                    }
                });
            });

        });
    </script>
@endsection
