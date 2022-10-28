<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Article extends Model
{
	use SoftDeletes;
    use HasFactory;
    
    protected $fillable = ['title', 'content'];

/*
    parent::boot();

    static::updating(function ($instance) {
	   // update cache content
	   Cache::put('articles',$instance);
	});

	static::deleting(function ($instance) {
	       
	    Cache::forget('articles');
	 });*/
   
}
