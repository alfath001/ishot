<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Ideaction;
use App\Itcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
   
    public function update(Request $request, $id)
    {

        if ($request->no == 1) { //menyimpan foto resi
            $this->validate($request, [
                'resi' => 'image',
            ]);

            $tim = Team::find($id);

            if ($request->hasFile('resi')) {
                $request->file('resi');
                $ext = $request->resi->extension();
                $namafile = 'resi_'.time().'.'.$ext;
                $request->resi->storeAs('resi', $namafile);
                $tim->resi = $namafile;
            }

            $tim->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Upload Resi Success!');

        } elseif ($request->no == 2) { //edit team -> profile
            
            DB::table('teams')
                ->where('id', $id)
                ->update(['namaTeam' => $request->namaTeam]);

            DB::table('users')
                ->where('email', $request->ek)
                ->update(['namaTeam' => $request->namaTeam, 'sekolah' => $request->sekolah]);

            if ($request->si) {
                DB::table('itcases')
                ->where('kodeTeam', $id)
                ->update(['judul' => $request->judul]);   
            } else {
                DB::table('ideactions')
                ->where('kodeTeam', $id)
                ->update(['judul' => $request->judul]);
            }

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Update Data Team Success!');

        } elseif ($request->no == 3) { //verifikasi pembayaran -> admin

            $tim = Team::find($id);
            $tim->status = 1;

            $tim->save();

            return redirect('/dpembayaran')->with('message', 'Status Terverifikasi!');

        } elseif ($request->no == 4) { //edit biodata ketua -> profile

            DB::table('users')
                ->where('email', $request->email)
                ->update(['nama' => $request->nama, 'nim' => $request->nim, 'email' => $request->email, 'noTelp' => $request->noTelp, 'idLine' => $request->idLine]);

            DB::table('teams')
                ->where('id', $id)
                ->update(['namaKetua' => $request->nama]);

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Update Biodata Ketua Success!');

        } elseif ($request->no == 5) { //verifikasi anggota -> profile

            $tim = Team::find($id);
            $tim->veran = 1;

            $tim->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Verifikasi Data Anggota Success!');           

        } elseif ($request->no == 6) { //verifikasi ketua -> profile
            $tim = Team::find($id);
            $tim->verket = 1;

            $tim->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Verifikasi Data Ketua Success!'); 

        } elseif ($request->no == 7) { //edit anggota 1 -> profile
            
            $tim = Team::find($id);
            $tim->namaan1 = $request->namaan1;
            $tim->niman1 = $request->niman1;
            $tim->emailan1 = $request->emailan1;
            $tim->idLinean1 = $request->idLinean1;

            $tim->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Edit Anggota 1 Success!');       

        } elseif ($request->no == 8) { // edit anggota 2 -> profile
            
            $tim = Team::find($id);
            $tim->namaan2 = $request->namaan2;
            $tim->niman2 = $request->niman2;
            $tim->emailan2 = $request->emailan2;
            $tim->idLinean2 = $request->idLinean2;

            $tim->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Edit Anggota 2 Success!');                                      
        } 

    }

}
