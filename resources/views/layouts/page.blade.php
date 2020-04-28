@extends('layouts.app')

@section('content')

<div id="page-header" class="flex justify-between px-12 py-4 bg-white shadow-md">
    <div id="title">
        <p class="text-3xl font-bold text-blue-900">{{ $name ?? 'Laravel Task' }}</p>
    </div>
    <div id="actions" class="mt-3">
        @yield('actions')
    </div>
</div>

<div class="mt-8 mb-20">
    

    @if(session('message'))

    <div class="alert-toast fixed top-0 right-0 m-8 w-5/6 md:w-full max-w-sm">
        <input type="checkbox" class="hidden" id="footertoast">
    
        <label class="close cursor-pointer flex items-start justify-between w-full p-2 bg-green-500 h-24 rounded shadow-lg text-white" title="close" for="footertoast">
          {{session('message')}}
        
          <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
        </label>
      </div>
    @endif

    @yield('page-content')
</div>

@endsection
