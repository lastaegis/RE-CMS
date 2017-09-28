<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CafeFileModel extends Model
{
    protected $table = "cafe_file";
    protected $primaryKey = "id";

    public function detail()
    {
        return $this->belongsTo(FileModel::class,"file_id","id");
    }

    public function thumbnail()
    {
        return $this->belongsTo(FileModel::class,"file_id","id");
    }
}
