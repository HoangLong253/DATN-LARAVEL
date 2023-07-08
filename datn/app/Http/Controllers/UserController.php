<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request) {
        $messages = [
            'id.required' => 'Mã hóa đơn không được để trống',
            'name.required' => 'Tên Nhân viên không được để trống', 
            'total.required' => 'Tổng tiền không được để trống', 
        ];
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
             'total' => 'required',  
        ], $messages);

        $id = $request->id;
        $name = $request->name; 
        $total = $request->total; 
        $check = DB::table('hoadonnhap')
        ->insert([
            'MaHDNhap' => $id,
            'MaNV' => $name,
             'TongTien' => $total,    
            'TrangThai' => 1, 
        ]);
        if($check) {
            return redirect()->route('add_invoice_import')->with('success', 'Thêm hóa đơn nhập thành công.');
        } else {
            return redirect()->route('add_invoice_import')->with('fail', 'Thêm hóa đơn nhập không thành công.');
        }
    }
}
