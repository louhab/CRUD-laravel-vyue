<?php

namespace App\Http\Controllers;

use App\Produits;
use Illuminate\Http\Request;


class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $produits=Produits::paginate(2);
        foreach($produits as $produit){
                $produit->setAttribute('category' ,$produit->category->name);
              }
        return response()->json([
           'produits'=> $produits]
        );
        // dd($produits);
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
        Produits::create([
            
            
             'name'=>$request->name,
             'category_id'=>$request->category_id,
             
            
            
            
            
        ]);
        return response()->json([
            'message'=>'Article a ete ajouter '
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit=Produits::find($id);
        return response()->json(
            $produit
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $produit=Produits::find($id);
        $produit->update([
         'name'=>$request->name,
         'category_id'=>$request->category_id
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit=Produits::find($id);
        $produit->delete();
    }
}
