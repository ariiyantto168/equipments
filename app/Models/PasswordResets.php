<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
    protected $table = 'password_resets';
    // protected $primaryKey = 'idpasswordresets';
    public $timestamps = false;

}
