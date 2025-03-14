@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Brand Name</th>
            <th>MRP</th>
            <th>Offer Percentage</th>
            <th>Final Price</th>
            <th>Manufactured Date</th>
            <th>Expiry Date</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->brand_name }}</td>
            <td>{{ $product->mrp }}</td>
            <td>{{ $product->offer_percentage }}%</td>
            <td>{{ $product->final_price }}</td>
            <td>{{ $product->manufactured_date	 }}</td>
            <td>{{ $product->expiry_date }}</td>
            <td>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
