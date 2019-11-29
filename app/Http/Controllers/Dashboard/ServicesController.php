<?php

namespace App\Http\Controllers\Dashboard;

use App\Project;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{

    public function index()
    {
        $services=Service::all();
        return view('dashboard.services.index',compact('services'));
    }
    public function create()
    {
        $users = User::all();
        return view('dashboard.services.create',compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'slug'=>'required|string',
                'is_active'=>'required',
            ]
        );
        $change = $request->user()->services()->create($request->all());
        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;
        }
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.services.index');
    }

    public function edit($id)
    {
        $users = User::all();
        $services=Service::find($id);
        return view('dashboard.services.edit',compact('users','services'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required|image|mimes:jpg,png,jpeg,gif',
                'slug'=>'required|string',
                'is_active'=>'required',

            ]
        );
        $change = $request->user()->services()->find($id);
        $change->update($request->except('image'));

        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;
            $change->save();
        }
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.services.index');
    }


    public function destroy($id)
    {
        $services=Service::find($id);
        $services->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.services.index');
    }

}
