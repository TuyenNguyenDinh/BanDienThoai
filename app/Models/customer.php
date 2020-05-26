<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function bill_details(){
        return $this->hasMany('App\Models\Bill_Detail');
    }


    protected $fillable = [
        'ten',
        'sdt',
        'dia_chi',
        'mail',
    ];
}
