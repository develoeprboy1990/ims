<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'fname',
        'cnic',
        'email',
        'phone',
        'phone2',
        'address',
    ];
}
