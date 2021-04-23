<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;

class ClientesController extends Controller {
    // Deixamos essa rota protegida. Somente pessoas logadas acessarão
    /* public function _construct() {
        $this->middleware('auth');
    } */

    public function listar() {
        $clientes = Clientes::all();

        return view('clientes.listar', ['clientes' => $clientes]);
    }
}
