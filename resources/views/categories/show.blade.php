@extends('layouts.page',['name' => $name])
@section('actions')

@endsection
@section('page-content')
<div class="w-5/6 mx-auto bg-white rounded-lg shadow-2xl">
    <div class="w-full rounded overflow-hidden shadow-lg">
         
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Category Name : {{$category->name}}</div>
            <p class="text-gray-700 text-base">
                
            </p>
            </div>
        </div>
        <div class="mt-4">
            <div class="font-bold text-xl mb-2 ml-4">Products</div>
         
        @if(count($category->products) > 0)
        <table class="w-full table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">#</th>
                <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Name</th>
                <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Description</th>
                 
                <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category->products as $product)
                <tr class="text-center">
                    <td class="px-4 py-2 py-4 border-b">
                        <p>{{ $product->id }}</p>

                    </td>
                    <td class="px-4 py-2 border-b">{{ $product->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->description }}</td>
                    

                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('products.show',$product->id) }}" class="mr-2"> <i class="fa fa-eye"></i> </a>
                        <a href="{{ route('products.edit',$product->id) }}" class="mr-2"> <i class="fa fa-edit"></i></a>
                        <form class="inline" method="POST" action="{{ route('products.destroy',$product->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="if(!confirm('Do you want to delete the product?')) return false;"><i class="far fa-trash-alt"></i></button>
                        </form> 
                         
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else

            <p>No Products</p>

        @endif
    </div>
</div>

@endsection
