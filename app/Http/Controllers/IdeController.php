<?php

namespace App\Http\Controllers;

use App\Ideaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class IdeController extends Controller
{
    public function index(){
        return view('ideaaction');
    }

  
    public function update(Request $request, $id)
    {
        if ($request->no == 1) { //menyimpan file ide
            $this->validate($request, [
                'file' => 'required',
            ]);

            $ide = Ideaction::find($id);

            if ($request->hasFile('file')) {
                $request->file('file');
                $ext = $request->file->extension();
                $namafile = 'ideaction_'.$ide->kodeTeam.'-'.time().'.'.$ext;
                $request->file->storeAs('ideaaction', $namafile);
                $ide->file = $namafile;
            }

            $ide->save();
          
            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Upload File Success!');   
        }
    }

}
