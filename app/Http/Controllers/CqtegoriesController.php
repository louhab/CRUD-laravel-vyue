<?php

namespace App\Http\Controllers;

use App\Cqtegories;
use Illuminate\Http\Request;

class CqtegoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Cqtegories::all();
        return response()->json([
           'categories'=> $categories]
        );
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cqtegories  $cqtegories
     * @return \Illuminate\Http\Response
     */
    public function show(Cqtegories $cqtegories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cqtegories  $cqtegories
     * @return \Illuminate\Http\Response
     */
    public function edit(Cqtegories $cqtegories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cqtegories  $cqtegories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cqtegories $cqtegories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cqtegories  $cqtegories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cqtegories $cqtegories)
    {
        //
    }
}
