<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AsetAPI extends Controller
{
    public function chart()
    {
        $dataBergerak = DB::table('asset_bergerak')
            ->join('jenis', 'asset_bergerak.jenis_id', 'jenis.id')
            ->select(DB::raw('count(*) as jmlh, jenis.nama'))
            ->groupBy('jenis.nama')
            ->get();

        $dataDiam = DB::table('asset_diam')
            ->join('jenis', 'asset_diam.jenis_id', 'jenis.id')
            ->select(DB::raw('count(*) as jmlh, jenis.nama'))
            ->groupBy('jenis.nama')
            ->get();
        return response()->json([
            'data_diam' => $dataDiam,
            'data_bergerak' => $dataBergerak
        ]);
    }
}
