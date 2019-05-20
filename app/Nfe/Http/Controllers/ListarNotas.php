<?php

namespace App\Nfe\Http\Controllers;

use NFePHP\NFe\Make;
use NFePHP\NFe\Tools;
use NFePHP\Common\Certificate;
use NFePHP\NFe\Common\Standardize;
use NFePHP\NFe\Complements;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Nfe\Models\NFe as NFeModel;

class ListarNotas
{
    public function listarNotas($usuario)
    {
        /* $notas = NFeModel::all(); */
        $notas = NFeModel::where('data.NFe.infNFe.dest.CPF', '=', $usuario)->get();
        return $notas;
    }
}
