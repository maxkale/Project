<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'mobile_number',
        'created_at',
        'updated_at',
    ];

}
