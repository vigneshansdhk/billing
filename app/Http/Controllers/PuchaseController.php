<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puchase;
use App\Supplier;

class PuchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puchases  = Puchase::all();
        $data       = [ 'puchases' => $puchases ];
        return view('puchase.list')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers  = Supplier::all();
        $data       = [ 'suppliers' => $suppliers ];
        return view('puchase.create')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $puchase                            = new Puchase;
        $puchase->invoice_serial_number     = $request->invoice_serial_number;
        $puchase->supplier_id               = $request->supplier_id;
        $puchase->qty_metric                = $request->supplier_id;
        $puchase->qty_bags                  = $request->qty_bags;
        $puchase->igst_percentage           = $request->igst;
        $puchase->igst_amount               = $request->igst_amount;
        $puchase->invoice_date              = $request->invoice_date;
        $puchase->hsn_code                  = $request->hsn_code;
        $puchase->basic_rate                = $request->basic_rate;
        $puchase->discount                  = $request->discount;
        $puchase->tax_value                 = $request->tax_value;
        $puchase->total_invoice_value       = $request->total_invoice_value;
        if ($puchase->save()) {
            flash('Puchase created successfully','alert-success');
            return back();
        } else {
            flash('Puchase created successfully','alert-danger');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puchase  $puchase
     * @return \Illuminate\Http\Response
     */
    public function show(Puchase $puchase)
    {
        $suppliers  = Supplier::all();
        $data   =   [ 'puchase' => $puchase , 'suppliers' => $suppliers];
        return view('puchase.edit')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puchase  $puchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Puchase $puchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puchase  $puchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puchase $puchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puchase  $puchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puchase $puchase)
    {
        //
    }
}
