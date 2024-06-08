<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegUser extends Model
{
    use HasFactory;

    protected $table = "pre_register_users";
    protected $guarded = [];
}
