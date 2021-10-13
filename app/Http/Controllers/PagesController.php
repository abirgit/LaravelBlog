<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{
    public function __construct()
    {
        
    } 

    public function index()
    {
     //   $search = request()->query('search');
     //   if ($search){
         if(isset($_GET['search'])){
         $search_text = $_GET['search'];
         $post = Post::where('title', 'LIKE', '%'. $search_text .'%')->simplePaginate(3);
        } else {
            $posts= Post::simplePaginate(10);
        }

        return view('index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
}
