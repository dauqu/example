<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class checkoutController extends Controller
{
    public function index()
    {
        //Get all checkout
        $checkout = Checkout::all();
        return response()->json($checkout);
    }

    public function create(Request $request)
    {
        //Create a new checkout
        $checkout = checkout::create($request->all());
        return response()->json($checkout);
    }

    public function show($id)
    {
        //Get a single checkout
        $checkout = Checkout::find($id);
        return response()->json($checkout);
    }

    public function update(Request $request, $id)
    {
        //Update a checkout
        $checkout = Checkout::find($id);
        $checkout->update($request->all());
        return response()->json($checkout);
    }


    public function delete($id)
    {
        //Delete a checkout
        $checkout = Checkout::find($id);
        $checkout->delete();
        return response()->json('auction deleted successfully');
    }
}
