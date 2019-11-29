<?php

namespace App\Http\Controllers\Dashboard;

use App\Page;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index()
    {
        $pages=Page::all();
        return view('dashboard.pages.index',compact('pages'));
    }

    public function create()
    {
        return view('dashboard.pages.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required',
                'show_in_menu'=>'required',
                'slug'=>'required',
            ]
        );

        $change = $request->user()->pages()->create($request->all());
        if($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imageName);
            $change->image = $imageName;
        }
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.pages.index');
    }

    public function edit($id)
    {
        $pages=Page::find($id);
        return view('dashboard.pages.edit',compact('pages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required',
                'show_in_menu'=>'required',
                'slug'=>'required',
            ]
        );
        $change = $request->user()->pages()->find($id);
        $change->update($request->except('image'));
        if($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imageName);
            $change->image = $imageName;
            $change->save();
        }
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.pages.index');
    }

    public function destroy($id)
    {
        $pages=Page::find($id);
        $pages->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.pages.index');
    }
}
