@extends('backend.layouts.master')


@section('content')
<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New product Details</h4>

            <form action="{{route('product.update',[$product->id])}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip01" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="validationTooltip01"
                                placeholder="First name" name="name" value="{{$product->name}}" required>
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
