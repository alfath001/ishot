<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideaction extends Model
{
    protected $fillable = [
        'kodeTeam', 'judul', 'file',
    ];

    protected $hidden = [
        'id', 
    ];

}
