<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories=Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
            'title'=>'required',
            'content'=>'required',
        ]);
        $image = $request->image;
        $imageName =uniqid().'_'.$image->getClientOriginalName();
        $image->storeAs('public/post-images',$imageName);
        Post::create([
            'category_id'=>$request->category_id,
            'image'=>$imageName,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect('/admin/posts')->with('successAlert','You have successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categories=Category::all();
        $post=Post::find($id);
        return view('admin.post.edit',compact('post','categories'));
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
        $request->validate([
            'category_id'=>'required',
            'image'=>'nullable|mimes:jpg,png,jpeg,gif,svg',
            'title'=>'required',
            'content'=>'required',
        ]);
        $post = Post::find($id);
        if($request->hasFile('image')){
            $postImage =$post->image;
            File::delete('storage/post-images'.$postImage);
            $image = $request->image;
            $imageName =uniqid().'_'.$image->getClientOriginalName();
            $image->storeAs('public/post-images',$imageName);
            $post->update([
                'category_id' => $request->category_id,
                'image'=>$imageName,
                'title'=>$request->title,
                'content'=>$request->content,
            ]);
        }else {
            $post->update([
                'category_id' => $request->category_id,
                'title'=>$request->title,
                'content'=>$request->content,
            ]);
        }
        return redirect('admin/posts')->with('successAlert','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $postImage =$post->image;
        File::delete('storage/post-images'.$postImage);
        $post->delete();
        return redirect('/admin/posts')->with('successAlert','You have successfully deleted');
    }
}
