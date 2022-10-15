<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale=Sale::all();
        return view('backend.pages.sale.index',compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $myarr['items'] = $request->items;
        $myarr['hsn'] = $request->hsn;
        $myarr['quantity'] = $request->quantity;
        $myarr['rate'] = $request->rate;
        $myarr['tax'] = $request->tax;

        $data = json_encode($myarr);


        $sale = new Sale();
        $sale->invoiceid = $request->invoiceid;
        $sale->name = $request->name;
        $sale->contact = $request->contact;
        $sale->address = $request->address;
        $sale->gstno = $request->gstno;
        $sale->advancepay = $request->advancepay;
        $sale->date = $request->date;


        $sale->description = $data;

        $sale->save();


        // $sale = Sale::create([
        //     'name' => $request->name,
        //     'contact' => $request->contact,
        //     'address' => $request->address,
        //     'gstno' => $request->gstno,
        //     'advancepay' => $request->advancepay,
        //     'date' => $request->date,
        //     'description' => $data1,
        // ]);
       return redirect()->route('sale.index')->with('Success',"New Record added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        return view('backend.pages.sale.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {

        $myarr['items'] = $request->items;
        $myarr['hsn'] = $request->hsn;
        $myarr['quantity'] = $request->quantity;
        $myarr['rate'] = $request->rate;
        $myarr['tax'] = $request->tax;

        $data = json_encode($myarr);

        $sale->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
            'gstno' => $request->gstno,
            'advancepay' => $request->advancepay,
            'date' => $request->date,
            'description' => $data,
            'invoiceid' => $request->invoiceid,
        ]);
        return redirect()->route('sale.index')->with('success',"Product added Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sale.index')->with('success','Deleted Successfully');
    }

    public function viewInvoice(Sale $sale){
        $allData = Sale::where('id',"=",$sale->id)->get();
        foreach($allData as $item){
            $desc = $item->description;
        }
        $deco = json_decode($desc, true);
        return view('backend.pages.sale.invoice',compact(['sale','deco']));
    }

}
