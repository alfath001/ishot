<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allc extends Controller
{

    public function index()
    {
        return view('indexs');
    }

    public function dpembayaran()
    {
        return view('dpembayarans');
    }

    public function dpeserta()
    {
        return view('dpesertas');
    }

    public function dreset()
    {
        return view('dresets');
    }

    public function dteam()
    {
        return view('dteams');
    }

    public function profile()
    {
        return view('profiles');
    }

    public function seminar()
    {
        return view('seminars');
    }  

    // public function store(Request $request){
    //     $this->validate($request, [
    //         'koment' => 'required',
    //     ]);

    //     $userd = session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d");
        
    //     $komen = new Komen;
    //     $komen->iklan_id = $request->kode_iklan;
    //     $komen->user_id = $userd;
    //     $komen->komentar = $request->koment;
    //     $komen->save();

    //     return redirect('/iklan/'.$request->kode_iklan.'/')->with('message', 'Komentar berhasil ditambahkan!');
    // }

    // public function destroy($id)
    // {
    //     $komen = Komen::find($id);
    //     $komen->delete();

    //     return redirect()->back()->with('message', 'Komentar berhasil dihapus!');
    // }

}
