<nav id="navbar" class="py-4 fixed top-0 left-0 right-0 bg-transparent">
    <div class="container text-[#4B7A74] flex flex-row items-center justify-between">
        <img src="https://res.cloudinary.com/ioluwamichael/image/upload/v1679433627/shortify/default-monochrome_azv7i8.svg" alt="SHORTIFY LOGO" class="text-[#4B7A74] h-8 md:h-12" />
        @auth
            <div class="flex items-center space-x-4">
                <p class="text-base">Hi, <strong> {{auth()->user()->username}} </strong> </p>
                <a  href="/logout" class="text-xs md:font-base font-semibold hover:text-[#4B7A74] text-gray-50 transition-colors ease-in">SIGN OUT</a>
            </div>
        @endauth
        @guest
            <div class="flex items-center space-x-4">
                <a  href="/login" class="text-sm md:font-base font-semibold hover:text-[#4B7A74] text-gray-50 transition-colors ease-in">SIGN IN</a>
                <a  href="/register" class="text-sm md:font-base font-semibold hover:text-[#4B7A74] text-gray-50 transition-colors ease-in">SIGN UP</a>
            </div>
        @endguest
    </div>
</nav>