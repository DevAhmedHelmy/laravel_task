@extends('layouts.app')

@section('content')


<div class="w-full flex flex-wrap">

    <!-- Register Section -->
    <div class="w-full md:w-1/2 flex flex-col">
        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Join Us.</p>
            <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex flex-col pt-4">
                    <label for="name" class="text-lg">Name</label>
                    <input type="text" id="name" placeholder="John Smith" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-700 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-700 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col pt-4">
                    <label for="confirm-password" class="text-lg">Confirm Password</label>
                    <input type="password" id="confirm-password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
                </div>

                <input type="submit" value="Register" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Already have an account? <a href="{{route('login')}}" class="underline font-semibold">Log in here.</a></p>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
    </div>
</div>
@endsection
