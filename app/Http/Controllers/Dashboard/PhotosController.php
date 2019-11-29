<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\Photo;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{

    public function index()
    {
        $photos=Photo::all();
        return view('dashboard.photos.index',compact('photos'));
    }


    public function create()
    {
        $projects = Project::all();
        return view('dashboard.photos.create',compact('projects'));
    }


//    public function store(Request $request)
//    {
//        $request->validate(
//            [
//                'url'=>'required',
//                'ext'=>'required',
//                'project_id'=>'required'
//            ]
//        );
//        $change = new Photo($request->all());
//        $change->url = $request->input('url');
//        $change->ext = $request->input('ext');
//        $change->save();
//
//        session()->flash('success',__('site.added_successfully'));
//        return redirect()->route('dashboard.photos.index');
//    }


    public function edit($id)
    {
        $photos=Photo::find($id);
        return view('dashboard.photos.edit',compact('photos'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'url'=>'required',
                'ext'=>'required',
            ]
        );
        $change =Photo::find($id);
        $change->url = $request->input('url');
        $change->ext = $request->input('ext');
        $change->update();

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.photos.index');
    }

    public function destroy($id)
    {
        $user=Photo::find($id);
        $user->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.photos.index');
    }
}
