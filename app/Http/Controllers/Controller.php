<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(String $searchKey)
    {
        $unidades = Cliente::query()
            ->where('nombre', 'LIKE', "%{$searchKey}%") 
            ->unidades;
        return response()->json($unidades, 200);            
    }

    public function getAllClientes()
    {
        $unidades = Cliente::all()->unidades();
        die($unidades);
        return response()->json($unidades, 200);            
    }    
}
