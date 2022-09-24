<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetDiam extends Model
{
    use HasFactory;
    protected $table = 'asset_diam';
    protected $guarded = [];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
