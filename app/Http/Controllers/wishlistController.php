<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class wishlistController extends Controller
{
    public function index()
    {
        //Get all wishlist
        $wishlist = Wishlist::all();
        return response()->json($wishlist);
    }

    public function create(Request $request)
    {
        //Create a new wishlist
        $wishlist = Wishlist::create($request->all());
        return response()->json($wishlist);
    }

    public function show($id)
    {
        //Get a single wishlist
        $wishlist = Wishlist::find($id);
        return response()->json($wishlist);
    }

    public function update(Request $request, $id)
    {
        //Update a wishlist
        $wishlist = Wishlist::find($id);
        $wishlist->update($request->all());
        return response()->json($wishlist);
    }


    public function delete($id)
    {
        //Delete a wishlist
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return response()->json('auction deleted successfully');
    }
}
