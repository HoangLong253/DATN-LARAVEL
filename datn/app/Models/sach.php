<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSach',
        'MaNXB',
        'MaLoaiSach',
        'PhanTramGiam',
        'TenSach',
        'MoTa', 
        'HinhAnh', 
        'DonGia',
        'TrangThai',
        'NoiBat'
    ];  
}
