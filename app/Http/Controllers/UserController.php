<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Делаем кеширование БД:Users,Articles
        $value = Cache::remember('users', 60, function(){
            return DB::table('users')->get();
        });

        $value = Cache::remember('articles', 60, function(){
            return DB::table('articles')->get();
        });

        
    
    }

  
}
