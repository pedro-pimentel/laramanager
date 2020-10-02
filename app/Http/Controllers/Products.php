<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Products extends Controller
{
    //

    public function show(){
        return Inertia::render('produto/index', [
            'products' => Products::all()->map(function ($product){
                return [
                    'id' => $product->id,
                    'codigo' => $product->codigo,
                    'descricao' => $product->descricao,
                    'localizacao' => $product->localizacao,
                    'edit_url' => URL::route('products.edit', $user),
                ];
            }),
            'create_url' => URL::route('users.create'),
        ]);
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->descricao = $request->descricao;
        $product->save();
    }
}
