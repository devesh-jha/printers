@extends('backend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/invoice.css')}}">
@endsection

@section('content')

<div class="card" id="invoice">
    {{-- header --}}
    <div class="header1">
        <h6 class="tax-1">TAX INVOICE</h6>
        <h6 class="tax-2">ORIGINAL FOR RECIPIENT</h6>
    </div>
    {{-- header of logo --}}
    <div class="header-box">
        <div class="first-box">
            <div class="img1">
                <img src="{{asset('assets/images/printers.jpg')}}" width="120px" height="120px" alt="">
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
                    SP/{{$sale->id}}
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
        <div class="item-6" id="tottax-box">
            TAX
        </div>
        <div class="item-7" id="last-box-1">
            Amount
        </div>
    </div>
    <div class="description-content">
        <div class="item-1">
            @for ($i=1; $i<=count($deco['items']); $i++) {{$i}}<br>
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
        <div class="item-6" id="tax-box-rem">
            @foreach ($deco['tax'] as $item => $value)
            <div id="cal-tax-{{$item}}">
                {{$value}}
            </div>
            @endforeach
        </div>
        <div class="item-7" id="last-box-2">
            @for($i = 0; $i<50; $i++) <div id="cal-amt-{{$i}}">
        </div>
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
    <div class="item-4" id="totqty">

    </div>
    <div class="item-5">

    </div>
    <div class="item-6" id="tottax">

    </div>
    <div class="item-7 last-box-3" id="totres" >

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
    <div class="item-6" id="tax-box-2">

    </div>
    <div class="item-7 last-box-4" id="advancepay">
        {{$sale->advancepay}}
    </div>
</div>
<div class="description-bottom-1">
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
    <div class="item-6" id="tax-box-1">

    </div>
    <div class="item-7 last-box-5" id="finalamt">

    </div>
</div>
<div class="description-tax">
    <div class="item-1">
        HSN/SAC
    </div>
    <div class="item-2">
        Taxable Value
    </div>
    <div class="item-3">
        <div class="head-tax">CGST</div>
        <div class="head-tax-1">
            <div class="rate-tax">Rate</div>
            <div class="amt-tax">Amount</div>
        </div>
    </div>
    <div class="item-4">
        <div class="head-tax">SGST</div>
        <div class="head-tax-1">
            <div class="rate-tax">Rate</div>
            <div class="amt-tax">Amount</div>
        </div>
    </div>
    <div class="item-5">
        Total Tax Amount
    </div>
</div>
<div class="description-tax-1">
    <div class="item-1">
        @foreach ($deco['hsn'] as $item)
        {{$item}}<br>
        @endforeach
    </div>
    <div class="item-2">
        @for($i = 0; $i<30; $i++) <div id="cal-amt-1-{{$i}}">
    </div>
    @endfor
</div>
<div class="item-3">
    <div class="head-tax-2">
        @for($i = 0; $i<20; $i++) <div id="rate-tax-1-{{$i}}">
    </div>
    @endfor
</div>
<div class="head-tax-2">
    @for($i = 0; $i<20; $i++) <div id="amt-tax-1-{{$i}}">
</div>
@endfor
</div>
</div>
<div class="item-4">
    <div class="head-tax-2">
        @for($i = 0; $i<50; $i++) <div id="rate-tax-2-{{$i}}">
    </div>
    @endfor
</div>
<div class="head-tax-2">
    @for($i = 0; $i<50; $i++) <div id="amt-tax-2-{{$i}}">
</div>
@endfor
</div>
</div>
<div class="item-5">
    @for($i = 0; $i<50; $i++) <div id="taxable-val-{{$i}}">
</div>
@endfor
</div>
</div>

<div class="amt-word">
    <h6>Invoice Amount (in words)</h6>
    <h6 id="words"></h6>
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
        <img src="{{asset('assets/images/sign.jpeg')}}" width="150" alt="">
        <h6>Autherised Signature for
            <br> Siddhi Printers</h6>
    </div>
</div>
<div class="button" id="printbtn">
    <button class="btn btn-success" type="submit" onclick="printDiv('invoice')">Print</button>
</div>
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
        window.print();
        document.body.innerHTML = originalContents;
    }
    calculation();

    function calculation() {
        var totQuant = 0;
        var totTax = 0;
        var totRes = 0;
        var advpay = document.querySelector("#advancepay").innerHTML;
        var finalAmt = 0;
        for (let i = 0; i < 50; i++) {
            var quantity = document.querySelector("#cal-quantity-" + i).innerHTML;
            var rate = document.querySelector("#cal-rate-" + i).innerHTML;
            var tax = document.querySelector("#cal-tax-" + i).innerHTML;
            var taxableVal = document.querySelector("#taxable-val-" + i);
            var rateTax = document.querySelector("#rate-tax-1-" + i);
            var rateTaxTwo = document.querySelector("#rate-tax-2-" + i);
            var amtTax = document.querySelector("#amt-tax-1-" + i);
            var amtTax1 = document.querySelector("#amt-tax-2-" + i);
            var taxD;
            taxD = tax / 100;

            var result;
            var tot1;
            var tot2;
            var taxbytwo;
            tot1 = quantity * rate;

            tot2 = tot1 * taxD;

            result = tot1 + tot2;

            taxbytwo = tax / 2;
            rateTax.innerHTML = taxbytwo + ' %';

            var br = document.createElement("br");
            rateTax.appendChild(br);
            rateTaxTwo.innerHTML = taxbytwo + ' %';
            amtTax.innerHTML = tot2 / 2;
            amtTax1.innerHTML = tot2 / 2;

            var amountValue = document.getElementById("cal-amt-" + i);
            amountValue.innerHTML = result;
            var amountValue1 = document.getElementById("cal-amt-1-" + i);
            amountValue1.innerHTML = tot1;


            totQuant = +totQuant + +quantity;
            var totqty = document.querySelector("#totqty");
            totqty.innerHTML = totQuant;

            totTax = totTax + tot2;
            var tottax = document.querySelector("#tottax")
            tottax.innerHTML = totTax;

            totRes = totRes + result;
            var totres = document.querySelector("#totres")
            totres.innerHTML = totRes;

            taxableVal.innerHTML = tot2;
            var finaltaxTot =
                finalAmt = totRes - advpay;
            var finalamt = document.querySelector("#finalamt");
            finalamt.innerHTML = finalAmt;
            console.log(totRes);
            console.log(finalAmt);
            console.log(totTax);
            if(totTax == "0"){
                document.querySelector(".description-tax").style.display = "none";
                document.querySelector(".description-tax-1").style.display = "none";
                document.querySelector("#tottax").style.display = "none";
                document.querySelector("#tottax-box").style.display = "none";
                document.querySelector("#tax-box-rem").style.display = "none";
                document.querySelector("#tax-box-1").style.display = "none";
                document.querySelector("#tax-box-2").style.display = "none";

                document.querySelector("#last-box-1").style.width = "30%";
                document.querySelector("#last-box-2").style.width = "30%";
                document.querySelector(".last-box-3").style.width = "30%";
                document.querySelector(".last-box-4").style.width = "30%";
                document.querySelector(".last-box-5").style.width = "30%";




            }
        }
    }

</script>
<script>
    var a = ['', 'One ', 'Two ', 'Three ', 'Four ', 'Five ', 'Six ', 'Seven ', 'Eight ', 'Nine ', 'Ten ', 'Eleven ',
        'Twelve ', 'Thirteen ', 'Fourteen ', 'Fifteen ', 'Sixteen ', 'Seventeen ', 'Eighteen ', 'Nineteen '
    ];
    var b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

    function inWords(num) {
        if ((num = num.toString()).length > 9) return 'overflow';
        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
        if (!n) return;
        var str = '';
        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) +
            'only ' : '';
        return str;
    }

    NumToWord();

    function NumToWord() {
        var adpayval = document.querySelector('#totres');
        document.querySelector("#words").innerText = inWords(adpayval.innerText);
    }

</script>
@endsection
