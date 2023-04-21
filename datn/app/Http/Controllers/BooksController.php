<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index() {
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
        return view('index', [
            'noibats' => $noibats,
            'sgks' => $sgks,
            'thamkhaos' => $thamkhaos
        ]);
    }
    use HasFactory;
}
