@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>
<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-gray-0 block border-b-2 w-full text-6xl outline-none">

            <textarea 
                name="description" 
                placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl
                outline-none" rows="10">{{ $post->description }}</textarea>

            <div class="bg-gray-lighter pt-15">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-withe-rounded-lg shadow-lg trackeing-wide
                uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file"
                    name="image"
                    class="hidden">
                </label>

            </div>

            <button 
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg
                font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>

    </form>

</div>

@endsection