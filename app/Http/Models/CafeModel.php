<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CafeModel
 * @package App\Http\Models
 */
class CafeModel extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = "cafe";

    /**
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo("App\Http\Models\DistrictModel","district_id","id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function media()
    {
        return $this->hasMany(CafeFileModel::class,"cafe_id","id");
    }

    public function gallery()
    {
        return $this->hasMany(CafeFileModel::class, "cafe_id","id")
            ->where("type","=","gallery");
    }

    public function thumbnail()
    {
        return $this->hasMany(CafeFileModel::class,"cafe_id","id")
            ->where("type","=","thumbnail");
    }
}
