<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureDetails extends Model
{
    protected $table = 'features_detailes';
    //'feature_id', 'name_ar', 'name_en', 'details_ar', 'details_en',
    Protected $fillable=[
        'feature_id', 'name_ar', 'name_en', 'details_ar', 'details_en',
    ];

     public function feature()
    {
        return $this->belongsTo('App\Feature');
    }  
    public function productFeature()
    {
        return $this->hasMany('App\ProductFeature');
    }
}
