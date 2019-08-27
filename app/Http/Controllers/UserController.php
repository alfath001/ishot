<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Ideaction;
use App\Itcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UserController extends Controller
{

    public function show($id)
    {
        if ($id == session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d")) {
            $usid = User::where('id', $id)->first();
            if ($usid->kbmsi) {
                $user = DB::table('users')
                ->join('teams', 'users.namaTeam', '=', 'teams.namaTeam')
                ->join('itcases', 'teams.id', '=', 'itcases.kodeTeam')
                ->where('users.id', '=', $id)
                ->select('users.*', 'teams.id as kode', 'teams.namaKetua', 'teams.namaan1', 'teams.niman1', 'teams.emailan1', 'teams.idLinean1', 'teams.namaan2', 'teams.niman2', 'teams.emailan2', 'teams.idLinean2', 'teams.resi', 'teams.status', 'teams.verket', 'teams.veran', 'itcases.id as idide', 'itcases.judul')
                ->first();    
            } else {
                $user = DB::table('users')
                ->join('teams', 'users.namaTeam', '=', 'teams.namaTeam')
                ->join('ideactions', 'teams.id', '=', 'ideactions.kodeTeam')
                ->where('users.id', '=', $id)
                ->select('users.*', 'teams.id as kode', 'teams.namaKetua', 'teams.namaan1', 'teams.niman1', 'teams.emailan1', 'teams.idLinean1', 'teams.namaan2', 'teams.niman2', 'teams.emailan2', 'teams.idLinean2', 'teams.resi', 'teams.status', 'teams.verket', 'teams.veran', 'ideactions.id as idide', 'ideactions.judul')
                ->first();
            }
            return view('profile')->with('user', $user);
        } else {
            return redirect('/index');
        }
    }

    public function update(Request $request, $id)
    {
   
        if ($request->spe == 'passdt') {       
            $user = User::find($id);

            $user->password = bcrypt($request->newpass);
            $user->save();

            if ($user->kbmsi) {
                return redirect('/dteam/kbmsi')->with('message', 'Reset Password Success!');
            } else {
                return redirect('/dteam')->with('message', 'Reset Password Success!');
            }

        } elseif ($request->spe == 'passpr') {       
            
            $this->validate($request, [
                'password' => 'required|string|confirmed',
            ]);

            $user = User::find($id);
            
            if (Hash::check($request->input('oldpass'), $user->password)) {
                
                $user->password = bcrypt($request->password);    
                
                $user->save();
    
                return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Ganti Password Success!');
            } else {
                return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Password Lama Salah!');
            }
        }

    }

}
