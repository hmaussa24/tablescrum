<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Proyecto;
use Validator;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
     /**
     * Create a new AuthController instance.
     *
     * @return void
     */
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
            'description' => 'required|between:2,100',
            'user_id' => 'required',
        ]);

        $user = Proyecto::create(array_merge(
                    $validator->validated()));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }


    public function getProyectosUser(Request $request)
    {
        # code...
        //var_dump($request);
        $proyectos = Proyecto::where('user_id', $request->user_id)->get();
        //return $proyectos;
        return response()->json([
            'message' =>  'proyectos user',
            'proyectos' => $proyectos,
        ], 201);

    }

}
