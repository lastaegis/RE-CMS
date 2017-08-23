<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserModels extends Model
{
    public $timestamps = false;
    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $casts = [
        "user_id"           => "integer",
        "user_credential"   => "integer",
        "user_firstname"    => "string",
        "user_lastname"     => "string",
        "user_pictures"     => "string"
    ];
}
