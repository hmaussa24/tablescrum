<?php

namespace App\Http\Controllers;

use App\Sprintbacklog;
use Validator;
use Illuminate\Http\Request;

class SprintBackLogController extends Controller
{
    //
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
            'horas' => 'required',
            'estado' => 'required',
            'user_id' => 'required',
            'backlog_id' => 'required',
        ]);

        $user = Sprintbacklog::create(array_merge(
                    $validator->validated()));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }
}
