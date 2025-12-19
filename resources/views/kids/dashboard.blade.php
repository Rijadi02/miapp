@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($rooms as $room)
    <div class="col-xl-4 col-md-6 mb-5">
        <a href="#" class="item-card-link">
            <div class="item-card" style="background-image: url('{{ $room->thumbnail }}');">
                <div class="item-overlay">
                    <div class="item-content">
                        <h3 class="item-title">{{ $room->title }}</h3>
                        <p class="item-description">{{ $room->description }}</p>
                        <div class="item-footer">
                            <span class="item-creator">{{ $room->creator }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

<style>
    .item-card-link {
        text-decoration: none !important;
        display: block;
    }

    .item-card {
        background-color: #e5e7eb;
        background-size: cover;
        background-position: center;
        border-radius: 32px;
        height: 300px;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .item-card-link:hover .item-card {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .item-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2rem;
    }

    .item-content {
        color: white;
    }

    .item-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        letter-spacing: -0.01em;
    }

    .item-description {
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.5;
        margin-bottom: 1.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .item-footer {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .item-creator {
        font-family: 'Outfit', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.6);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Small badges style for future use */
    .item-badge {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 500;
    }
</style>
@endsection
