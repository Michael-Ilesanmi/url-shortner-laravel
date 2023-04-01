@extends('layout')

@section('content')
<div class="min-h-screen h-screen flex items-center">
    <form 
        action="/login" 
        method="POST"
        class="bg-gray-300 px-12 py-16 w-5/12 mx-auto flex flex-col space-y-8 rounded-md"
        >
        @csrf
        <input type="email"
            required
            name="email"
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
            placeholder="Enter your email..."
            value="{{ old('email') }}"
             />
        <input 
            type="password"
            required
            name="password"
            min="6"
            value="{{ old('password') }}"
            placeholder="Enter your password..."
            class="bg-transparent px-3 py-4 border-b-2 focus:outline-none focus:ring-0 border-blue-500 text-gray-900 placeholder:text-gray-600"
             />
        @error('email')
        <div class="text-red-600 font-medium text-sm">
            {{$message}}
        </div>
        @enderror
        <button type="submit" class="rounded-md py-4 bg-blue-500 font-semibold text-gray-100 cursor-pointer hover:bg-blue-600 transition ease-linear">Login</button>
    </form>
</div>
@endsection