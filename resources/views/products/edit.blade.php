@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Edit Product</h3>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            @php
                $fields = [
                    'product_name' => 'Product Name',
                    'brand_name' => 'Brand Name',
                    'mrp' => 'MRP',
                    'offer_percentage' => 'Offer Percentage',
                    'final_price' => 'Final Price',
                    'manufactured_date' => 'Manufactured Date',
                    'expiry_date' => 'Expiry Date'
                ];
            @endphp

            @foreach ($fields as $field => $label)
                <div class="mb-3">
                    <label class="form-label">{{ $label }}</label>
                    <input type="{{ in_array($field, ['manufactured_date', 'expiry_date']) ? 'date' : 'text' }}"
                        name="{{ $field }}"
                        class="form-control @error($field) is-invalid @enderror"
                        value="{{ old($field, $product->$field) }}"
                        placeholder="Enter {{ $label }}">
                    @error($field)
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary w-100">Update Product</button>
        </form>

        <a href="{{ route('products.index') }}" class="btn btn-danger w-100 mt-3">Back</a>
    </div>
</div>
@endsection
