<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Post;
use App\Models\Advertise;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public  function __construct()
    {
        $company = Company::first();
        $categories = Category::all();
        View::share([
            "company" => $company,
            "categories" => $categories,

        ]);
    }
    public function home(){
        $latest_news = Post::where('status','approved')->orderBy('id','desc')->first();
        $trending_news = Post::where('status','approved')->orderBy('views','desc')->limit(8)->get();
        return view('frontend.home',compact('trending_news','latest_news'));
    }
    public function category($slug){
       $category = Category::where('slug',$slug)->first();
       $posts=  $category->posts()->paginate(1);
       $advertises = Advertise::where('status',1)->get();
       return view('frontend.category',compact('posts','advertises'));
    }

    public function news($id){
        $news = Post::findOrFail($id);

        // $cookie - Cookie::get('post');
        $cookie = Cookie::get('post');
        if(!$cookie){
            // Cookie::queue('post',$news->id,60);
            setCookie("post",$news->id,0,"/");
            $news->increment('views');
        }
        $advertises = Advertise::where('status',1)->get();
        return view('frontend.news',compact('news', 'advertises'));
    }
    public function search(Request $request){
        $q =  $request->q;

        $news = Post::where('title','like','%'. $q .'%')->first();

        $news->increment('views');


        $cookie = Cookie::get('post',$news->id,60);
        if(!$cookie){
            Cookie::queue('post',$news->id,60);
            $news->increment('views');
        }

        $advertises = Advertise::where('status',1)->get();

        return view('/frontend.news',compact('news','advertises'));
    }
}
