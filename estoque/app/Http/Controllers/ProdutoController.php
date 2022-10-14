<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{

    public function lista()
    {
        $sHtml = '<h1>Listagem de produtos com Laravel</h1>';
        $sHtml .= '<ul>';
        $aProdutos = DB::select('select * from produtos');
        foreach ($aProdutos as $oProduto) {
            $sHtml .= '<li> Nome: ' . $oProduto->nome . ', Descrição: ' . $oProduto->id . '</li>';
        }
        $sHtml .= '</ul>';

        return $sHtml;
    }
}
