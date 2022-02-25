@extends('backend.layouts.master')

@section('css')
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div style="display: flex; justify-content:center; allign-item:center; margine-bottom:20px; padding:10px">
                    <h4 class="card-title">Employee Salaries</h4>
                    <a href="{{route('empsalary.create')}}" class="btn btn-primary" style="margin-left:auto">Add New empsalary Category</a>
                </div>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Employee Name</th>
                            <th>Month</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                       @foreach ($empsalary as $item)
                       <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->employee->name}}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format(' F ')}}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('d F Y')}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->description}}</td>

                        <td>
                            <a href="{{route('empsalary.destroy',[$item->id])}}" class="btn btn-danger">Delete</a>

                        </td>

                    </tr>
                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('scripts')
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="assets/js/pages/datatables.init.js"></script>
@endsection

