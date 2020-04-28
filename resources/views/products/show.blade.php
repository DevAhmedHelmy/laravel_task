@extends('layouts.page',['name' => $name])
@section('actions')

@endsection
@section('page-content')
<div class="w-5/6 mx-auto bg-white rounded-lg shadow-2xl">
    <div class="w-full rounded overflow-hidden shadow-lg">
         
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{$product->name}}</div>
          <p class="text-gray-700 text-base">
            {{$product->description}}
          </p>
        </div>
        <div class="px-6 py-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-1">Created At : {{$product->created_at->diffForHumans()}}</span>
          @if(!is_null($product->category))
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Category Name : {{$product->category->name}}</span>
          @endif
          
        </div>
      </div>
</div>

@endsection
