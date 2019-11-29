<?php

namespace App\Http\Controllers\Dashboard;

use App\Photo;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{

    public function index()
    {
        $projects=Project::all();
        return view('dashboard.projects.index',compact('projects'));
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.projects.create',compact('users'));
    }
//******************************



//***********************************

    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'cover_image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'slug'=>'required|string',
                'photos'=>'required|array',

            ]
        );
        $change = $request->user()->projects()->create($request->all());
//*****************************
        $photos = array();
        if($files = $request->file('photos')){
            foreach($files as $file)
            {
                $fileName =$file->getClientOriginalName();
                $filename = pathinfo($fileName, PATHINFO_FILENAME);
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);

                $file->move(public_path('productimages'),$fileName);

                $change->photos()->create([
                    'url' => 'productimages/'.$filename,
                    'ext' => $extension
                ]);
            }
        }
//***********************************
        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;
            $cover_image = $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path('productimages'), $cover_image);
            $change->cover_image = $cover_image;
        }
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.projects.index');
    }

    public function edit($id)
    {
        $projects=Project::find($id);
        return view('dashboard.projects.edit',compact('projects'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'cover_image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'slug'=>'required|string',

            ]
        );
        $change = $request->user()->projects()->find($id);
        $change->update($request->except('image'));

        $change->photos()->delete();

        $photos = array();
        if($files = $request->file('photos')){
            foreach($files as $file)
            {
                $fileName =$file->getClientOriginalName();
                $filename = pathinfo($fileName, PATHINFO_FILENAME);
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);

                $file->move(public_path('productimages'),$fileName);

                $change->photos()->create([
                    'url' => 'productimages/'.$filename,
                    'ext' => $extension
                ]);
            }
        }


        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;

            $cover_image = $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path('productimages'), $cover_image);
            $change->cover_image = $cover_image;
            $change->save();
        }
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.projects.index');
    }


    public function destroy($id)
    {
        $projects=Project::find($id);
        $projects->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.projects.index');
    }
}
