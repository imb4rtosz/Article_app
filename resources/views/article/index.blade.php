@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-center">
    <div class="py-15 border-b border-gray-400">
        <h1 class="text-6xl text-teal-800">
           Article
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-5/6 m-auto">
        <a 
            href="/article/create"
            class="bg-gray-500 uppercase bg-transparent text-gray-100 text-xs font-bold py-3 px-5 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-15 w-5/6 mx-auto py-20 border-b border-gray-400">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-teal-800 font-bold text-4xl pb-5">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-teal-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/article/{{ $post->slug }}" class="uppercase bg-gray-500 text-gray-100 hover:bg-gray-900 hover:text-teal-700 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
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