<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\TransHeader;
use App\TransDetail;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('10_trans_header')
            ->select('*')
            ->leftJoin('10_trans_detail', '10_trans_detail.notrans', '=', '10_trans_header.notrans')
            ->get();
        return view ('pages.transactions.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buah = DB::table('00_kriteria_buah')
                ->select('*')
                ->get();
        return view('pages.transactions.create')->with([
            'buah' => $buah
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $header = new transHeader();
          $header->notrans = $request->input("notrans");
          $header->tanggal = $request->input("tanggal");
          $header->divisi = $request->input("divisi");
          $header->totalbuah = $request->input("totalbuah");
          $header->save();

         $detail = new transDetail();
         $detail->notrans = $request->input("notrans");
         $detail->id_buah = $request->input("id_buah");
         $detail->jumlah = $request->input("jumlah");
         $detail->save();

         return redirect()->route('transactions.index');
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
