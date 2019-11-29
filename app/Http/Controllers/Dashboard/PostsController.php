<?php

namespace App\Http\Controllers\Dashboard;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function index()
    {
        $posts=Post::all();
        return view('dashboard.posts.index',compact('posts'));
    }


    public function create()
    {
        return view('dashboard.posts.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',
                'slug'=>'required',
            ]
        );
//        ******************************
        $change = $request->user()->posts()->create($request->all());

        if($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imageName);
            $change->image = $imageName;
        }
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.posts.index');
    }




    public function edit($id)
    {
        $post=Post::find($id);
        return view('dashboard.posts.edit',compact('post'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',
                'slug'=>'required',

            ]
        );
//        ******************************
        $change = $request->user()->posts()->find($id);
        $change->update($request->except('image'));
        if($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imageName);
            $change->image = $imageName;
            $change->save();
        }
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.posts.index');
    }

    public function destroy($id)
    {
        $user=Post::find($id);
        $user->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.posts.index');
    }
}
