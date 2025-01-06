<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cart::where('user_id', auth()->user()->id)->get();
        $jasa = Pelayanan::where('id', $data[0]->service_id)->get();
        return view('pembayaran', compact('data', 'jasa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::create([
            'user_id' => $request->user_id,
            'service_id' => $request->service_id,
            'biaya_admin' => 4000,
            'biaya_pelayanan' => 5000
        ]);

        return redirect()->route('payment');
    }

    public function order(Request $request)
    {
        $request->validate([
            'method' => 'required',
        ]);
        $generate = 'VA: ' . rand(1000000000, 9999999999);

        if ($request->method == 'bank') {
            return redirect()->route('payment')->with('success', 'Pembayaran berhasil dilakukan ' . $generate);
        } elseif ($request->method == 'wallet') {
            return redirect()->route('payment')->with('success', 'Pembayaran berhasil dilakukan ' . $generate);
        } elseif ($request->method == 'paypal') {
            return redirect()->route('payment')->with('success', 'Pembayaran berhasil dilakukan ' . $generate);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
