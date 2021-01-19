<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        // create user
        $user =  User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password'))
        ]);

        $user->save;

        return response()->json($user, 201);

    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required '
        ]);

        $login_detail = request([
            'email',
            'password'
        ]);

        if(!Auth::attempt($login_detail)){
            return response()->json([
                'error' => 'login gagal. Cek lagi detail login'
            ], 401);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token'  => $tokenResult->accessToken,
            'token_id'      => $token->id,
            'user_id'       => $user->id,
            'name'          => $user->name,
            'email'         => $user->email
        ], 200);
    }
}
