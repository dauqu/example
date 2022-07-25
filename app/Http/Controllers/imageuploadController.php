<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Products;

class imageuploadController extends Controller
{
    public function imageStore(Request $request)
    {

        $validator = Validator::make($request->all(),[ 
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
      ]);   
       
      if($validator->fails()) {          
           
          return response()->json(['error'=>$validator->errors()], 401);                        
       } 
       if ($image = $request->file('image')) {
        $path = $image->store('public/images');
        $name = $image->getClientOriginalName();

        //store your file into directory and db
        $save = new Products();
        $save->$name = $image;
        $save->store_path= $path;

        $save->image=$request->image;
        
        $save->save();

        // return response()->json([
        //     "success" => true,
        //     "message" => "image successfully uploaded",
        //     "file" => $image
        // ]);

        }
    }
}
