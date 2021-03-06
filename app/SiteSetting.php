<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['site_id','theme'];
	
	function site(){
		return $this->belongsTo('App\Site');
	}
}
