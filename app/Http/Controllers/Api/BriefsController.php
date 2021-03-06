<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brief;
use Illuminate\Http\Request;

class BriefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Brief::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $brief = new Brief($request->all());
        $brief->save();
        return $brief;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Brief::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $brief = Brief::findOrFail($id);
        $brief->update($request->all());

        return $brief;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $brief = Brief::findOrFail($id);
        $brief->delete();
        return '';
    }
}
