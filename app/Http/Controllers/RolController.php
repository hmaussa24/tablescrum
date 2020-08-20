<?php

namespace App\Http\Controllers;

use App\UserRol;
use Validator;
use Illuminate\Http\Request;

class RolController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'proyecto_id' => 'required',
            'rol_id' => 'required',
        ]);

        $user = UserRol::create(array_merge(
                    $validator->validated()));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }
}
