<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        if (!isset($_COOKIE['is_logged'])) {
            setcookie('is_logged', 0, time() + 360000, '/');
        }
        $noibats = DB::table("saches")
            ->where([
                ["NoiBat", "=", 1],
                ["TrangThaiS", "=", 1,],
            ])
            ->get();
        $sgks = DB::table("saches")
            ->where([
                ["MaLoaiSach", "=", "GK"],
                ["TrangThaiS", "=", 1,],
            ])
            ->take(5)
            ->get();
        $thamkhaos = DB::table("saches")
            ->where([
                ["MaLoaiSach", "=", "TK"],
                ["TrangThaiS", "=", 1,],
            ])
            ->take(5)
            ->get();


        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('index', array(
                'user1' => $user1,
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos,
                'cartcount' => $cartcount,
            ));
        } else {
            return view('index', [
                'noibats' => $noibats,
                'sgks' => $sgks,
                'thamkhaos' => $thamkhaos,
            ]);
        }
    }

    public function collections()
    {
        $all = DB::table("saches")->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('collections', [
                'user1' => $user1,
                'all' => $all,
                'cartcount' => $cartcount,
            ]);
        } else {
            return view('collections', [
                'all' => $all,
            ]);
        }
    }

    public function GK()
    {
        $gks = DB::table("saches")
            ->where([
                ["MaLoaiSach", "=", "GK"],
                ["TrangThaiS", "=", 1],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('GK', [
                'user1' => $user1,
                'gks' => $gks,
                'cartcount' => $cartcount,
            ]);
        } else {
            return view('GK', [
                'gks' => $gks,
            ]);
        }
    }

    public function TK()
    {
        $tks = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaLoaiSach", "=", "TK"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('TK', [
                'user1' => $user1,
                'tks' => $tks,
                'cartcount' => $cartcount,
            ]);
        }
        return view('TK', [
            'tks' => $tks,
        ]);
    }

    public function KHTN()
    {
        $tks = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaLoaiSach", "=", "KHTN"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('KHTN', [
                'user1' => $user1,
                'tks' => $tks,
                'cartcount' => $cartcount,
            ]);
        }
        return view('KHTN', [
            'tks' => $tks,
        ]);
    }

    public function GD()
    {
        $gks = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaNXB", "=", "GD"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('GD', [
                'user1' => $user1,
                'gks' => $gks,
                'cartcount' => $cartcount,
            ]);
        } else {
            return view('GD', [
                'gks' => $gks,
            ]);
        }
    }

    public function DHQGHN()
    {
        $hns = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaNXB", "=", "DHQGHN"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
            ->where('TrangThaiCTGH', '=', 1)
            ->get();
            return view('DHQGHN', [
                'user1' => $user1,
                'hns' => $hns,
                'cartcount' => $cartcount,
            ]);
        }
        return view('DHQGHN', [
            'hns' => $hns,
        ]);
    }

    public function DN()
    {
        $dns = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaNXB", "=", "DN"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('DN', [
                'user1' => $user1,
                'dns' => $dns,
                'cartcount' => $cartcount,
            ]);
        } else {
            return view('DN', [
                'dns' => $dns,
            ]);
        }
    }

    public function TN()
    {
        $tns = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaNXB", "=", "TN"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('TN', [
                'user1' => $user1,
                'tns' => $tns,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('TN', [
                'tns' => $tns,
            ]);
        }
    }

    public function THTPHCM()
    {
        $thtphcms = DB::table("saches")
            ->where([
                ["TrangThaiS", "=", 1],
                ["MaNXB", "=", "THTPHCM"]
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('THTPHCM', [
                'user1' => $user1,
                'thtphcms' => $thtphcms,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('THTPHCM', [
                'thtphcms' => $thtphcms,
            ]);
        }
    }

    public function search(Request $request)
    {
        $var = $request->search;
        /*$search_value = DB::table('sach')
                        ->where('TenSach', '=', '%' . $var . '%')
                        ->get();*/
        $search_value = DB::table('saches')
            ->where('TenSach', 'LIKE', '%' . $var . '%')
            ->where('TrangThaiS', '=', 1)
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('timkiem', [
                'user1' => $user1,
                'search_value' => $search_value,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('timkiem', [
                'search_value' => $search_value
            ]);
        }
    }
    public function c2() {
        $c2s = DB::table('saches')
        ->where([
            ["TrangThaiS", "=", 1],
            ['MaLoaiSach', '=', 'GK'],
            ['TenSach', 'LIKE', '%Lớp 6%'],
        ])
        ->orWhere([
            ["TrangThaiS", "=", 1],
            ['MaLoaiSach', '=', 'GK'],
            ['TenSach', 'LIKE', '%Lớp 7%']
        ])
        ->orWhere([
            ["TrangThaiS", "=", 1],
            ['MaLoaiSach', '=', 'GK'],
            ['TenSach', 'LIKE', '%Lớp 8%']
        ])
        ->orWhere([
            ["TrangThaiS", "=", 1],
            ['MaLoaiSach', '=', 'GK'],
            ['TenSach', 'LIKE', '%Lớp 9%']
        ])
        ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('c2', [
                'user1' => $user1,
                'c2s' => $c2s,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('c2', [
                'c2s' => $c2s,
            ]);
        }
    }

    public function c3() {
        $c3s = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 10%'],
            ])
            ->orWhere([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 11%']
            ])
            ->orWhere([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 12%']
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('c3', [
                'user1' => $user1,
                'c3s' => $c3s,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('c3', [
                'c3s' => $c3s,
            ]);
        }
    }

    public function l6() {
        $l6 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 6%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l6', [
                'user1' => $user1,
                'l6s' => $l6,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l6', [
                'l6s' => $l6,
            ]);
        }
    }

    public function l7() {
        $l7 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 7%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l7', [
                'user1' => $user1,
                'l7s' => $l7,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l7', [
                'l7s' => $l7,
            ]);
        }
    }

    public function l8() {
        $l8 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 8%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l8', [
                'user1' => $user1,
                'l8s' => $l8,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l8', [
                'l8s' => $l8,
            ]);
        }
    }
    public function l9() {
        $l9 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 9%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l9', [
                'user1' => $user1,
                'l9s' => $l9,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l9', [
                'l9s' => $l9,
            ]);
        }
    }
    public function l10() {
        $l10 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 10%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l10', [
                'user1' => $user1,
                'l10s' => $l10,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l10', [
                'l10s' => $l10,
            ]);
        }
    }
    public function l11() {
        $l11 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 11%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l11', [
                'user1' => $user1,
                'l11s' => $l11,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l11', [
                'l11s' => $l11,
            ]);
        }
    }

    public function l12() {
        $l12 = DB::table('saches')
            ->where([
                ["TrangThaiS", "=", 1],
                ['MaLoaiSach', '=', 'GK'],
                ['TenSach', 'LIKE', '%Lớp 12%'],
            ])
            ->get();
        if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=', $_COOKIE['id'])->get();
            $cartcount = DB::table('ctgiohang')
                ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                ->where('TrangThaiCTGH', '=', 1)
                ->get();
            return view('l12', [
                'user1' => $user1,
                'l12s' => $l12,
                'cartcount' => $cartcount
            ]);
        } else {
            return view('l12', [
                'l12s' => $l12,
            ]);
        }
    }
    use HasFactory;
}
