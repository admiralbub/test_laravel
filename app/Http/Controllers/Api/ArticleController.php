<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use App\Http\Requests\StorePostRequest;

class ArticleController extends Controller
{
    public function index()
    {
       
    }

    
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
        

        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:220|min:10',
            'content' => 'required|max:220|min:10',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
            $article = Article::create($request->all());
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:220|min:10',
            'content' => 'required|max:220|min:10',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
            $title = $request->input('title');
            $content = $request->input('content');

            $id_article = $request->input('id_article');
        

            $data=array('title'=>$title ,"content"=>$content,"updated_at"=> Carbon::now());
            Article::where('post_id', $id_article)->update($data);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article,$id)
    {

        Article::where('post_id',$id)->delete();
      
       // $article->delete();

        return response()->json(['success'=>'Record is successfully added']);
    }
}
