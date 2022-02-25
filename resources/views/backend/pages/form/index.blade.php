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
                    <h4 class="card-title">All Products</h4>
                    <a href="{{route('form.create')}}" class="btn btn-primary" style="margin-left:auto">Add New form</a>
                </div>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Product Category</th>
                            <th>Vendor Name</th>
                            <th>Product Name</th>
                            <th>Size(length X breadth)</th>
                            <th>GSM</th>
                            <th>Sheets</th>
                            <th>Ream For Bundle</th>
                            <th>Bundle</th>
                            <th>Total Price</th>
                            <th>Amount Given</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                       @foreach ($form as $item)
                       <tr>
                           <td>{{$item->id}}</td>
                         <td>{{$item->product->name}}</td>
                        <td>{{$item->vendor->name}}</td> 
                        <td>{{$item->name}}</td>
                        <td>{{$item->size}}</td>
                        <td>{{$item->gsm}}</td>
                        <td>{{$item->sheets}}</td>
                        <td>{{$item->rfbundle}}</td>
                        <td>{{$item->bundle}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->amount_given}}</td>
                        <td>
                            <a href="{{route('form.edit',[$item->id])}}" class="btn btn-secondary">Edit</a>
                            <a href="{{route('form.destroy',[$item->id])}}" class="btn btn-danger">Delete</a>

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

