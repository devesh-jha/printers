@extends('backend.layouts.master')


@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New product Details</h4>

            <form action="{{route('product.store')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip01" class="form-label">product Category</label>
                            <input type="text" class="form-control" id="validationTooltip01"
                                placeholder="Product Category" name="name" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <label for="validationTooltip01" class="form-label">Select Vendor</label>
                            <select type="text" class="form-control" id="validationTooltip01"
                                placeholder="Select Vendor" name="vendor_id" required>
                                @foreach ($vendor as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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
