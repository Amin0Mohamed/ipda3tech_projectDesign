<?php

namespace App\Http\Controllers;

use App\Client;
use App\Page;
use App\Photo;
use App\Post;
use App\Setting;
use Illuminate\Http\Request;
use App\Project;
use App\Service;
use Illuminate\Support\Facades\DB;

class Ipda3Controller extends Controller
{
    public function index()
    {
        $services = Service::all();
        $our_workes = Project::paginate(6);
        $posts = Post::paginate(4);
        $clients = Client::all();
        $pages = Page::all()->last();
        $setting = Setting::all()->first();
        return view('front_end.index',compact('services','our_workes','posts','clients','pages','setting'));
    }

    public function artical()
    {
        $posts = Post::paginate(4);
        return view('front_end.articals',compact('posts'));
    }

    public function project()
    {
        return view('front_end.project_details');
    }

    public function ourWork()
    {
        $our_workes = Project::paginate(6);
        return view('front_end.our-workes',compact('our_workes'));
    }

    public function all_info($post_id)
    {
        $all_posts = Post::find($post_id);

        $all_posts->views = $all_posts->views+1;
        $all_posts->save();

        return view('front_end.posts',compact('all_posts'));
    }

    public function product_detail($product_id)
    {
       $all_products =Project::find($product_id);
//       $photos_project = DB::table('photos')->where('project_id',$product_id)->get();
        return view('front_end.project-details',compact('all_products'));
    }



}
