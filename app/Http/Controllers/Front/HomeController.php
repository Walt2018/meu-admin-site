<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Front\Post;
use App\Models\Front\Work;
use App\Models\Front\Workcategory;
use App\Models\Front\Service;

class HomeController extends Controller
{

    public function index()
    {
        $title ="Escalavel - Página Inicial";

        $posts = $this->listPostsHome();//posts
        $works = $this->listWorksHome();//works
        $services = $this->listService();//services
        $categorieswork = $this->listCategoriesWorkHome();//works category

        return view('index',compact('title','posts','works','services','categorieswork'));
    }


    public function listPostsHome()
    {

        $posts = Post::all();
        return $posts;
    }

    public function listWorksHome()
    {

        $works = Work::all();
        return $works;
    }

    public function listCategoriesWorkHome()
    {

        $categories = Workcategory::all();
        return $categories;
    }

    public function listService()
    {
        $services = DB::table('services')->limit(9)->get();
	    return $services;

    }


    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

}
