<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $articles = DB::table('articles')->get();
        return view('blogs/blog',compact('articles'));
    }
    public function create(){
        return view('blogs/blog-create');
    }
    public function store(Request $request){
        dd('succ',$request->all());
        // DB::table('articles')->insert([
        //     "title" => $request->title,
        //     "auther" => $request->auther,
        //     "content" => $request->content,
        //     "created_at" => \Carbon\Carbon::now('Asia/Taipei'),
        //     "updated_at" => \Carbon\Carbon::now('Asia/Taipei'),
        // ]);
        Article::create([
            "title" => $request->title,
            "auther" => $request->auther,
            "content" => $request->content,
            // "created_at" => \Carbon\Carbon::now(),
            // "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/blog');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('blogs/blog-edit',compact('article'));
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->auther = $request->auther;
        $article->content = $request->content;
        $article->save();
        return redirect('/blog');
    }
    public function delete($id, Request $request){
        // $article = Article::find($id);
        // $article->delete();
        Article::find($id)->delete();
        return redirect('/blog');
    }
}
