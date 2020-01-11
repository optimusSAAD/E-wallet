<?php

namespace App\Http\Controllers;

use App\Afund;
use App\Fund;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $funds = Fund::paginate(10);
        return view('backend.funds.index',compact('funds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $funds = Fund::all();
        return view('backend.funds.create',compact('funds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'description',
            'available'=>'required',
            'buy'=>'required',
            'receive',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('funds'), $new_name);
        $form_data = array(
            'title'=>$request->title,
            'image'=>$new_name,
            'description'=>$request->description,
            'available'=>$request->available,
            'buy'=>$request->buy,
            'buyrate'=>$request->buyrate,
            'sellrate'=>$request->sellrate,
            'receive'=>implode(',', (array)($request->receive)),
        );

        Fund::create($form_data);

        return redirect('/admin/fund');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fund  $fund
     * @return Response
     */
    public function show(Fund $fund)
    {
        $funds = Fund::paginate(10);
        return view('frontend.exchangePage.exchange',compact('fund','funds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fund  $fund
     * @return Response
     */
    public function edit(Fund $fund)
    {
        $funds = Fund::all();
        return view('backend.funds.edit', compact('fund','funds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fund  $fund
     * @return Response
     */
    public function update(Request $request, Fund $fund)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('funds');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'image'         =>  'image|max:2048',
                'buy'     =>  'required',
                'receive',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('funds'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'buy'     =>  'required',
                'receive',
            ]);
        }

        $form_data = array(
            'title'=>$request->title,
            'image'=>$image_name,
            'description'=>$request->description,
            'buy'=>$request->buy,
            'receive'=>implode(',',(array)($request->receive)),
        );


        $fund->update($form_data);

        return redirect('/admin/fund');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Fund $fund
     * @return Response
     * @throws \Exception
     */
    public function destroy(Fund $fund)
    {
        $fund->delete();
        return redirect('/admin/fund');
    }
}
