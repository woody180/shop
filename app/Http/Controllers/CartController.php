<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        
        $cartItems = $user->cart()->with('product')->get();
        
        return view('cart', [
            'cartItems' => $cartItems
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $body = $request->input();
        $body['user_id'] = 1;
        unset($body['_token']);
        unset($body['_method']);
        
        if (Request()->ajax()) {
            Cart::updateOrInsert($body);
            return response()->json(['success' => 'Items inserted successfully!']);
        }
    }
    
    
    public function checkout(Request $request, $id)
    {
        $item = Cart::find($id);
        $item->checkedout = 1;
        $item->save();
        
        $request->session()->flash('message', 'Item has been checked out successfully.');
        
        return  back()->withInput(['success' => 'Checked out']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
