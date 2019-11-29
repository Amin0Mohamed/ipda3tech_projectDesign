<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=User::all();
        return view('dashboard.users.index',compact('users'));
    }


    public function create()
    {
        return view('dashboard.users.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );
        $change = new User($request->all());
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password =bcrypt($request->input('password'));
        $change->save();
        $change->attachRole('user');
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.users.index');
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('dashboard.users.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );
        $change =User::find($id);
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password =bcrypt($request->input('password'));
        $change->update();
        session()->flash('success',__('site.updated_successfully'));
        return redirect()->route('dashboard.users.index');
    }


    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    }
}
