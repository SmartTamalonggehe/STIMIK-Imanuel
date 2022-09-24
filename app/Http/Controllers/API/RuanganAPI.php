<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganAPI extends Controller
{
    public function index()
    {
        $data = Ruangan::orderBy('nama')->get();
        return response()->json($data);
    }
}
