<!-- views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Product</h2>

<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" min="0" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
@endsection

