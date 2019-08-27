<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Ideaction;
use App\Itcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dpeserta');
    }

    public function pembayaran()
    {
        $tims = DB::table('teams')
             ->orderBy('namaTeam', 'desc')
             ->paginate(5);
        
        return view('dpembayaran', compact('tims'));
    }

    public function team()
    {
        $tims = DB::table('teams')
            ->leftJoin('ideactions', 'teams.id', '=', 'ideactions.kodeTeam')
            ->where('teams.kbmsi', 0)
            ->orderBy('namaTeam', 'desc')
            ->paginate(5);

        return view('dteam-sma', compact('tims'));
    }

    public function teamsi()
    {
        $tims = DB::table('teams')
            ->leftJoin('itcases', 'teams.id', '=', 'itcases.kodeTeam')
            ->where('teams.kbmsi', 1)
            ->orderBy('namaTeam', 'desc')
            ->paginate(5);

        return view('dteam-kbmsi', compact('tims'));
    }

    public function peserta()
    {
        $pesertas = DB::table('users')
            ->where('kbmsi', 0)
            ->orderBy('nama', 'desc')
            ->paginate(7);

        return view('dpeserta-sma', compact('pesertas'));
    }

    public function peskbmsi()
    {
        $pesertas = DB::table('users')
            ->where('kbmsi', 1)
            ->orderBy('nama', 'desc')
            ->paginate(7);

        return view('dpeserta-kbmsi', compact('pesertas'));
    }
    
}
