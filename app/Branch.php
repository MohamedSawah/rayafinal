<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //'id', 'country_id', 'name_ar',
    //  'name_en', 'address_en', 'address_ar', 'phone', 'email', 'created_at', 'updated_at'
    
    protected $fillable = [
       'country_id', 'name_ar', 'name_en', 'address_en', 'address_ar', 'phone', 'email',
    ];
    
    public function country()
    {
        return $this->belongsTo('App\Country');
    }


}
  
