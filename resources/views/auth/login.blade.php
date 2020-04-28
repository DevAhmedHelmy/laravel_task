@extends('layouts.app')

@section('content')

<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Welcome.</p>
            <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" id="password" placeholder="Password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-700 @enderror" required>
                    @error('password')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col pt-4 mb-4">
                    <div class="md:w-1/3"></div>
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="text-sm">
                            {{ __('Remember Me') }}
                        </span>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      Sign In
                    </button>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                  </div>
                
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Do not have an account? <a href="{{route('register')}}" class="underline font-semibold">Register here.</a></p>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
    </div>
</div>
@endsection
