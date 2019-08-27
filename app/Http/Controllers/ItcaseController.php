<?php

namespace App\Http\Controllers;

use App\Itcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ItcaseController extends Controller
{
    public function index(){
        return view('itcase');
    }

 
    public function update(Request $request, $id)
    {
         if ($request->no == 1) { //menyimpan file ide
            $this->validate($request, [
                'file' => 'required',
            ]);

            $ide = Itcase::find($id);

            if ($request->hasFile('file')) {
                $request->file('file');
                $ext = $request->file->extension();
                $namafile = 'itcase_'.$ide->kodeTeam.'-'.time().'.'.$ext;
                $request->file->storeAs('itcase', $namafile);
                $ide->file = $namafile;
            }

            $ide->save();

            return redirect('/user/'.session("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"))->with('message', 'Upload File Success!');   
        }

    }

}
