<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itcase extends Model
{
    protected $fillable = [
        'kodeTeam', 'judul', 'file',
    ];

    protected $hidden = [
        'id', 
    ];

}
