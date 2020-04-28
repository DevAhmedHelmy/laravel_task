@extends('layouts.page',['name' => $name])
@section('actions')

@endsection
@section('page-content')
<div class="w-5/6 mx-auto bg-white rounded-lg shadow-2xl">
    @if(!$category->id)
        <form action="{{ route('categories.store') }}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
    @else
        <form action="{{ route('categories.update',$category->id) }}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
            @method('patch')
    @endif
        @csrf
        <div class="mb-3">
            <span class="block mb-2 text-sm font-bold text-gray-700">Category Name</span>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-700 @enderror" placeholder="category Name" name="name" value="{{ old('name',$category->name) }}" required>
            @error('name')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between mt-3">
            <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
              Save
            </button>


        </div>
    </form>
</div>

@endsection
