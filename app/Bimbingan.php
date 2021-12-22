<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nim', 'iddosen', 'uraianbimbingan', 'jenisbimbingan', 'tanggalbimbingan', 'statusbimbingan'
    ];

    public function dosen_list()
    {
        return $this->belongsTo(Dosen::class, 'iddosen', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nim', 'id');
    }
}
