<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function giohang() {
        if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            return view('giohang', [
                'user1' => $user1,
            ]);
        }
        else {
            return view('giohang');
        }
    }
    //
}
