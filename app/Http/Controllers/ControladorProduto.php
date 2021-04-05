<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Produto;
use App\Models\Produto as ModelsProduto;
use App\Models\Categoria as ModelsCategoria;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView()
    {
        $cat = ModelsCategoria::all();
        $prod = ModelsProduto::all();
        return view('produtos',compact('prod','cat'));
    }

    public function index()
    {
        $prod = ModelsProduto::all();
        return $prod->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $prod = new ModelsProduto();
      $prod->nome = $request->input('nome');
      $prod->estoque = $request->input('estoque');
      $prod->preco = $request->input('preco');
      $prod->categoria_id = $request->input('categoria_id');
      $prod->save();
      return json_encode($prod);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = ModelsProduto::find($id);
        if(isset($prod)){
            return json_encode($prod);
        }
        return response('Produto não encontrado',404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = ModelsProduto::find($id);
        if(isset($prod)){
            $prod->nome = $request->input('nome');
            $prod->estoque = $request->input('estoque');
            $prod->preco = $request->input('preco');
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
            return json_encode($prod);
        }
        return response('Produto não encontrado',404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $prods = ModelsProduto::find($id);
       if(isset($prods)){
           $prods->delete();
           return response('OK',200);
       }
       return response('Produto não encontrado',404);
    }

}
