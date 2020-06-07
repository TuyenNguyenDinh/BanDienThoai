<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function billDetails(){
        return $this->hasMany('App\Models\BillDetail');
    }

    function category(){
        return $this->belongsTo('App\Models\Category');
    }

    protected $fillable = [
        'category_id',
        'ten',
        'anh',
        'gia_sp',
        'so_luong',
        'thong_tin_cu_the',
    ];
}
