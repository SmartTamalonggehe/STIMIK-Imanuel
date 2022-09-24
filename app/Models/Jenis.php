<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    protected $guarded = [];

    public function assetBergerak()
    {
        return $this->hasMany(assetBergerak::class, 'jenis_id');
    }
    public function assetDiam()
    {
        return $this->hasMany(assetDiam::class, 'jenis_id');
    }
}
