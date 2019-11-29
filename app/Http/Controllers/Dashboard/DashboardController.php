<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }//end index function

//    public function login(){
//        return view('dashboard.login');
//    }//end index function
//
//    public function loginEnter(Request $request)
//    {
//        $Remm = $request->get('email');
//        $Rpss = $request->get('password');
////        if(auth()->guard('web')->attempt(['email'=>$Remm,'password'=>$Rpss])){
////            return redirect()->route('dashboard.index');
////            //dd('ok');
////        }else{
////            return redirect()->route('dashboard.login')->with('success', 'enter you data');
////        }
//        if ($request->isMethod('post')) {
//            $Rpasss = md5($Rpss);
//            $dataM = User::where([
//                ['email', '=', $Remm],
//                ['password', '=', $Rpasss]
//            ])->first();
//            $id = $dataM->id;
//            $name = $dataM->name;
//            return redirect()->route('dashboard.index',
//                [
//                    'id' => $request->session()->put('id',$id),
//                    'name' => $request->session()->put('name', $name)
//                ]);
//        }
//           return back();
//    }
//
//    public function logoutpage(Request $request){
//         $request->session()->forget('id');
//         $request->session()->forget('name');
//        return view('dashboard.login');
//    }

}//end class
