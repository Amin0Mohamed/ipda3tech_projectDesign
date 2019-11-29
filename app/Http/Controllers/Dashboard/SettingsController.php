<?php

namespace App\Http\Controllers\Dashboard;

use App\Service;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function index()
    {
        $settings=Setting::all();
        return view('dashboard.settings.index',compact('settings'));
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.settings.create',compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'header_logo' => 'required|image|mimes:jpg,png,jpeg,gif',
                'footer_logo' => 'required|image|mimes:jpg,png,jpeg,gif',
                'slogan' => 'required',
                'intro_image' => 'required|image|mimes:jpg,png,jpeg,gif',
                'address' => 'required',
                'fb_link' => 'required',
                'tw_link' => 'required',
                'github_link' => 'required',
                'whatsupp_number' => 'required',
            ]
        );
        $change = $request->user()->settings()->create($request->all());
        if ($request->hasFile('header_logo') && $request->hasFile('footer_logo') && $request->hasFile('intro_image'))
        {
            $header_logo = $request->file('header_logo')->getClientOriginalName();
            $request->file('header_logo')->move(public_path('productimages'), $header_logo);
            $change->header_logo = $header_logo;

            $footer_logo = $request->file('footer_logo')->getClientOriginalName();
            $request->file('footer_logo')->move(public_path('productimages'), $footer_logo);
            $change->footer_logo = $footer_logo;

            $intro_image = $request->file('intro_image')->getClientOriginalName();
            $request->file('intro_image')->move(public_path('productimages'), $intro_image);
            $change->intro_image = $intro_image;
        }

        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.settings.index');
    }

    public function edit($id)
    {
        $users = User::all();
        $setting=Setting::find($id);
        return view('dashboard.settings.edit',compact('users','setting'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'header_logo' => 'required|image|mimes:jpg,png,jpeg,gif',
                'footer_logo' => 'required|image|mimes:jpg,png,jpeg,gif',
                'slogan' => 'required',
                'intro_image' => 'required|image|mimes:jpg,png,jpeg,gif',
                'address' => 'required',
                'fb_link' => 'required',
                'tw_link' => 'required',
                'github_link' => 'required',
                'whatsupp_number' => 'required',
            ]
        );
        $change = $request->user()->settings()->find($id);
        $change->update($request->except('image'));
        if ($request->hasFile('header_logo') && $request->hasFile('footer_logo') && $request->hasFile('intro_image'))
        {
            $header_logo = $request->file('header_logo')->getClientOriginalName();
            $request->file('header_logo')->move(public_path('productimages'), $header_logo);
            $change->header_logo = $header_logo;

            $footer_logo = $request->file('footer_logo')->getClientOriginalName();
            $request->file('footer_logo')->move(public_path('productimages'), $footer_logo);
            $change->footer_logo = $footer_logo;

            $intro_image = $request->file('intro_image')->getClientOriginalName();
            $request->file('intro_image')->move(public_path('productimages'), $intro_image);
            $change->intro_image = $intro_image;

            $change->save();
        }

        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.settings.index');
    }


    public function destroy($id)
    {
        $settings=Setting::find($id);
        $settings->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.settings.index');
    }
}
