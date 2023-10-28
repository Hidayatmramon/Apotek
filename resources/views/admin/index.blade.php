
@extends('admin.main')
@section('home')

<div class="products-row">
    <button class="cell-more-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
    </button>
      <div class="product-cell image">
        <img src="" alt="product">
        <span>isi</span>
      </div>
    <div class="product-cell category"><span class="cell-label">Name:</span>Furniture</div>
    <div class="product-cell stock"><span class="cell-label">Stock:</span>36</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
  </div>

@endsection

