@extends('backend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/invoice.css')}}">
@endsection

@section('content')

<div class="card" id="invoice">
    {{-- header --}}
    <div class="header1">
        <h6 class="tax-1">Tax Invoice</h6>
        <h6 class="tax-2">Original For Recipient</h6>
    </div>
    {{-- header of logo --}}
    <div class="header-box">
        <div class="first-box">
            <div class="img1">
                <img src="{{asset('assets/images/printers.jpg')}}" width="125px" alt="">
            </div>
            <div class="content1">
                <h4>SIDDHI PRINTERS</h4>
                <p>Gala No.1, Ishwar Nagar,Khair Pada,Virar Phata,
                    Virar(East), Tal.Vasai, Dist:-Palghar
                    Email:siddhi778printers@gmail.com
                    Contact:9323999491/7020982682
<br>
                    GSTIN:27AFYPJ5944D2ZY
                </p>
            </div>
        </div>
        <div class="second-box">
            <div class="invoice-no">
                <h6>Invoice No</h6>
                <h6>
                    SP/064
                </h6>
            </div>
            <div class="invoice-date">
                <h6>Invoice Date</h6>
                <h6>
                    {{\Carbon\Carbon::parse($sale->created_at)->format('d/m/Y')}}
                </h6>
            </div>
            <div class="due-date">
                <h6>Due Date</h6>
                <h6>
                    {{\Carbon\Carbon::parse($sale->date)->format('d/m/Y')}}
                </h6>
            </div>
        </div>
    </div>
    {{-- customer details --}}
    <div class="header-box-1">
        <div class="first-box-1">
            <h6>Bill To</h6>
            <div class="content-1">
                <h4>{{$sale->name}}</h4>
                <p>{{$sale->address}}</p>
                <p>GSTIN:&nbsp;{{$sale->gstno}}</p>
            </div>
        </div>
        <div class="second-box-1">
            <h6>Ship To</h6>
            <div class="content-1">
                <h4>{{$sale->name}}</h4>
                <p>{{$sale->address}}</p>
                <p>GSTIN:&nbsp;{{$sale->gstno}}</p>
            </div>
        </div>
    </div>
    {{-- description --}}

    <div class="description-title">
        <div class="item-1">
            S.No.
        </div>
        <div class="item-2">
            Items
        </div>
        <div class="item-3">
            HSN
        </div>
        <div class="item-4">
            QTY
        </div>
        <div class="item-5">
            Rate
        </div>
        <div class="item-6">
            TAX
        </div>
        <div class="item-7">
            Amount
        </div>
    </div>
    <div class="description-content">
        <div class="item-1">
            @for ($i=1; $i<=count($deco['items']); $i++)
                {{$i}}<br>
            @endfor
        </div>
        <div class="item-2">
            @foreach ($deco['items'] as $item)
                {{$item}}<br>
            @endforeach
        </div>
        <div class="item-3">
            @foreach ($deco['hsn'] as $item)
                {{$item}}<br>
            @endforeach
        </div>
        <div class="item-4">
            @foreach ($deco['quantity'] as $item => $value)
            <div id="cal-quantity-{{$item}}">
                {{$value}}
            </div>
            @endforeach
        </div>
        <div class="item-5">
            @foreach ($deco['rate'] as $item => $value)
            <div id="cal-rate-{{$item}}">
                {{$value}}
            </div>
            @endforeach
        </div>
        <div class="item-6">
            @foreach ($deco['tax'] as $item => $value)
                <div id="cal-tax-{{$item}}">
                    {{$value}}
                </div>
            @endforeach
        </div>
        <div class="item-7">
            @for($i = 0; $i<2; $i++)
            <h6 id="cal-amt-{{$i}}"></h6>
            @endfor
        </div>
    </div>
    <div class="description-bottom">
        <div class="item-1">

        </div>
        <div class="item-2">
            Total Amount
        </div>
        <div class="item-3">

        </div>
        <div class="item-4">
            160
        </div>
        <div class="item-5">

        </div>
        <div class="item-6">
            Rs. 486
        </div>
        <div class="item-7">
            3186
        </div>
    </div>
    <div class="description-bottom-1">
        <div class="item-1">

        </div>
        <div class="item-2">
            Received Amount
        </div>
        <div class="item-3">

        </div>
        <div class="item-4">

        </div>
        <div class="item-5">

        </div>
        <div class="item-6">

        </div>
        <div class="item-7">
            0
        </div>
    </div>
    <div class="description-bottom-2">
        <div class="item-1">

        </div>
        <div class="item-2">
            Balance Amount
        </div>
        <div class="item-3">

        </div>
        <div class="item-4">

        </div>
        <div class="item-5">

        </div>
        <div class="item-6">

        </div>
        <div class="item-7">
            3186
        </div>
    </div>
    <div class="description-tax">
        <div class="item-1">
            S.No.
        </div>
        <div class="item-2">
            Items
        </div>
        <div class="item-3">
            HSN
        </div>
        <div class="item-4">
            QTY
        </div>
        <div class="item-5">
            Rate
        </div>
        <div class="item-6">
            TAX
        </div>
        <div class="item-7">
            Amount
        </div>
    </div>
    <div class="description-tax-1">
        <div class="item-1">
            S.No.
        </div>
        <div class="item-2">
            Items
        </div>
        <div class="item-3">
            HSN
        </div>
        <div class="item-4">
            QTY
        </div>
        <div class="item-5">
            Rate
        </div>
        <div class="item-6">
            TAX
        </div>
        <div class="item-7">
            Amount
        </div>
    </div>

    <div class="amt-word">
        <h6>Invoice Amount (in words)</h6>
        <h6>Invoice Amount (in words)</h6>
    </div>
    <div class="sign">
        <div class="sign-details">
            <div class="sign-name">
                <h6>Bank Details</h6>
            </div>
            <div class="sign-name">
                <h6>Name:</h6>
                <h6>SIDDHI Printers</h6>
            </div>
            <div class="sign-name">
                <h6>IFSC Code:</h6>
                <h6>ABHY0065055</h6>
            </div>
            <div class="sign-name">
                <h6>Account No:</h6>
                <h6>092021100000411</h6>
            </div>
            <div class="sign-name">
                <h6>Bank & Branch:</h6>
                <h6>Abhyudaya Co-operative Bank, VIRAR</h6>
            </div>
        </div>
        <div class="sign-img">
            <img src="{{asset('assets/images/sign.jpeg')}}" width="150px" alt="">
            <h6>Autherised Signature for
                <br> Siddhi Printers</h6>
        </div>

    </div>
    <div class="button">
        <button class="btn btn-success" type="submit" onclick="printDiv()">Print</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function printDiv() {
        var divContents = document.getElementById("invoice").innerHTML;
        var btn = document.querySelector(".button");
        var a = window.open('', '', 'height=2000, width=1000');
        a.document.write('<link rel="stylesheet" href="assets/css/invoice.css">');
        a.document.write(divContents);
            a.document.close();
        a.print();
    }
    calculation();
    function calculation(){
        for(let i =0; i<50; i++){
            var quantity = document.querySelector("#cal-quantity-"+i).innerHTML;
        console.log(quantity);
        var rate = document.querySelector("#cal-rate-"+i).innerHTML;
        console.log(rate);
        var tax = document.querySelector("#cal-tax-"+i).innerHTML;
        console.log(tax);
        var taxD;
        taxD = tax/100;
        console.log(taxD);

        var result;
        var tot1;
        var tot2;

        tot1 = quantity*rate;
        console.log(tot1);

        tot2 = tot1*taxD;
        console.log(tot2);

        result = tot1+tot2;

        console.log(result);

        let amountValue = document.getElementById("cal-amt-"+i);
        amountValue.innerHTML = result;
        }
    }
</script>
@endsection
