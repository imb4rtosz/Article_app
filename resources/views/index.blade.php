@extends('layouts.app')

@section('content')

<div class ="background-image grid grid-cols-1 m-auto">
    <div class="flex text=blue-100 pt-10 ">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Add your article
            </h1>
            <a href="/article"
            class="text-center bg-blue-100 text-gray-500 py-2 px-4 font-bold text-xl uppercase">
                More informations...
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-15 w-5/6 mx-auto py-15">

    <div>
        <img src="https://cdn.pixabay.com/photo/2016/01/09/18/28/notepad-1130743_960_720.jpg"
           width="750"  alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-teal-800">
            Struggling to be a better web developer?
        </h2>
        <p class="py-8 text-teal-800 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
        </p>

        <p class="font-extrabold text-teal-900 text-s pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
        </p>
        <a 
        href="/article"
        class="uppercase bg-gray-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
        Find Out More
    </a>
    </div>

</div>


<div class="text-center p-15 bg-gray-900 text-white">
    

    <span class="font-bold block text-4xl py-1">
        Travels
    </span>
    <span class="font-bold block text-4xl py-1">
        New technologies
    </span>
    <span class="font-bold block text-4xl py-1">
        Sport
    </span>
    <span class="font-bold block text-4xl py-1">
        History
    </span>
</div>

<div class="text-center py-15">

    <h2 class="text-4xl font-bold py-10 text-teal-700">
        Recent Article
    </h2>

    <p class="m-auto w-4/5 text-gray-900">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5  gap-15 m-auto">
    <div class="flex bg-gray-900 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>

            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
            </h3>

            <a 
                href=""
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:text-teal-700 hover:border-teal-700">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/01/09/18/28/notepad-1130743_960_720.jpg" alt="">
    </div>
</div>
@endsection