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
            <!-- <div class="img1">
                <img src="{{asset('assets/images/printers.jpg')}}" width="120px" height="120px" alt="">
            </div> -->
            <div style="font-weight:bold" class="content1">
                <h1 >MS Enterprise</h1>
                <p>Gala No.2, Ishwar Nagar,Khair Pada,Nr. Bus Stop,
                    Virar Phata,Virar(E),Tal. Vasai, Dist. Palghar
                    Email:ranjeethja2111@gmail.com
                    Contact:9323999491/7020982682
                    <br>
                    GSTIN:27BSDPJ4781M1Z8
                </p>
            </div>
        </div>
        <div class="second-box">
            <div class="invoice-no">
                <h6>Invoice No</h6>
                <h6>
                    SP/{{$sale->invoiceid}}
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
        <img src="{{asset('assets/images/ranjit.jpeg')}}" width="150" alt="">
        <h6>Autherised Signature for
            <br> Siddhi Printers</h6>
    </div>
</div>
<div class="button" id="printbtn">
    <button class="btn btn-success" type="submit" id="abc"  onclick="printDiv('invoice')">Print</button>
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
        $('#abc').hide();
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
            result = (result.toFixed(2));
            taxbytwo = tax / 2;
            rateTax.innerHTML = taxbytwo + ' %';

            var br = document.createElement("br");
            rateTax.appendChild(br);
            rateTaxTwo.innerHTML = taxbytwo + ' %';
            amtTax.innerHTML = ((tot2 / 2).toFixed(2));
            amtTax1.innerHTML = ((tot2 / 2).toFixed(2));

            var amountValue = document.getElementById("cal-amt-" + i);
            amountValue.innerHTML = result;
            var amountValue1 = document.getElementById("cal-amt-1-" + i);
            amountValue1.innerHTML = tot1;


            totQuant = +totQuant + +quantity;
            var totqty = document.querySelector("#totqty");
            totqty.innerHTML = totQuant;

            totTax = totTax + tot2;
            var tottax = document.querySelector("#tottax")
            tottax.innerHTML = (totTax.toFixed(2));

            totRes = parseFloat(totRes) + parseFloat(result);
            totRes=(totRes.toFixed(2));
            
            var totres = document.querySelector("#totres")
            totres.innerHTML = totRes;

            taxableVal.innerHTML = (tot2.toFixed(2));
            var finaltaxTot =
                finalAmt = totRes - advpay;
            var finalamt = document.querySelector("#finalamt");
            finalamt.innerHTML = (finalAmt.toFixed(2));
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
    


    function Rs(amount) {
    var words = new Array();
    words[0] = 'Zero';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    var op;
    amount = amount.toString();
    var atemp = amount.split('.');
    var number = atemp[0].split(',').join('');
    var n_length = number.length;
    var words_string = '';
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = '';
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + ' ';
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += 'Crores ';
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += 'Lakhs ';
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += 'Thousand ';
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += 'Hundred and ';
            } else if (i == 6 && value != 0) {
                words_string += 'Hundred ';
            }
        }
        words_string = words_string.split(' ').join(' ');
    }
    return words_string;
}

function RsPaise(n) {
    nums = n.toString().split('.')
    var whole = Rs(nums[0])
    if (nums[1] == null) nums[1] = 0;
    if (nums[1].length == 1) nums[1] = nums[1] + '0';
    if (nums[1].length > 2) {
        nums[1] = nums[1].substring(2, length - 1)
    }
    if (nums.length == 2) {
        if (nums[0] <= 9) {
            nums[0] = nums[0] * 10
        } else {
            nums[0] = nums[0]
        };
        var fraction = Rs(nums[1])
        if (whole == '' && fraction == '') {
            op = 'Zero only';
        }
        if (whole == '' && fraction != '') {
            op = 'paise ' + fraction + ' only';
        }
        if (whole != '' && fraction == '') {
            op =   whole +' Rupees  only';
        }
        if (whole != '' && fraction != '') {
            op =   whole +' Rupees and '+ fraction +'Paise Only';
        }
        console.log(op,"op");
        // amt = document.getElementById('amt').value;
        // if (amt > 999999999.99) {
        //     op = 'Oops!!! The amount is too big to convert';
        // }
        // if (isNaN(amt) == true) {
        //     op = 'Error : Amount in number appears to be incorrect. Please Check.';
        // }
        // console.log(op,"op");
        return op;
        
    }
}



   

    NumToWord();

    function NumToWord() {
        var adpayval = document.querySelector('#totres');
        document.querySelector("#words").innerText = RsPaise(adpayval.innerText);
    }

</script>
@endsection
