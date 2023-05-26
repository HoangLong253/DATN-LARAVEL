<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    use HasFactory;
    protected $fillable = [
        'HoTen', 
        'Email',
        'SDT',
        'TrangThai',
        'MatKhau',
    ];
}