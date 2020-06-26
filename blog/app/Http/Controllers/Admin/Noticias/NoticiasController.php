<?php

namespace App\Http\Controllers\Admin\Noticias;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        $dados['menu'] = Categorias::where('submenu', 0)->get()->toArray();
        $dados['submenu'] = Categorias::where('submenu', 1)->get()->toArray();
        return view('admin.noticias.index', $dados);
    }

    public function adicionarCategoria(Request $request)
    {
        $dados = $request->dados;
        $dados['slug'] = Controller::stringFormat($dados['descricao']);
        $dados['menu_id'] = array_key_exists('menu_id', $dados)?$dados['menu_id']:0;

        dd(Categorias::create($dados));
    }

    public function formNoticia()
    {
        $dados["categorias"] = Categorias::all()->pluck("descricao", "id")->toArray();
        dd($dados);
    }

    public function addPost(Request $request)
    {
        dd($request->all());
    }
}
