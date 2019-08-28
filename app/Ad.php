<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    protected $fillable = [
        'item_name', 'category_id', 'region_id','condition','negotiable','phone','description','image1','image2','image3','price','approve'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){

        return $this->hasOne('App\Category');
    }

    public function region(){

        return $this->hasOne('App\Region');
    }
}
