<!-- views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Product List</h2>

    <!-- Display product list here -->
    <!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Product List</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
