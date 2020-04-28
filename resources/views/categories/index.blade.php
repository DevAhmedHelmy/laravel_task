@extends('layouts.page',['name',$name])
@section('actions')
    <a href="{{route('categories.create')}}" class="p-3 font-bold text-blue-100 bg-blue-500 rounded shadow-md"><i class="fas fa-plus-circle"></i> New Category</a>
@endsection
@section('page-content')

<div class="w-5/6 mx-auto bg-white rounded-lg shadow-2xl">
    <table class="w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">#</th>
            <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Category Name</th>
            <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Products Count</th>
            <th class="px-4 py-2 text-gray-600 bg-gray-100 border-b">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr class="text-center">
                <td class="px-4 py-2 bg-gray-100 border-b">
                    <p>{{ $category->id }}</p>

                </td>
                <td class="px-4 py-2 bg-gray-100 border-b">{{ $category->name }}</td>

                <td class="px-4 py-2 bg-gray-100 border-b">{{ $category->products_count }}</td>

                <td class="px-4 py-2 bg-gray-100 border-b">
                    <a href="{{ route('categories.show',$category->id) }}" class="mr-2"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('categories.edit',$category->id) }}" class="mr-2"><i class="fa fa-edit"></i></a>
                   
                    <form class="inline" method="POST" action="{{ route('categories.destroy',$category->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="if(!confirm('Do you want to delete the Category?')) return false;"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <div id="pagination" class="p-2 bg-white">
            {{ $categories->links('vendor.pagination.default') }}
        </div>
    </div>




@endsection

