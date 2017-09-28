<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = "country";
    protected $primaryKey = "id";

    /**
     * Getter Country
     * @param $value
     * @return string
     */
    public function getCountryAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Getter Slug
     * @param $value
     * @return string
     */
    public function getSlugAttribute($value)
    {
        return strtolower($value);
    }

    /**
     * Setter Country
     * @param $value
     */
    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucfirst($value);
    }

    /**
     * Setter Slug
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtolower($value);
    }
}
