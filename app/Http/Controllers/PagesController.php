<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{
    public function __construct()
    {
        
    } 

    public function index()
    {
        $search = request()->query('search');
        if ($search){
            $posts= Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        } else {
            $posts= Post::simplePaginate(3);
        }

        return view('index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
}
