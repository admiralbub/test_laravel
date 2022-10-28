<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles_db = DB::table('articles')->whereNull('deleted_at')->get();

        return view('admin.articles' , ['articles' => $articles_db]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         $validator = \Validator::make($request->all(), [
            'title' => 'required|max:220|min:10',
            'content' => 'required|max:220|min:10',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }


        $title = $request->input('title');
        $content = $request->input('content');

        $data=array('title'=>$title ,"content"=>$content,"created_at"=> Carbon::now());
        DB::table('articles')->insert($data);


        //return response()->json(['success'=>'Record is successfully added']);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles_db = DB::table('articles')->where('post_id', $id)->first();

        return view('admin.edit_article' , ['article' => $articles_db]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:220|min:10',
            'content' => 'required|max:220|min:10',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }


        $title = $request->input('title');
        $content = $request->input('content');

        $id_article = $request->input('id_article');
        

        $data=array('title'=>$title ,"content"=>$content,"updated_at"=> Carbon::now());


        DB::table('articles')->where('post_id',$id_article)->update($data);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Article::where('post_id',$id)->delete();
         //return redirect('/admin/articles');
    }
}
