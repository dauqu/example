<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userregistration;
use Validator;
use Illuminate\Support\Facades\Hash;


class userregistrationController extends Controller
{
    public function index()
    {
        //Get all userregistration
        $userregistration = Userregistration::all();
        return response()->json($userregistration);
    }

    public function create(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(),[
            "email"=>"required|email|unique:userregistrations",
            "fname"=>"required",
            "adharcardnum"=>"required|min:12|max:12",
            "password"=>"required|min:8",
            "avatorimg"=>"required",
            "user_type"=>"required",
            "phone"=>"required|min:10|max:12"
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }
            //---------//
        //Create a new product
        $userregistration = Userregistration::create($request->all());
        return response()->json($userregistration);
    }

    public function show($id)
    {
        //Get a single product
        $userregistration = Userregistration::find($id);
        return response()->json($userregistration);
    }

    public function update(Request $request, $id)
    {
        //Update a product
        $userregistration = Userregistration::find($id);
        $userregistration->update($request->all());
        return response()->json($userregistration);
    }


    public function delete($id)
    {
        //Delete a product
        $userregistration = Userregistration::find($id);
        $userregistration->delete();
        return response()->json('Product deleted successfully');
    }




     // validation login
     function login(Request $req){

        $validator = Validator::make($req->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        
        $userregistration = Userregistration::where('email', $req->email)->first();
       if(!$userregistration || Hash::check($req->password, $userregistration->password)){
           return "check your email and password";      
       }
        else{
           return("success");
        }

        if(!$token = auth()->attempt($validator->validated())){
            return response()->json(['error=>Unauthorized']);
        }
                    // call method
        return $this->respondWithToken($token);

    }
                     //structure way
            
        protected function respondWithToken($token){
            return response()->json([
                'access_token'=>$token,
                'token_type'=>'bearer',
                'expires_in' => auth()->factory()->getTTL()*60
            ]);
        }

}


