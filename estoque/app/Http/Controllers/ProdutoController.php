<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{

    public function lista()
    {

        $aProdutos = DB::select('select * from produtos');
       
        return view('listagem');
    }
}
