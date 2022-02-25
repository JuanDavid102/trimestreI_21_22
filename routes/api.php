<?php

use App\Http\Controllers\API\PropietarioController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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
Route::post('tokens/create', function (Request $request) {
    $request->validate([
       'email' => 'required|email',
       'password' => 'required'
   ]);

   $user = User::where('email', $request->email)->first();

   if (! $user || ! Hash::check($request->password, $user->password)) {
       throw ValidationException::withMessages([
           'email' => ['The provided credentials are incorrect.'],
       ]);
   }

   return response()->json([
       'token_type' => 'Bearer',
       'access_token' => $user->createToken('token_name')->plainTextToken // token name you can choose for your self or leave blank if you like to
   ]);
})->name('login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->
    apiResource('propietarios', PropietarioController::class);
