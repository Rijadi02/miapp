@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($rooms as $room)
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link">
            <div class="item-card" style="background-image: url('{{ $room->thumbnail ?? 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4' }}');">
                <div class="item-overlay">
                    <div class="item-content">
                        <h3 class="item-title">{{ $room->title }}</h3>
                        <p class="item-description">{{ $room->description }}</p>
                        <div class="item-footer">
                            <span class="item-creator">{{ $room->creator->name ?? 'Unknown' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach

    <!-- Add New Room Card -->
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#createRoomModal">
            <div class="item-card add-card">
                <div class="add-content">
                    <i class="fas fa-plus fa-3x mb-3"></i>
                    <h3 class="item-title mb-0">Create Room</h3>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Create Room Modal -->
<div class="modal fade" id="createRoomModal" tabindex="-1" role="dialog" aria-labelledby="createRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 24px; overflow: hidden;">
            <div class="modal-body p-5">
                <h2 class="font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">Create New Room</h2>
                <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Title</label>
                        <input type="text" name="title" class="form-control border-0 bg-light" placeholder="Room Title" required style="border-radius: 12px; padding: 1.5rem;">
                    </div>
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Description</label>
                        <textarea name="description" class="form-control border-0 bg-light" placeholder="A brief description..." style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Thumbnail Image</label>
                        <input type="file" name="thumbnail" class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                    </div>
                    <div class="form-group mb-5">
                        <label class="small font-weight-bold text-uppercase text-muted">Assign To</label>
                        <select name="assigned_at" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                            <option value="">None</option>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block py-3 font-weight-bold" style="border-radius: 16px; background: #fb923c; border: none;">Create Room</button>
                </form>
            </div>
        </div>
    </div>
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
        height: 210px;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .add-card {
        background: rgba(251, 146, 60, 0.05);
        border: 2px dashed rgba(251, 146, 60, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .add-content {
        text-align: center;
        color: #fb923c;
    }

    .item-card-link:hover .item-card {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .add-card:hover {
        background: rgba(251, 146, 60, 0.1);
        border-color: #fb923c;
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
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .item-description {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.4;
        margin-bottom: 1rem;
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
        font-size: 0.75rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.6);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Modal styling overrides */
    .form-control:focus {
        box-shadow: none;
        background-color: #f3f4f6 !important;
    }
</style>
@endsection
