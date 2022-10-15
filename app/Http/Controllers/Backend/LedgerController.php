<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ledger;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor= Vendor::all();
        return view('backend.pages.ledger.index',compact('vendor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor= Vendor::all();

        return view('backend.pages.ledger.create', compact(['vendor']));
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $lastData = Ledger::where('vendor_id','=',$request->vendor_id)->get()->last();
       
       Log::info($lastData);
       if (empty($lastData)) {
        $balance=$request->credit-$request->debit;
        $ledger = Ledger::create([
            'date' => $request->date,
            'vendor_id' => $request->vendor_id,
            'particulars' => $request->particulars,
            'credit' => $request->credit,
            'debit' => $request->debit,
            'balance' => $balance,
        ]);
        return redirect()->route('ledger.index')->with('Success',"New Record added Successfully");    


       }
        $balance = $lastData->balance;

        
            $value = $request->credit - $request->debit;
            $balance = $balance + $value;

        $ledger = Ledger::create([
            'date' => $request->date,
            'vendor_id' => $request->vendor_id,
            'particulars' => $request->particulars,
            'credit' => $request->credit,
            'debit' => $request->debit,
            'balance' => $balance,
        ]);
        return redirect()->route('ledger.index')->with('Success',"New Record added Successfully");    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    function show(Ledger $ledger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
    function edit(Ledger $ledger)
    {
        return view('backend.pages.ledger.edit',compact('ledger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
  function update(Request $request, Ledger $ledger)
    {
        $income->update($request->all());
        return redirect()->route('income.index')->with('success',"Amount added Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ledger  $ledger
     * @return \Illuminate\Http\Response
     */
     function destroy(Ledger $ledger)
    {
        //
    }

    public function view($id)
    {
        $data= Ledger::where('vendor_id','=',$id)->get();
        $vendor = Vendor::where('id', '=', $id)->first();
        $vendorName = $vendor->name;
        return view('backend.pages.ledger.view', compact(['data','vendorName']));
    }

}