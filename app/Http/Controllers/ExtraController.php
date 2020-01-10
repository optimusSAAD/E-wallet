<?php

namespace App\Http\Controllers;

use App\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::all();
        return view('backend.themeLogo.index',compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.themeLogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'frontSlider'=>'required',
            'aboutUsPage'=>'required',
            'image'=>'required',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'frontSlider'=>$request->frontSlider,
            'aboutUsPage'=>$request->aboutUsPage,
            'image'=>$new_name
        );

        Extra::create($form_data);
        return redirect('/admin/extra');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        return view('backend.themeLogo.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extra $extra)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'frontSlider'    =>  'required',
                'aboutUsPage'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'frontSlider'    =>  'required',
                'aboutUsPage'     =>  'required'
            ]);
        }

        $form_data = array(
            'frontSlider'       =>   $request->frontSlider,
            'aboutUsPage'        =>   $request->aboutUsPage,
            'image'            =>   $image_name
        );


        $extra->update($form_data);

        return redirect('/admin/extra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Extra $extra
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Extra $extra)
    {

        $extra->delete();
        return redirect('/admin/extra');
    }
}
