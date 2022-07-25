<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userregistration;

class loginController extends Controller
{

    
            // login
            function login(Request $req){
                $userregistration = Userregistration::where('email', $req->email)->first();
               if(!$userregistration || Hash::check($req->password, $userregistration->password)){
                return ["error"=>"Email or password in not match"];
               }
                return $userregistration;
            }






    // public function index()
    // {
    //     //Get all login
    //     $login = Userregistration::all();
    //     return response()->json($login);
    // }

    // public function create(Request $request)
    // {
    //     //Create a new login
    //     $login = Userregistration::create($request->all());
    //     return response()->json($userregistration);
    // }

    // public function show($id)
    // {
    //     //Get a single login
    //     $userregistration = Userregistration::find($id);
    //     return response()->json($userregistration);
    // }
    // public function update(Request $request, $id)
    // {
    //     //Update a login
    //     $userregistration = Userregistration::find($id);
    //     $userregistration->update($request->all());
    //     return response()->json($userregistration);
    // }


    // public function delete($id)
    // {
    //     //Delete a login
    //     $login = Userregistration::find($id);
    //     $login->delete();
    //     return response()->json('Product deleted successfully');
    // }
}
