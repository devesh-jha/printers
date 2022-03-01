@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')
<style>
    .card {
        padding: 20px;
    }

    .header1 {
        display: flex;
        /* justify-content: center; */
        align-items: center
    }

    .header1 .tax-1 {
        margin: 0px 10px 10px 0px;
        font-weight: 800;
    }

    .header1 .tax-2 {
        margin: 0px 10px 10px 0px;
        border: 1px solid black;
        padding: 5px;
        color: grey;
        font-weight: 600;
    }

    .header-box {
        display: flex;
        align-items: center;
    }

    .header-box .first-box {
        width: 50%;
        height: 150px;
        display: flex;
        justify-content: center;
        border: 1px solid black;
        padding: 5px;
    }

    .header-box .first-box .img1 {
        margin-right: 10px;
    }

    .header-box .second-box {
        border-right: 1px solid black;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        width: 50%;
        height: 150px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .header-box-1{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .header-box-1 .first-box-1{
        border-right: 1px solid black;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        padding: 10px;
        width: 50%;
    }
    .header-box-1 .second-box-1{
        width: 50%;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        padding: 10px
    }

    .description-title{
        display: flex;
        align-items: center;
        width: 100%;
        background-color: rgb(223, 223, 223);
    }

    .description-title .item-1{
        padding: 5px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-title .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-title .item-3{
        padding: 5px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-title .item-4{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-title .item-5{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-title .item-6{
        padding: 5px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-title .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .description-content{
        display: flex;
        width: 100%;
        height: 500px;
    }

    .description-content .item-1{
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-content .item-2{
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-content .item-3{
        width: 195px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-content .item-4{
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-content .item-5{
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-content .item-6{
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-content .item-7{
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .description-bottom{
        display: flex;
        align-items: center;
        width: 100%;
        background-color: rgb(223, 223, 223);
    }

    .description-bottom .item-1{
        padding: 16px 0px 16px 0px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom .item-3{
        padding: 16px 0px 16px 0px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom .item-4{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom .item-5{
        padding: 16px 0px 16px 0px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom .item-6{
        padding: 5px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-bottom .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .description-bottom-1{
        display: flex;
        align-items: center;
        width: 100%;
    }

    .description-bottom-1 .item-1{
        padding: 16px 0px 16px 0px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-1 .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-1 .item-3{
        padding: 16px 0px 16px 0px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-1 .item-4{
        padding: 16px 0px 16px 0px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-1 .item-5{
        padding: 16px 0px 16px 0px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-1 .item-6{
        padding: 16px 0px 16px 0px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-bottom-1 .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .description-bottom-2{
        display: flex;
        align-items: center;
        width: 100%;
    }

    .description-bottom-2 .item-1{
        padding: 16px 0px 16px 0px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-2 .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-2 .item-3{
        padding: 16px 0px 16px 0px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-2 .item-4{
        padding: 16px 0px 16px 0px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-2 .item-5{
        padding: 16px 0px 16px 0px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-bottom-2 .item-6{
        padding: 16px 0px 16px 0px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-bottom-2 .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .description-tax{
        margin-top: 10px;
        display: flex;
        align-items: center;
        width: 100%;
        background-color: rgb(223, 223, 223);
    }

    .description-tax .item-1{
        padding: 5px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }
    .description-tax .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }
    .description-tax .item-3{
        padding: 5px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }
    .description-tax .item-4{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }
    .description-tax .item-5{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax .item-6{
        padding: 5px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
        text-align:center;
    }
    .description-tax .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        border-top: 1px solid black;
        text-align:center;
    }

    .description-tax-1{
        display: flex;
        align-items: center;
        width: 100%;
    }

    .description-tax-1 .item-1{
        padding: 5px;
        width: 50px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax-1 .item-2{
        font-weight: 900;
        padding: 5px;
        width: 400px;
        padding-left: 10px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax-1 .item-3{
        padding: 5px;
        width: 196px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax-1 .item-4{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax-1 .item-5{
        padding: 5px;
        width: 150px;
        text-align:center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }
    .description-tax-1 .item-6{
        padding: 5px;
        width: 150px;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }
    .description-tax-1 .item-7{
        padding: 5px;
        width: 197px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align:center;
    }

    .amt-word{
        margin-top: 10px;
        padding: 10px;
        border: 1px solid black;
    }

    .sign{
        border: 1px solid black;
        border-top:none;
        display: flex;
        align-items: center;
    }
    .sign-details{
        width: 100%;
    }
    .sign-name{
        display: flex;
        width:800px;
        border-right: 1px solid black;
    }
    .sign-name h6{
        padding: 0px 10px 0px 10px;
    }
    .sign-img{
        width: 250px;
    }
</style>
<div class="card">
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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit odit excepturi,
                    itaque, dolores neque natus voluptatem aperiam asperiores harum a sint molestiae, reprehenderit
                    iusto voluptate similique optio incidunt quaerat.</p>
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
                    21/05/2021
                </h6>
            </div>
            <div class="due-date">
                <h6>Due Date</h6>
                <h6>
                    21/05/2021
                </h6>
            </div>
        </div>
    </div>
    {{-- customer details --}}
    <div class="header-box-1">
        <div class="first-box-1">
            <h6>Bill To</h6>
            <div class="content-1">
                <h2>SIDDHI PRINTERS</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit odit excepturi,
                    itaque,
                    dolores neque natus voluptatem aperiam asperiores harum a sint molestiae, reprehenderit iusto
                    voluptate
                    similique optio incidunt quaerat.</p>
            </div>
        </div>
        <div class="second-box-1">
            <h6>Bill To</h6>
            <div class="content-1">
                <h2>SIDDHI PRINTERS</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit odit excepturi,
                    itaque,
                    dolores neque natus voluptatem aperiam asperiores harum a sint molestiae, reprehenderit iusto
                    voluptate
                    similique optio incidunt quaerat.</p>
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
                <h6>SIDDHI Printers:</h6>
            </div>
            <div class="sign-name">
                <h6>IFSC Code:</h6>
                <h6>SIDDHI Printers:</h6>
            </div>
            <div class="sign-name">
                <h6>Account No:</h6>
                <h6>SIDDHI Printers:</h6>
            </div>
            <div class="sign-name">
                <h6>Bank & Branch:</h6>
                <h6>SIDDHI Printers:</h6>
            </div>
        </div>
        <div class="sign-img">
            <img src="{{asset('assets/images/sign.jpeg')}}" width="150px" alt="">
            <h6>Autherised Signature</h6>
        </div>

    </div>


</div>
@endsection

@section('scripts')

@endsection
