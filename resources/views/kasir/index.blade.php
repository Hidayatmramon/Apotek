@extends('template.navbar')

@section('home')

<div class="app-content">
    <div class="app-content-header">
        <h1 class="app-content-headerText">purchase</h1>
        <button class="mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </button>
        <form action="{{ route('order.create') }}">
            <button class="app-content-headerButton">new purchase</button>
            
        </form>
    </div>
    <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
        <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
                <button class="action-button filter jsFilter"></button>
            </div>
            <button class="action-button list active" title="List View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-list">
                    <line x1="8" y1="6" x2="21" y2="6" />
                    <line x1="8" y1="12" x2="21" y2="12" />
                    <line x1="8" y1="18" x2="21" y2="18" />
                    <line x1="3" y1="6" x2="3.01" y2="6" />
                    <line x1="3" y1="12" x2="3.01" y2="12" />
                    <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
            </button>
            <button class="action-button grid" title="Grid View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7" />
                    <rect x="14" y="3" width="7" height="7" />
                    <rect x="14" y="14" width="7" height="7" />
                    <rect x="3" y="14" width="7" height="7" /></svg>
            </button>
        </div>
    </div>
    <div class="products-area-wrapper tableView">
        <div class="products-header">
            <div class="product-cell image">
                Pembeli
                <button class="sort-button">
                </button>
            </div>
            <div class="product-cell category">Obat<button class="sort-button">
                </button></div>
            <div class="product-cell stock">Total Bayar<button class="sort-button">
                </button></div>
            <div class="product-cell price">Kasir<button class="sort-button">
                </button></div> 
            <div class="product-cell price">Tanggal Beli<button class="sort-button">
                </button></div> 
            <div class="product-cell price">Aksi<button class="sort-button">
                </button></div>

        </div>

        @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::get('deleted'))
        <div class="alert alert-warning">{{ Session::get('deleted') }}</div>
        @endif

        {{-- @php $no = 1; @endphp
        {{-- {{dd($item)}} 
        @foreach ($medicine as $item)
        <div class="products-row">
            <button class="cell-more-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" />
                </svg>
            </button>
            <div class="product-cell image">
                <img src="{{asset('storage/photos/' . $item['photo'])}}">
                <span>{{ $item['type'] }}</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Name:</span>{{ $item['name'] }}</div>
            <div class="product-cell stock"><span class="cell-label">Stock:</span>{{ $item['stock'] }}</div>
            <div class="product-cell price"><span class="cell-label">Price:</span>{{ $item['price'] }}</div>
            <div class="product-cell aksi">
                <span class="cell-label">Aksi:</span>
                
                <a class="app-content-headerButton" h   ref="{{route('medicine.edit',$item->id)}}" type="submit">edit</a>
                
                <form action="{{ route('medicine.delete', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="app-content-headerButton">Hapus</button>
                </form>
                
            </div>
        </div>
        @endforeach --}}

    </div>
</div>
</div>
<script src="{{asset('admin/script.js')}}"></script>

@endsection
