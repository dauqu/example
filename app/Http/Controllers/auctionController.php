<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auctions;

class auctionController extends Controller
{
    public function index()
    {
        //Get all auctions
        $auctions = Auctions::all();
        return response()->json($auctions);
    }

    public function create(Request $request)
    {
        //Create a new auctions
        $auctions = Auctions::create($request->all());
        return response()->json($auctions);
    }

    public function show($id)
    {
        //Get a single auctions
        $auctions = Auctions::find($id);
        return response()->json($auctions);
    }

    public function update(Request $request, $id)
    {
        //Update a auctions
        $auctions = Auctions::find($id);
        $auctions->update($request->all());
        return response()->json($auctions);
    }


    public function delete($id)
    {
        //Delete a auctions
        $auctions = Auctions::find($id);
        $auctions->delete();
        return response()->json('auction deleted successfully');
    }
}
