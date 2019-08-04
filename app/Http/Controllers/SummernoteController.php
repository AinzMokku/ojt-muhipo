<?php

namespace App\Http\Controllers;

use App\Summernote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MControl;

class SummernoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $summernote = Summernote::all();
        return view('data_pengumuman',compact('summernote'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $summernote = MControl::Get_Row_Empty('summernotes');
        return view('form_pengumuman',compact('summernote'));
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
     * @param  \App\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function show(Summernote $summernote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $summernote = Summernote::where('id',$id)->first();
        return view('form_pengumuman',compact('summernote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summernote $summernote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summernote $summernote)
    {
        //
    }
}
