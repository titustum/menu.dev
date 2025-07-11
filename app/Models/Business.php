<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['user_email', 'business_name', 'business_category_id', 'mpesa_paybill', 'mpesa_account'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }


}
