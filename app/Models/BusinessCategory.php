<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    protected $fillable = ['name', 'description'];

    //has many logos
    public function logos()
    {
        return $this->hasMany(BusinessCategoryLogo::class);
    }
}
