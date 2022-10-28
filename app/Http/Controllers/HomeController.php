<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
   public function index(){
  	 	$articles_db = DB::table('articles')->whereNull('deleted_at')->get();

        return view('home' , ['articles' => $articles_db]);
  }
}
