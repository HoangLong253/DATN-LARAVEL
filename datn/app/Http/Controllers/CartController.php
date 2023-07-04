<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sach;

class CartController extends Controller
{
    public function giohang() {
        if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
            $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
            $usercart = DB::table('ctgiohang')
                            ->where('MaGioHang', '=', $user1[0]->MaGioHang)
                            ->get();
            return view('giohang', [
                'user1' => $user1,
                'usercart' => $usercart
            ]);
        }
        else {
            return view('giohang');
        }
    }

    public function them($id, $count) {
        /*$book = DB::table('saches')
                    ->where('MaSach', '=', $id)->get();*/
        $book = sach::where('MaSach', '=', $id)->get();
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            if($book[0]->PhanTramGiam == null) {
                $cart[$id] = [
                    "name" => $book[0]->TenSach,
                    "quantity" => $count,
                    "price" => $book[0]->DonGia,
                    "image" => $book[0]->HinhAnh,
                    "loaisach" => $book[0]->MaLoaiSach
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Sách đã được thêm vào giỏ hàng');
            } else {
                $cart[$id] = [
                    "name" => $book[0]->TenSach,
                    "quantity" => $count,
                    "price" => $book[0]->DonGia - ($book[0]->DonGia * $book[0]->PhanTramGiam),
                    "image" => $book[0]->HinhAnh,
                    "loaisach" => $book[0]->MaLoaiSach
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Sách đã được thêm vào giỏ hàng');  
            }
        }
    }

    public function capnhat(Request $request) {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Sách đã được thêm vào giỏ hàng');
        }
    }

    public function xoa(Request $request) {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Sách đã được xoá');
        }
    }
    //
}
