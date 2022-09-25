<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\AsetBergerak;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanControllerPDF extends Controller
{
    public function asetBergerak(Request $request)
    {
        $data = AsetBergerak::where('jenis_id', 'like', "%$request->jenis_id")
            ->orderBy('nama')
            ->with('jenis')
            ->get();
        $jenis = Jenis::find($request->jenis_id);

        // return view('kepala.laporan.pdf.aset_bergerak', [
        //     'data' => $data,
        //     'jenis' => $jenis,
        // ]);

        $pdf = Pdf::loadView('kepala.laporan.pdf.aset_bergerak', [
            'data' => $data,
            'jenis' => $jenis,
        ]);
        return $pdf->stream('Laporan Aset Bergerak.pdf');
    }
}
