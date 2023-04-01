@extends('layout')

@section('content')
<div class="min-h-screen py-24 flex items-center">
    <form 
        action="/register" 
        method="POST"
        class="bg-gray-300 px-12 py-16 w-5/12 mx-auto flex flex-col space-y-8 rounded-md"
        >
        @csrf
        
        <input type="email"
            required
            name="email"
            value="{{ old('email') }}"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your email..."
             />
        @error('email')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <input type="text"
            required
            name="username"
            value="{{ old('username') }}"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your preferred username..."
             />
        @error('username')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <input type="text"
            required
            name="first_name"
            value="{{ old('first_name') }}"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your first name..."
             />
        @error('first_name')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <input type="text"
            required
            name="last_name"
            value="{{ old('last_name') }}"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your last name..."
             />
        @error('last_name')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <input type="tel"
            required
            name="phone"
            value="{{ old('phone') }}"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your phone number..."
             />
        @error('phone')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <input 
            type="password"
            required
            name="password"
            value="{{ old('password') }}"
            placeholder="Enter your password..."
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
             />
        @error('password')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <button type="submit" class="rounded-md py-4 bg-blue-500 font-semibold text-gray-100 cursor-pointer hover:bg-blue-600 transition ease-linear">Login</button>
    </form>
</div>
@endsection