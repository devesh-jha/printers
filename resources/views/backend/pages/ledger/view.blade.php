@extends('backend.layouts.master')

@section('css')
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection


@section('content')

<div  class="card"  id="ledger">

{{-- header --}}
    <div class="header1">
        <h6 class="tax-1">LEDGER</h6>
        <h6 class="tax-2">ORIGINAL LEDGER</h6>
    </div>

    {{-- header of logo --}}

    <div class="header-box">
        <div class="first-box">
           
            <div class="content1">
                <h1 class='text-center'>SIDDHI PRINTERS</h1>
                <p class='text-center'>Gala No.1, Ishwar Nagar,Khair Pada,Virar Phata,</br>
                    Virar(East), Tal.Vasai, Dist:-Palghar</br>
                    Email:siddhi778printers@gmail.com
                    Contact:9323999491/7020982682
                  
                </p>
            </div>
        </div>
      
    </div>




</div>





































<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div style="display: flex; justify-content:center; allign-item:center; margine-bottom:20px; padding:10px">
                    <h4 class="card-title">{{$vendorName}}</h4>
                    <!-- <a href="{{route('ledger.create')}}" class="btn btn-primary" style="margin-left:auto">Add New Expense</a> -->
                </div>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                           
                            <th>Date</th>
                            <th>Praticulars</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Balance</th>
                        </tr>
                    </thead>


                    <tbody>
                       @foreach ($data as $item)
                       <tr>
                        <td>{{$item->date}}</td>
                        <td>{{$item->particulars}}</td>
                        <td>{{$item->credit}}</td>
                        <td>{{$item->debit}}</td>
                        <td>{{$item->balance}}</td>
                    
                       
                        <!-- <td class="d-flex">
                            <a href="{{route('ledger.edit',[$item->id])}}" class="btn btn-secondary">Edit</a>
                           
<form action="{{route('expense.destroy',[$item->id])}}" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button> -->
</form>
                        </td>

                    </tr>
                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="button" id="printbtn">
    <button class="btn btn-success" type="submit" id="abc"  onclick="printDiv('data')">Print</button>

</div>
@endsection

@section('scripts')
<script>
    function printDiv(invoice) {
        var divContents = document.getElementById(invoice).innerHTML;
        var printBtn = document.querySelector("#printbtn");
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = divContents;
        printBtn.style.display = "none";
        $('#abc').hide();
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>
@endsection