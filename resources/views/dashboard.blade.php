@extends('backend.layouts.master')

@section('content')

{{$total}}


<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p class="font-size-16">Total Expenditure</p>

                        <h3 class="font-size-50">{{$total}}</h3>
                        <div style="margin-top: 20px">
                            <a href="{{route('expense.index')}}">
                                <button type="button"
                                    class="btn btn-danger waves-effect waves-light">View Expences Table
                                    </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p class="font-size-16">Total Income</p>

                        <h3 class="font-size-50">{{$totalincome}}</h3>
                        <div style="margin-top: 20px">
                            <a href="{{route('income.index')}}">
                                <button type="button"
                                    class="btn btn-danger waves-effect waves-light">View Income
                                    Table</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">


                        <h3 class="font-size-50">Invoice</h3>
                        <div style="margin-top: 20px">
                            <a href="{{route('sale.index')}}">
                                <button type="button"
                                    class="btn btn-danger waves-effect waves-light">Invoice
                                    Table</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">

                        <h3 class="font-size-50">Employee Salery</h3>
                        <div style="margin-top: 20px">
                            <a href="{{route('empsalary.index')}}">
                                <button type="button"
                                    class="btn btn-danger waves-effect waves-light">View Salary
                                    Table</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
