<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Models\nguoidungs;

class BooksController extends Controller
{
    public function index() {
        if(!isset($_COOKIE['is_logged'])) {
            setcookie('is_logged', 0, time() + 360000, '/');
          }
        
        $noibats = DB::table("sach")
                            ->where([
                                ["NoiBat", "=", 1],
                                ["TrangThai", "=", 1,],
                            ])
                            ->get();
        $sgks = DB::table("sach")
                        ->where([
                            ["MaLoaiSach", "=", "GK"],
                            ["TrangThai", "=", 1,],
                        ])
                        ->take(5)
                        ->get();
        $thamkhaos = DB::table("sach")
                        ->where([
                            ["MaLoaiSach", "=", "TK"],
                            ["TrangThai", "=", 1,],
                        ])
                        ->take(5)
                        ->get();

        
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidungs")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            /*$user1 = nguoidungs::where('MaNgDung', $_COOKIE['id'])->get();*/
            return view('index', array(
                'user1' => $user1,
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos
            ));
        } else {
            return view('index', [
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos
            ]);
        }
        
    }

    public function collections() {
        $all = DB::table("sach")->get();
        return view('collections',[
            'all' => $all,
        ]);
    }
    public function home() {
        $alls = DB::table("sach")
                    ->join("nhaxuatban", "sach.MaNXB", "=", "nhaxuatban.MaNXB")
                    ->get();
        return view('home',[
            'alls' => $alls,
        ]);
    }

    public function add() {
        $alls = DB::table("sach")
        ->join("nhaxuatban", "sach.MaNXB", "=", "nhaxuatban.MaNXB")
        ->get();
        return view('add');
    }

    public function amnhac6() {
        $sgks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "GK"],
            ["TrangThai", "=", 1,],
        ])
        ->take(10)
        ->get();
        return view('amnhac6', [
            'sgks' => $sgks,
        ]);
    }

    public function GK() {
        $gks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "GK"]
        ])
        ->get();

        return view('GK', [
            'gks' => $gks,
        ]);
    }

    public function TK() {
        $tks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "TK"]
        ])
        ->get();

        return view('TK', [
            'tks' => $tks,
        ]);
    }

    public function DHQGHN() {
        $hns = DB::table("sach")
        ->where([
            ["MaNXB", "=", "DHQGHN"]
        ])
        ->get();

        return view('DHQGHN', [
            'hns' => $hns,
        ]);
    }
    use HasFactory;
}
