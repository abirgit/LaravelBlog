@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase ">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700"alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a better web developer ?
            </h2>

            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus soluta distinctio..
            </p>

            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, nisi laboriosam. Sapiente veritatis quibusdam reprehenderit
            </p>

        </div>
    </div>
        <div class="text-center p-15 bg-black text-white">
            <h2 class="text-2xl pb-5 text-l">
                I am not a exper in anything.......
            </h2>
            <span class="font-extrabold block text-4xl py-1">
                UX Design
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Project Management
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Digital Strategy
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Backen Development
            </span>
        </div>
        <div class="text-center py-15">
            <span class="uppercase text-s text-gray-400">
                Blog
            </span>
            <h2 class="text-4xl font-bold py-10">
                Recent post
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam minima ut blanditiis dolor, voluptatum
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At, officia dolores! Cumque facilis error harum omnis numquam, sequi quia quisquam voluptas doloribus, nemo incidunt ipsa fuga, temporibus quae architecto iure?
            </p>
            <div class="sm:grid grid-cols-2 w-4/5 m-auto">
                <div class="flext bg-yellow-700 text-gray-100 pt-10">
                    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                        <span class="uppercase text-xs">
                            PHP
                        </span>
                        <h3 class="text-xl font-bold py=10">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus quam soluta deserunt ut nemo sequi ab, dolore quis incidunt voluptas, illum porro sed quas accusamus alias ducimus aperiam? Nisi, commodi?
                        </h3>
                        <a 
                        href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold 
                        py-3 px-5 rounded-3xl">
                            Find out more...
                        </a>
                    </div>
                </div>
                <div>
                    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700"alt="">
                </div>
            </div>
        </div>
@endsection