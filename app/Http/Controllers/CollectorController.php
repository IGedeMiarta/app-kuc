<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $tagihan  = [
            [
                'nama'=>'I Gede Miarta Yasa',
                'Alamat'=>'Tabanan Bali',
                'Domsili'=>'Bali',
                'Tagihan'=>20000],
            [
                'nama'=>'I Gede Bayu Setiadai',
                'Alamat'=>'Tabanan Bali',
                'Domsili'=>'Bali',
                'Tagihan'=>290000],
            [
                'nama'=>'I Gede Wawan',
                'Alamat'=>'Denpasar Bali',
                'Domsili'=>'Bali',
                'Tagihan'=>290000
            ],[
                'nama'=>'I Komang Putu Wawan',
                'Alamat'=>'Denpasar Bali',
                'Domsili'=>'Bali',
                'Tagihan'=>290000
            ],
        ];
        $data['title'] = 'Tagihan';
        $data['tagihan']= $tagihan;
        return view('pages.kolektor.kolektor',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
