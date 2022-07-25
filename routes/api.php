<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userregistrationController;
use App\Http\Controllers\auctionController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\bidController;
use App\Http\Controllers\wishlistController;
use App\Http\Controllers\imageuploadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/userregistration', function (Request $request) {
//     return $request->userregistration();
// });


    Route::group(['middleware'=>'api'], function($routes){

                //Get all products
        Route::get('/products', [ProductController::class, 'index']);

                //Create a new product
        Route::post('/products', [ProductController::class, 'create']);


                //Get a single product
        Route::get('/products/{id}', [ProductController::class, 'show']);

                //Update a product
        Route::put('/products/{id}', [ProductController::class, 'update']);

                 //Delete a product
        Route::delete('/products/{id}', [ProductController::class, 'delete']);


                // user registration
        //Get all user
        Route::get('/user', [userregistrationController::class, 'index']);

        //Create a new user
        Route::post('/user', [userregistrationController::class, 'create']);

                //Get a single user
        Route::get('/user/{id}', [userregistrationController::class, 'show']);

                //Update a user
        Route::put('/user/{id}', [userregistrationController::class, 'update']);

                //Delete a user
        Route::delete('/user/{id}', [userregistrationController::class, 'delete']);
        

                // login

        //Create a new login
        Route::post('/login', [userregistrationController::class, 'login']);

   });





            // auction registration
//Get all auction
Route::get('/auction', [auctionController::class, 'index']);

//Create a new auction
Route::post('/auction', [auctionController::class, 'create']);

//Get a single auction
Route::get('/auction/{id}', [auctionController::class, 'show']);

//Update a auction
Route::put('/auction/{id}', [auctionController::class, 'update']);

//Delete a auction
Route::delete('/auction/{id}', [auctionController::class, 'delete']);


                // checkout registration
//Get all checkout
Route::get('/checkout', [checkoutController::class, 'index']);

//Create a new checkout
Route::post('/checkout', [checkoutController::class, 'create']);

//Get a single checkout
Route::get('/checkout/{id}', [checkoutController::class, 'show']);

//Update a checkout
Route::put('/checkout/{id}', [checkoutController::class, 'update']);

//Delete a checkout
Route::delete('/checkout/{id}', [checkoutController::class, 'delete']);


                // bid registration
//Get all bid
Route::get('/bid', [bidController::class, 'index']);

//Create a new bid
Route::post('/bid', [bidController::class, 'create']);

//Get a single bid
Route::get('/bid/{id}', [bidController::class, 'show']);

//Update a bid
Route::put('/bid/{id}', [bidController::class, 'update']);

//Delete a bid
Route::delete('/bid/{id}', [bidController::class, 'delete']);


                // wishlist registration
//Get all wishlist
Route::get('/wishlist', [wishlistController::class, 'index']);

//Create a new wishlist
Route::post('/wishlist', [wishlistController::class, 'create']);

//Get a single wishlist
Route::get('/wishlist/{id}', [wishlistController::class, 'show']);

//Update a wishlist
Route::put('/wishlist/{id}', [wishlistController::class, 'update']);

//Delete a wishlist
Route::delete('/wishlist/{id}', [wishlistController::class, 'delete']);



               

