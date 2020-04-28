@extends('layouts.page',['name' => $name])
@section('actions')

@endsection
@section('page-content')
<div class="w-5/6 mx-auto bg-white rounded-lg shadow-2xl">
    @if(!$product->id)
        <form action="{{ route('products.store') }}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
    @else
        <form action="{{ route('products.update',$product->id) }}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
            @method('patch')
    @endif
        @csrf
        <div class="mb-3">
            <span class="block mb-2 text-sm font-bold text-gray-700">Product Name</span>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-700 @enderror" placeholder="Product Name" name="name" value="{{ old('name',$product->name) }}" required>
            @error('name')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="block">
                <span class="text-gray-700">Category</span>
                <select class="form-select block w-full mt-1 @error('category_id') border-red-700 @enderror" name="category_id" required>
                    <option value="" selected>Choose Category</option>
                    @foreach($categories as $cat)
                        <option @if($cat->id == old('category_id',$product->category_id)) selected
                            @endif  value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </label>
            @error('category_id')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block">
                <span class="text-gray-700">Textarea</span>
                <textarea class="w-full mt-1 text-gray-600 form-textarea @error('description') border-red-700 @enderror" rows="3" placeholder="Enter some long form description." name="description" required>{{ old('description',$product->description) }}</textarea>
            </label>
            @error('description')
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
