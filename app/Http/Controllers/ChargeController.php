<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Fund;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $charges = Charge::paginate(10);
      return view('backend.charges.index',compact('charges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $funds = Fund::all();
        return view('backend.charges.create', compact('funds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $charge = new Charge();
        $fund =$request->funds_id;
        $charge->amount_to = $request->amount_to;
        $charge->amount_from = $request->amount_from;
        $charge->sending_rate = $request->sending_rate;
        $charge->discount_rate = $request->discount_rate;
        $charge->status = $request->has('status');
        $charge->fund()->associate($fund)->save();
        $charge->save();

        return redirect('/admin/charge')->with('success', 'Charge Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Charge $charge
     * @return void
     */
    public function show(Charge $charge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Charge $charge)
    {
        return view('backend.charges.edit', compact('charge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Charge $charge)
    {
        $request->validate([

            'amount_to'=>'required',
            'amount_from'=>'required',
            'sending_rate'=>'required',
            'discount_rate'=>'required',
            'status',
        ]);
        $charge->status = $request->has('status');

        $charge->update($request->all());

        return redirect('/admin/charge')->with('success', 'Fund updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Charge $charge
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Charge $charge)
    {
        $charge->delete();
        return redirect('/admin/charge')->with('success', 'Fund deleted!');
    }
}
