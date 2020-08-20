<?php

namespace App\Http\Controllers;

use App\Backlog;
use Validator;
use Illuminate\Http\Request;

class BackLogController extends Controller
{
    //
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
            'hu' => 'required|between:2,100',
            'estado' => 'required|between:2,100',
            'user_id' => 'required',
            'proyecto_id' => 'required',
        ]);

        $user = Backlog::create(array_merge(
                    $validator->validated()));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }
}
