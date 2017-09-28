<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountModels extends Model
{
    use SoftDeletes;
    protected $table = "account";
    protected $primaryKey = "id";
}
