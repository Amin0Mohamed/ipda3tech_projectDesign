<?php

namespace App\Http\Controllers\Dashboard;

use App\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    public function index()
    {
        $clients=Client::all();
        return view('dashboard.clients.index',compact('clients'));
    }

    public function create()
    {
        $users = User::all();
        return view('dashboard.clients.create',compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',
            ]
        );

        $change = $request->user()->clients()->create($request->all());
        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;
        }
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.clients.index');
    }

    public function edit($id)
    {
        $client=Client::find($id);
        return view('dashboard.clients.edit',compact('client'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'image'=>'required|image|mimes:jpeg,jpg,png,gif',
            ]
        );
        $change = $request->user()->clients()->find($id);
        $change->update($request->except('image'));

        if($request->hasFile('image')) {
            $imagee = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productimages'), $imagee);
            $change->image = $imagee;
            $change->save();
        }

        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.clients.index');
    }


    public function destroy($id)
    {
        $clients=Client::find($id);
        $clients->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.clients.index');
    }

}
