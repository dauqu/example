<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Validator;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    
    public function index()
    {
        //Get all products
        $products = Products::all();
        return response()->json($products);
    }

    public function create(Request $request)
    {

        // validation
        $validator = Validator::make($request->all(),[
            "productname"=>"required",
            "makingyear"=>"required",
            "brand"=>"required",
            "driven"=>"required",
            "transmission"=>"required",
            "exidental"=>"required",
            "fuel"=>"required",
            "insurance"=>"required",
            "price"=>"required",
            "image"=>"required"
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }

        //Create a new product
        $product = Products::create($request->all());
        return response()->json($product);

    }

    public function show($id)
    {
        //Get a single product
        $product = Products::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        //Update a product
        $product = Products::find($id);
        $product->update($request->all());
        return response()->json($product);
    }


    public function delete($id)
    {
        //Delete a product
        $product = Products::find($id);
        $product->delete();
        return response()->json('Product deleted successfully');
    }
        
   
}