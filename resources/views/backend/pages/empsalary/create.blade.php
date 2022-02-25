@extends('backend.layouts.master')


@section('content')
<div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Enter New Salery Details</h4>

            <form action="{{route('empsalary.store')}}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Add New Salery Record</h4>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select Employee</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" placeholder="Select employee" name="employee_id">
                                            @foreach ($employee as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach


                                            </select>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number"  id="example-number-input" name="amount">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-number-input" class="col-sm-2 col-form-label" >Description</label>
                                    <div class="col-sm-10">
                                        <div>
                                            <textarea required class="form-control" rows="5" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>









                            </div>
                        </div>
                    </div> <!-- end col -->
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




<!-- end row -->
