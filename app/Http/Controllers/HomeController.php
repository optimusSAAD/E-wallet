<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function update()
    {
        return view('frontend.profile.edit');
    }

    public function profile(Request $request)
    {
        $this->validate($request,[
           'name'=> 'required',
           'email'=> 'required|email',
           'pic'=> 'required|image',
        ]);
        $pic = $request->file('pic');
        $user = User::findOrFail(Auth::id());
        $new_name = rand() . '.' . $pic->getClientOriginalExtension();
        $pic->move(public_path('profile'), $new_name);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pic = $new_name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->review = $request->review;
        $user->save();
        return redirect()->back();
    }
}
