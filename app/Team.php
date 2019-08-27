<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'userid', 'namaTeam', 'namaKetua', 'namaan1', 'niman1', 'emailan1', 'idLinean1', 'namaan2', 'niman2', 'emailan2', 'idLinean2', 'resi', 'kbmsi', 'verket', 'veran', 'status',
    ];

    protected $hidden = [
        'id', 
    ];

}
