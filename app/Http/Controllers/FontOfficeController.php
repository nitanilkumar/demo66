<?php

namespace App\Http\Controllers;

use App\Font_office;
use Illuminate\Http\Request;

class FontOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Font_office  $font_office
     * @return \Illuminate\Http\Response
     */
    public function show(Font_office $font_office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Font_office  $font_office
     * @return \Illuminate\Http\Response
     */
    public function edit(Font_office $font_office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Font_office  $font_office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Font_office $font_office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Font_office  $font_office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Font_office $font_office)
    {
        //
    }
}
