@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow border-0 rounded-3 p-4">
        <h3 class="text-center mb-4 fw-bold text-primary">Add Product</h3>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Product Name</label>
                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}" placeholder="Enter Product Name">
                    @error('product_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Brand Name</label>
                    <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" value="{{ old('brand_name') }}" placeholder="Enter Brand Name">
                    @error('brand_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">MRP</label>
                    <input type="number" step="0.01" name="mrp" class="form-control @error('mrp') is-invalid @enderror" value="{{ old('mrp') }}" placeholder="Enter MRP">
                    @error('mrp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Offer Percentage</label>
                    <input type="number" step="0.01" name="offer_percentage" class="form-control @error('offer_percentage') is-invalid @enderror" value="{{ old('offer_percentage') }}" placeholder="Enter Offer %">
                    @error('offer_percentage')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Final Price</label>
                    <input type="number" step="0.01" name="final_price" class="form-control @error('final_price') is-invalid @enderror" value="{{ old('final_price') }}" placeholder="Enter Final Price">
                    @error('final_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Manufactured Date</label>
                    <input type="date" name="manufactured_date" class="form-control @error('manufactured_date') is-invalid @enderror" value="{{ old('manufactured_date') }}">
                    @error('manufactured_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Expiry Date</label>
                    <input type="date" name="expiry_date" class="form-control @error('expiry_date') is-invalid @enderror" value="{{ old('expiry_date') }}">
                    @error('expiry_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary w-100 shadow-sm">Save Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger w-100 shadow-sm">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
