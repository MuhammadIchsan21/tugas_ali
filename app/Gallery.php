<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'dosens_id', 'image'
    ];

    protected $hidden = [
    //
    ];

    public function dosen_list()
    {
        return $this->belongsTo(Dosen::class, 'dosens_id', 'id');
    }
}
