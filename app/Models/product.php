<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


    protected $fillable = [
        'categoies_id',
        'ten',
        'anh',
        'gia_sp',
        'so_luong',
        'kich_thuoc',
        'trong_luong',
        'mau_sac',
        'am_thanh',
        'bo_nho',
        'OS',
        'camera',
        'pin',
        'ket_noi',
    ];
}
