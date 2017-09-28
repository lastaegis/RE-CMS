<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProvinceModel
 * @package App\Http\Models
 */
class ProvinceModel extends Model
{
    /**
     * @var string
     */
    protected $table = "province";
    /**
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo("App\Http\Models\CountryModel","country_id","id");
    }
}
