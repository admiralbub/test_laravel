<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{

    public function __construct() {
      $this->middleware('auth');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function show($id)
    {
        $articles_db = DB::table('articles')->where('post_id', $id)->first();

        return view('blog' , ['article' => $articles_db]);
    }

   
}
