<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

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
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
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
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('collections',[
                'user1' => $user1,
                'all' => $all,
            ]);
        }
        else {
            return view('collections',[
                'all' => $all,
            ]);
        }
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
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('amnhac6', [
                'user1' => $user1,
                'sgks' => $sgks,
            ]);
        }
        else {
            return view('amnhac6', [
                'sgks' => $sgks,
            ]);
        }
    }

    public function GK() {
        $gks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "GK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('GK', [
                'user1' => $user1,
                'gks' => $gks,
            ]);
        }
        else {
            return view('GK', [
                'gks' => $gks,
            ]);
        }
    }

    public function GD() {
        $gks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "GK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('GD', [
                'user1' => $user1,
                'gks' => $gks,
            ]);
        }
        else {
            return view('GD', [
                'gks' => $gks,
            ]);
        }
    }

    public function TK() {
        $tks = DB::table("sach")
        ->where([
            ["MaLoaiSach", "=", "TK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('TK', [
                'user1' => $user1,
                'tks' => $tks,
            ]);
        }
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
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('DHQGHN', [
                'user1' => $user1,
                'hns' => $hns,
            ]);
        }
        return view('DHQGHN', [
            'hns' => $hns,
        ]);
    }
    use HasFactory;
}
