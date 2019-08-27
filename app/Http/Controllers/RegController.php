<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Ideaction;
use App\Itcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class RegController extends Controller
{

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'namaTeam' => 'required|string|max:255|unique:teams',
        ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->namaTeam = $request->namaTeam;

        if ($request->si) {
            $user->nim = $request->nim;
            $user->kbmsi = 1;    
        } else {
            $user->sekolah = $request->sekolah;
        }
        

        if ($user->save()) {
            $usr = DB::table('users')->where([
                ['email', '=', $request->email],
                ['namaTeam', '=', $request->namaTeam],
            ])->first();
            
            $team = new Team;
            $team->userid = $usr->id;
            $team->namaTeam = $request->namaTeam;
            $team->namaKetua = $request->nama;

            
            if ($request->si) {
                $team->kbmsi = $request->si;

                $team->save();

                $tim = DB::table('teams')
                    ->where('namaTeam', $request->namaTeam)
                    ->first();

                $itcase = new Itcase;
                $itcase->kodeTeam = $tim->id;
                $itcase->save();                
    
                return redirect('itcase')->with('message', 'Register Success!');        
           
            } else {
                $team->save();

                $tim = DB::table('teams')
                    ->where('namaTeam', $request->namaTeam)
                    ->first();

                $ideaaction = new Ideaction;
                $ideaaction->kodeTeam = $tim->id;
                $ideaaction->save();                

                return redirect('ideaaction')->with('message', 'Register Success!');
            }
        
        } else {
            echo "else";
        }
    }


}
