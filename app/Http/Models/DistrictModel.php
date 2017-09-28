<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DistrictModel
 * @package App\Http\Models
 */
class DistrictModel extends Model
{
    /**
     * @var string
     */
    protected $table = "district";
    /**
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo("App\Http\Models\CityModel","city_id","id");
    }
}
