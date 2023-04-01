@extends('layout')

@section('content')
<main class="py-28 md:py-12">
<div class="container h-screen flex md:flex-row items-center">
    <div class="md:w-3/6 lg:w-3/5 space-y-8 lg:space-y-6 flex flex-col">
        <h1 class="text-5xl md:text-4xl lg:text-6xl font-bold text-gray-50 leading-tight">Shorten your links, simplify your life with <span id="shortify_tag" class="relative">Shortify</span></h1>
        <p class="lg:text-base md:text-sm text-sm text-gray-200 border-l-4 border-gray-200 pl-4 py-1">
        Looking for a simple and efficient way to share lengthy URLs? Introducing Shortify - the ultimate URL shortening app that makes sharing links easier than ever before!
        </p>
        <a href="/#shorten_url">
            <button class="bg-white rounded-lg px-8 py-4 text-gray-900 transition ease-linear hover:outline-2 hover:outline hover:outline-white hover:bg-gray-900 hover:text-white font-semibold text-lg w-fit">
                Get Started
            </button>
        </a> 
    </div>
    <div class="grow hidden md:block">
        <img src="https://res.cloudinary.com/ioluwamichael/image/upload/v1679434541/shortify/www-pana_zponke.svg" class="h-auto w-fit" alt="Hello" />
    </div>
</div>
</main>
<section id="shorten_url" class="my-24">
<div class="container flex flex-col">
    <form 
        action="/create" 
        method="POST" 
        class="bg-[#4B7A74] px-4 py-4 flex md:flex-row md:justify-center md:space-x-4 flex-col space-y-4 md:space-y-0 w-11/12 md:w-3/4 mx-auto md:px-12">
        @csrf
        <input 
            type="url" 
            name="original_url" 
            id="original_url" 
            required
            class="text-center md:text-left rounded-md p-3 bg-gray-50 outline-none ring-0 text-gray-900 placeholder:text-gray-900 text-sm font-medium shadow-md truncate grow" 
            placeholder="Enter URL here..." 
        />
        <button type="submit" class=" shadow-md rounded-md p-3 bg-gray-50 font-medium text-gry-900 text-sm">SHORTIFY</button>
    </form>
    @if(!empty(Session::get('urls')))
    <div class="border-2 -mt-10 -mb-10 grow -z-10 h-40 mx-auto w-full md:w-10/12"></div>
    <div class="bg-[#4B7A74] px-4 py-4 flex flex-col space-y-4 w-11/12 md:w-3/5 mx-auto" >
            @foreach(Session::get('urls') as $url)
            <div class="w-full flex flex-row justify-around">
                <input type="text" disabled value="{{ $url->original_url }}" class="w-3/5 rounded-md p-3 bg-gray-50 outline-none ring-0 text-gray-900 placeholder:text-gray-900 text-sm font-medium shadow-md truncate" />
                <div class="relative w-2/6 bg-gray-50 rounded-md overflow-clip shadow-md">
                    <input type="text" id="copy_url_{{ $url->id }}" disabled value="{{ url($url->short_url) }}" class="w-5/6 p-3 bg-gray-50 outline-none ring-0 text-gray-900 placeholder:text-gray-900 text-sm font-medium truncate" />
                    <button class="absolute right-3 bg-gray-50 p-1 md:p-2 top-1/2 -translate-y-1/2" value="copy" onclick="copyToClipboard('copy_url_{{ $url->id }}')">
                        <i id="copy_url_{{ $url->id }}_icon" class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>
            @endforeach
            <form 
                action="/clear" 
                method="POST"
                class="w-fit mx-auto">
                @csrf
                <button type="submit" class="text-center text-gray-200 hover:text-red-300 transition-colors ease-linear font-medium text-sm ">Clear History <i class="fa-solid fa-trash"></i></button>
            </form>
    </div>
    @endif
</div>
</section>
@endsection