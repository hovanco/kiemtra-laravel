<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCategory extends Model
{
    protected $table = 'categoriestable';
    protected $fillable = ['id','Name','Quantity','Status'];

    public function products() {
    	//return $this->belongsTo('App\products');
    	//,'categories_id','id'
    }
}
