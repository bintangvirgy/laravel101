<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public $selldata  = [
        [
            'object'=>'Pembeli Baru',
            'value'=>150,
            'periode'=>'Feb 1 - Mar 1',
            'diff_periode'=> -23.54,
        ],
        [
            'object'=>'Omset Penjualan',
            'value'=>502321000,
            'periode'=>'Feb 1 - Mar 1',
            'diff_periode'=>-11.23,
        ],
        [
            'object'=>'Total Penjualan',
            'value'=>523,
            'periode'=>'Feb 1 - Mar 1',
            'diff_periode'=>-15.22,
        ],
        [
            'object'=>'Pengunjung',
            'value'=>1432,
            'periode'=>'Feb 1 - Mar 1',
            'diff_periode'=> 5.94,
        ],
    ];

    public function dashboard()
    {
        $row = \DB::table('dashboard_data')->get();
        $pembeli = \DB::table('dashboard_data')->where('id',1)->first();
        $omset = \DB::table('dashboard_data')->where('id',2)->first();
        $penjualan = \DB::table('dashboard_data')->where('id',3)->first();
        $pengunjung = \DB::table('dashboard_data')->where('id',4)->first();

        return view('dashboard',[
            'dash_pembeli'=>$pembeli,
            'dash_omset'=>$omset,
            'dash_penjualan'=>$penjualan,
            'dash_pengunjung'=>$pengunjung,
        ]);
    }

    public function olah_dashboard()
    {
        # code...
    }
}
