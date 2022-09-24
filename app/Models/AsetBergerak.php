<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetBergerak extends Model
{
    use HasFactory;
    protected $table = 'asset_bergerak';
    protected $guarded = [];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
}
