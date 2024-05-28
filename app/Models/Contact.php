<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $primaryKey = 'stt';

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
