<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CityModel
 * @package App\Http\Models
 */
class CityModel extends Model
{
    /**
     * @var string
     */
    protected $table = "city";
    /**
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo("App\Http\Models\ProvinceModel","province_id","id");
    }
}
