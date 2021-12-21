<?php

namespace App\Http\Controllers;

use App\Models\ForbiddenWord;
use App\Http\Requests\StoreForbiddenWordRequest;
use App\Http\Requests\UpdateForbiddenWordRequest;

class ForbiddenWordController extends Controller
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
     * @param  \App\Http\Requests\StoreForbiddenWordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForbiddenWordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForbiddenWord  $forbiddenWord
     * @return \Illuminate\Http\Response
     */
    public function show(ForbiddenWord $forbiddenWord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForbiddenWord  $forbiddenWord
     * @return \Illuminate\Http\Response
     */
    public function edit(ForbiddenWord $forbiddenWord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForbiddenWordRequest  $request
     * @param  \App\Models\ForbiddenWord  $forbiddenWord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForbiddenWordRequest $request, ForbiddenWord $forbiddenWord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForbiddenWord  $forbiddenWord
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForbiddenWord $forbiddenWord)
    {
        //
    }
}
