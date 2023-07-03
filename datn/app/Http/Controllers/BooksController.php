<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        if(!isset($_COOKIE['is_logged'])) {
            setcookie('is_logged', 0, time() + 360000, '/');
          }
        $noibats = DB::table("saches")
                            ->where([
                                ["NoiBat", "=", 1],
                                ["TrangThai", "=", 1,],
                            ])
                            ->get();
        $sgks = DB::table("saches")
                        ->where([
                            ["MaLoaiSach", "=", "GK"],
                            ["TrangThai", "=", 1,],
                        ])
                        ->take(5)
                        ->get();
        $thamkhaos = DB::table("saches")
                        ->where([
                            ["MaLoaiSach", "=", "TK"],
                            ["TrangThai", "=", 1,],
                        ])
                        ->take(5)
                        ->get();

        
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']== 1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
                        ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                        ->get();
            return view('index', array(
                'user1' => $user1,
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos,
                'usercart' => $usercart
            ));
        } else {
            return view('index', [
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos, 
            ]);
        }
        
    }

    public function collections() {
        $all = DB::table("saches")->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
                            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                            ->get();
            return view('collections',[
                'user1' => $user1,
                'all' => $all,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('collections',[
                'all' => $all,
            ]);
        }
    }
    public function home() {
        $alls = DB::table("saches")
                    ->join("nhaxuatban", "sach.MaNXB", "=", "nhaxuatban.MaNXB")
                    ->get();
        return view('admin',[
            'alls' => $alls,
        ]);
    }

    public function add() {
        $alls = DB::table("saches")
        ->join("nhaxuatban", "sach.MaNXB", "=", "nhaxuatban.MaNXB")
        ->get();
        return view('add');
    }

    public function amnhac6() {
        $sgks = DB::table("saches")
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
        $gks = DB::table("saches")
        ->where([
            ["MaLoaiSach", "=", "GK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('GK', [
                'user1' => $user1,
                'gks' => $gks,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('GK', [
                'gks' => $gks,
            ]);
        }
    }

    public function TK() {
        $tks = DB::table("saches")
        ->where([
            ["MaLoaiSach", "=", "TK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('TK', [
                'user1' => $user1,
                'tks' => $tks,
                'usercart' => $usercart
            ]);
        }
        return view('TK', [
            'tks' => $tks,
        ]);
    }

    public function GD() {
        $gks = DB::table("saches")
        ->where([
            ["MaLoaiSach", "=", "GK"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('GD', [
                'user1' => $user1,
                'gks' => $gks,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('GD', [
                'gks' => $gks,
            ]);
        }
    }

    public function DHQGHN() {
        $hns = DB::table("saches")
        ->where([
            ["MaNXB", "=", "DHQGHN"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
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

    public function DN() {
        $dns = DB::table("saches")
        ->where([
            ["MaNXB", "=", "DN"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('DN', [
                'user1' => $user1,
                'dns' => $dns,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('DN', [
                'dns' => $dns,
            ]);
        }
    }

    public function TN() {
        $tns = DB::table("saches")
        ->where([
            ["MaNXB", "=", "TN"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('TN', [
                'user1' => $user1,
                'tns' => $tns,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('TN', [
                'tns' => $tns,
            ]);
        }
    }

    public function THTPHCM() {
        $thtphcms = DB::table("saches")
        ->where([
            ["MaNXB", "=", "THTPHCM"]
        ])
        ->get();
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->get();
            return view('THTPHCM', [
                'user1' => $user1,
                'thtphcms' => $thtphcms,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('THTPHCM', [
                'thtphcms' => $thtphcms,
            ]);
        }
    }

    public function search(Request $request) {
        $var = $request->search;
        /*$search_value = DB::table('sach')
                        ->where('TenSach', '=', '%' . $var . '%')
                        ->get();*/
        $search_value = DB::table('saches')
                        ->where('TenSach', 'LIKE', '%' . $var . '%')
                        ->get();
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('timkiem', [
                'user1' => $user1,
                'search_value' => $search_value
            ]);
        } else {
            return view('timkiem', [
                'search_value' => $search_value
            ]);  
        }
        
    }
    use HasFactory;
}
