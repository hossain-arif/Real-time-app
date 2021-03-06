<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $guarded = [];

	public function getRouteKeyName() {
		return 'slug';
	}

	public function user() {
		return $this->belongsTo( 'App\User' );
	}

	public function category() {
		return $this->belongsTo( 'App\Category' );
	}

	public function replies() {
		return $this->hasMany( 'App\Reply' );
	}

	public function getPathAttribute(){
		return "question/$this->slug";
	}
}
