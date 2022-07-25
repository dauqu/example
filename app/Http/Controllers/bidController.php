<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;

class bidController extends Controller
{
    public function index()
    {
        //Get all bid
        $bid = Bid::all();
        return response()->json($bid);
    }

    public function create(Request $request)
    {
        //Create a new bid
        $bid = Bid::create($request->all());
        return response()->json($bid);
    }

    public function show($id)
    {
        //Get a single bid
        $bid = Bid::find($id);
        return response()->json($bid);
    }

    public function update(Request $request, $id)
    {
        //Update a bid
        $bid = Bid::find($id);
        $bid->update($request->all());
        return response()->json($bid);
    }


    public function delete($id)
    {
        //Delete a bid
        $bid = Bid::find($id);
        $bid->delete();
        return response()->json('auction deleted successfully');
    }
}
