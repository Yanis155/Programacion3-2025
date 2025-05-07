<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userApi;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        $usuarios= $request->all();

        foreach ($usuarios as $usuario) {
            userApi::create([
            'first-name'=> $usuario['name']['first'],
            'last_name'=>$usuario['last_name'],
            'email'=>$usuario['email'],
            'dob'=>$usuario['dob'] ?? null,
            'phone'=>$usuario['phone'] ?? null,
            'gender'=>$usuario['gender'] ?? null,
            'id_name'=>$usuario['id_name'] ?? null,
            'id_value'=>$usuario['id_value'] ?? null,
            'registered_date'=>date('Y-m-d', strtotime($usuario['registered_date'])) ?? null,
            'picture'=>$usuario['picture'] ?? null,
            ]);
         return response()->json(['mensaje'=> 'Usuarios guardados correctamente']);
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
