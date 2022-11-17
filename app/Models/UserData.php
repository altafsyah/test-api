<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserData extends Authenticatable
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $guarded = ['id'];

    protected $table = "user_data";
}
