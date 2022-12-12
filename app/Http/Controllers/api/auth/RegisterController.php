<?php

namespace App\Http\Controllers\api\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed',
            'tanggal_lahir'  => 'required|date',
            'alamat'  => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
                'type' => 'error'
            ];
            return response()->json($data, 422);
        }

        //create user
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'     => $request->alamat,
            'password'  => bcrypt($request->password)
        ]);

        //return response JSON user is created
        if ($user) {
            return response()->json([
                'message' => "user berhasil di daftarkan!",
                'success' => true,
                'user'    => $user,
            ], 201);
        }

        //return JSON process insert failed 
        return response()->json([
            'message' => 'pendaftaran gagal',
            'success' => false,
        ], 409);
    }
}
