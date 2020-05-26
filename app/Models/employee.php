<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function bills(){
        return $this->hasMany('App\Models\Bill');
    }

    protected $fillable = [
        'ten',
        'ngay_sinh',
        'dia_chi',
        'sdt',
        'tai_khoan',
        'mat_khau',
    ];
}
