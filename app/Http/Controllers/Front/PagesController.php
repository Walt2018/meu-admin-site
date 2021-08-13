<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Front\Page;
use App\Models\Front\Post;
use App\Models\Front\Category;
use App\Models\Front\Service;
use App\Models\Front\Workcategory;
use App\Models\Front\Work;
use Illuminate\Queue\Worker;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function index($slug)
    {
        $page = Page::where('slug', '=', $slug)->firstOrFail();
	    return view('template.pages.page', compact('page'));
    }


    public function singlePost($slug)
    {
        //categorias
        $categoriesPost = Category::all();
       // $recentsPosts = Post::all();
        $recentsPosts = DB::table('posts')->limit(5)->get();

        $post = Post::where('slug', '=', $slug)->firstOrFail();
	    return view('template.pages.singlePost', compact('post','recentsPosts','categoriesPost'));
    }

    public function singleWork($slug)
    {
        //categorias
        $categorieswork = Workcategory::all();

        $work = Work::where('slug', '=', $slug)->firstOrFail();
	    return view('template.pages.singleWork', compact('work','categorieswork'));
    }

    public function singleService($slug)
    {

        $service = Service::where('slug', '=', $slug)->firstOrFail();
	    return view('template.pages.singleService', compact('service'));
    }


    public function allPosts()
    {

        $title ="Posts";
        $posts = DB::table('posts')->paginate(20);
        return view('template.pages.allPost', compact('title','posts'));

    }

    public function allWorks()
    {

        $title ="Portifólio";
        $categorieswork = Workcategory::all();
        $works = Work::all();
        return view('template.pages.allWork', compact('title','works','categorieswork'));

    }

    public function allServices()
    {

        $title ="Serviços";
        $services = Service::all();
        return view('template.pages.allServices', compact('title','services'));

    }

    public function sendEmail(Request $request, AppMailer $mailer){
       // $mailer->sendContact($params);

       $mailer->sendContact($request);
      // dd($request);
    }

    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }


}
