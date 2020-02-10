<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Fund;
use App\Status;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $statuses=Status::all();
        $fund=Fund::all();
        $orders=Order::all();
        return view('backend.order.index',compact('orders','fund','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $statuses=Status::all();
        $user=User::all();
        return view('frontend.submitPage.multi',compact('user','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id=auth()->user()->id;
        $order->user_send_fund_id = $request->user_send_fund_id;
        $order->user_receive_fund_id = $request->user_receive_fund_id;
        $order->user_send_fund_amount = $request->user_send_fund_amount;
        $order->user_receive_fund_amount = $request->user_receive_fund_amount;
        $order->user_send_fund_account = $request->user_send_fund_account;
        $order->user_receive_fund_account = $request->user_receive_fund_account;
        $order->user_total_pay = $request->user_total_pay;
        $order->user_transaction_id = $request->user_transaction_id;
        $order->user_contact = $request->user_contact;
        $order->note = $request->note;
        $order->status_id =$request->status_id;
        $order->save();

        return redirect('/')->with('Successfully Ordered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return Response
     */
    public function update(Request $request, Order $order)
    {
        $order->status_id=$request->status_id;
        $order->update($request->all());
        return redirect('/admin/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        //
    }


}
