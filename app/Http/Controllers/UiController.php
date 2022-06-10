<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Project;
use App\Models\StudentCount;
use App\Models\Post;
use App\Models\Category;
use App\Models\LikesDislike;
use App\Models\Comment;
use Auth;

use Illuminate\Http\Request;

class UiController extends Controller
{
   public function index(){
       $skills = Skill::all();
       $projects =Project::all();
       $studentcounts = StudentCount::find(1);
       $posts=Post::latest()->take(6)->get();
       return view('ui.index', compact('skills','projects','studentcounts','posts'));
   }
   public function postIndex()
   {
    $posts=Post::all();
    $categories=Category::all();
    return view('ui.posts', compact('posts','categories'));
   }
   public function postDetail($id)
   {
    if(!Auth::check()){
        return redirect('/login');
    }
    $post =Post::find($id);
    $likes =LikesDislike::where('post_id', $id)->where('type','like')->get();
    $dislikes =LikesDislike::where('post_id', $id)->where('type','dislike')->get();
    $comments = Comment::where('post_id', $id)->where('status','show')->get();
    $likeStatus =LikesDislike::where('post_id', $id)->where('user_id',Auth::user()->id)->first();
    return view('ui.postdetail', compact('post','likes','dislikes','likeStatus','comments'));
   }
   public function search(Request $request)
   {
    $categories=Category::all();
    $searchData =$request['search_data'];
    $posts=Post::where('title','like',"%".$searchData."%")->orWhere('content','like',"%".$searchData."%")->
    orWhereHas('category',function($category) use($searchData){
        $category->where('name','like',"%".$searchData."%");
    })->get();
    return view('ui.posts', compact('posts','categories'));
   }
   public function searchByCategory($categoryId)
   {
    $categories=Category::all();
    $posts=Post::where('category_id','=',$categoryId)->get();
    return view('ui.posts', compact('posts','categories'));
   }
}
