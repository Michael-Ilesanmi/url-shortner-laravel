<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel</title>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}

            #shortify_tag::after{
                content: '';
                width: 100%;
                height: 90%;
                position: absolute;
                left: 7px;
                top: 10%;
                rotate: 350deg;
                border: solid 2px yellow;
                border-radius: 100%;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-gray-900 min-h-screen h-screen p-0 m-0">
        <nav id="navbar" class="py-4 fixed top-0 left-0 right-0 bg-transparent">
            <div class="container text-[#4B7A74] flex flex-row items-center justify-between">
                <img src="https://res.cloudinary.com/ioluwamichael/image/upload/v1679433627/shortify/default-monochrome_azv7i8.svg" alt="SHORTIFY LOGO" class="text-[#4B7A74] h-8 md:h-12" />
                <a  href="https://github.com/Michael-Ilesanmi" target="_blank"  class="text-sm md:font-base font-semibold hover:text-[#4B7A74] text-gray-50 transition-colors ease-in">ABOUT</a>
            </div>
        </nav>
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
        <footer class="bg-[#4B7A74]  bottom-0 left-0 right-0 py-6">
            <div class="container">
                <p class="text-center text-gray-50 font-medium">
                 <a class="font-light" href="https://github.com/Michael-Ilesanmi" target="_blank" rel="noopener noreferrer">Michael Ilesanmi </a> || Copyright © 2023
                </p>  
            </div>
        </footer>
    </body>
    <script  type="text/javascript">
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.backgroundColor = "#111827";
            document.getElementById("navbar").style.borderBottom = "2px solid #F9FAFB";
        } else {
            document.getElementById("navbar").style.backgroundColor = "transparent";
            document.getElementById("navbar").style.borderBottom = "none";
        }
        }
        function copyToClipboard(id) {
            let copyText = document.getElementById(id);
            let copyIcon = document.getElementById(id+"_icon").classList;
            copyIcon.remove("fa-copy")
            copyIcon.add("fa-clipboard")
            copyText.select();
            copyText.setSelectionRange(0, 99999); 
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
</html>
