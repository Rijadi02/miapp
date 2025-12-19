@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($rooms as $room)
    <div class="col-xl-4 col-md-6 mb-5">
        <div class="item-card">
            <div class="item-thumbnail" style="background-image: url('{{ $room->thumbnail }}');"></div>
            <div class="item-content">
                <h3 class="item-title">{{ $room->title }}</h3>
                <p class="item-description">{{ $room->description }}</p>
                <div class="item-footer">
                    <span class="item-category">{{ $room->category }}</span>
                    <span class="item-price">{{ $room->price }}</span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    .item-card {
        background: white;
        border-radius: 4px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .item-thumbnail {
        height: 250px;
        background-size: cover;
        background-position: center;
        width: 100%;
    }

    .item-content {
        padding: 2rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .item-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
    }

    .item-description {
        font-size: 0.9rem;
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 2rem;
        flex-grow: 1;
    }

    .item-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid #f3f4f6;
    }

    .item-category {
        font-family: 'Outfit', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #1f2937;
    }

    .item-price {
        font-family: 'Inter', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        color: #9ca3af;
    }
</style>
@endsection
