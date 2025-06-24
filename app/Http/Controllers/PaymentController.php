<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_list()
    {
        $payments = Payment::all();
        return view('payment.payment', compact('payments'));
    }
    public function index()
    {
        return view('payment.add_payment_view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|digits_between:13,16',
            'expire_date' => 'required',
            'ccv' => 'required|digits:3',
        ]);

        // dd($request->all());
        Payment::create([
            'card_name' => $request->card_name,
            'card_number' => $request->card_number,
            'expire_date' => $request->expire_date,
            'ccv' => $request->ccv,
        ]);
        return redirect()->route('Payment.index');
    }
    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('payment.update_payment_view', compact('payment'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|digits_between:13,16',
            'expire_date' => 'required',
            'ccv' => 'required|digits:3',
        ]);

        //dd($request->all());
        $payment = Payment::find($id);
        $payment ->update($request->all());

        return redirect()->route('Payment.edit',$id);
    }
    public function delete($id)
    {

        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('Payment.payment_list');
    }
}
