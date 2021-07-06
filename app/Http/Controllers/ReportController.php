<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    public function index()
    {
    	$items = DB::table('00_kriteria_buah')
            ->select('10_trans_header.tanggal','00_kriteria_buah.name','10_trans_detail.jumlah')
            ->Join('10_trans_detail', '10_trans_detail.id_buah', '=', '00_kriteria_buah.id')
            ->Join('10_trans_header', '10_trans_header.notrans', '=', '10_trans_detail.notrans')
            ->get();
        return view ('pages.reports.index')->with([
            'items' => $items
        ]);
    }
}
