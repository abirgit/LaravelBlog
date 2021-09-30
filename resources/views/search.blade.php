@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Mobile Automation Tester?
                </h1>
                <a href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase ">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <form class="w-full max-w-sm"></form>
    <div class="w-8/12 p-8 mx-auto items-center">
        <div class="bg-white flex items-center rounded-full shadow-xl">
          <input class="rounded-l-full w-full px-4 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">
          
          <div class="P-4">
            <button class="bg-blue-500 text-white rounded-full py-4 px-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                Search
            </button>
            </div>
          </div>
        </div>
      </div>

    @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>
    
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> {{ $post->user->name }}</span>
            </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
            </p>
    
            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg
            font-extrabold py-4 px-8 rounded-3xl" >
                keep Reading
            </a>
    
            @if (isset(Auth::user()->id) && Auth::user()->id == 
            $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>
                <span class="float-right">
                    <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        
    
                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>
    
                    </form>
    
                </span>
            @endif
        </div>
    </div>
@endforeach
    
@endsection