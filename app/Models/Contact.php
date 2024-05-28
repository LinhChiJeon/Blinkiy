<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'stt'; // Khóa chính của bảng

    protected $fillable = [
        'stt',
        'TenKhachHang',
        'SDT',
        'Email',
        'TieuDe',
        'CauHoi',
        'PhanHoi',
        'PhanHoi_TieuDe',
        'PhanHoi_NoiDung',
    ];
}
