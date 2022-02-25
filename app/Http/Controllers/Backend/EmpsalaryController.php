<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Empsalary;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmpsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $empsalary=Empsalary::all();
       return view('backend.pages.empsalary.index', compact('empsalary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        return view('backend.pages.empsalary.create', compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empsalary=Empsalary::create($request->all());
        return redirect()->route('empsalary.index')->with('success',"Salary Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empsalary  $empsalary
     * @return \Illuminate\Http\Response
     */
    public function show(Empsalary $empsalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empsalary  $empsalary
     * @return \Illuminate\Http\Response
     */
    public function edit(Empsalary $empsalary)
    {
        return view('backend.pages.empsalary.edit',compact('empsalary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empsalary  $empsalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empsalary $empsalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empsalary  $empsalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empsalary $empsalary)
    {
        //
    }
}
