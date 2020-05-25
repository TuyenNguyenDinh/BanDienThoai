<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function bill_detail(){
        return $this->hasMany('App\Models\Bill_detail');
    }
    function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    function employee(){
        return $this->belongsTo('App\Models\Employee','employee_id');
    }


    protected $fillable = [
        'customer_id',
        'ngaylap_hd',
        'noi_nhan_hang',
        'tong_tien',
        'ghi_chu',
        'employee_id',
    ];
}
