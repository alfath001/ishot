<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim', 'nama', 'email', 'password', 'sekolah', 'namaTeam', 'idLine', 'noTelp', 'kbmsi',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //untuk mengecek apakah user tersebut merupakan admin
    public function is_admin(){
        if ($this->admin) {
            return true;
        }
        return false;
    }    
}
