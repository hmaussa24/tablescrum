<?php

namespace App\Http\Controllers;

use App\Sprint;
use Validator;
use Illuminate\Http\Request;

class SprintController extends Controller
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
            'name' => 'required|between:2,100',
            'inicio' => 'required|between:2,100',
            'fin' => 'required|between:2,100',
            'stado' => 'required|between:2,100',
            'proyecto_id' => 'required',
        ]);

        $user = Sprint::create(array_merge(
                    $validator->validated()));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }
}
