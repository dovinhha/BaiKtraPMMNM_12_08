<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhsachtiemchung extends Model
{
    use HasFactory;

    protected $table = 'danhsachtienchungs';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'diachi',
        'doituongut',
        'gioitinh',
        'ngaysinh',
        'sodienthoai',
        'email'
    ];
}
