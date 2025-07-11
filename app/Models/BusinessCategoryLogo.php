<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessCategoryLogo extends Model
{
    protected $fillable = ['business_category_id', 'image_path'];

    //belongs to Business category
    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }
}
