<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'namadosen', 'tanggallahir', 'tempatlahir', 'programstudi', 'fakultas', 'alamatrumah'
    ];
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'dosens_id', 'id');
    }
    public function bimbingan()
    {
        return $this->hasMany(Bimbingan::class, 'iddosen', 'id');
    }
}
