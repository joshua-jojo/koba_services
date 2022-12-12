<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'login gagal',
                'type' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $credentials = $request->only('email', 'password');
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'type' => 'error',
                'message' => 'email atau password salah'
            ], 401);
        }
        return response()->json([
            'type' => 'success',
            'message' => 'login berhasil',
            'user'    => auth()->guard('api')->user(),
            'token'   => $token
        ], 200);
    }
}
