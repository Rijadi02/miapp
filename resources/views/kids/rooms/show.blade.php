@extends('components.kids-master')

@section('content')
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between mb-5">
        <div>
            <h1 style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #111827; margin-bottom: 0.5rem;">
                {{ $room->title }}
            </h1>
            <p class="text-muted mb-0">{{ $room->description }}</p>
        </div>
        <a href="{{ route('kids.dashboard') }}" class="btn btn-link text-muted p-0" style="font-weight: 600; text-decoration: none;">
            <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="border-radius: 12px; border: none; background-color: #ecfdf5; color: #047857;">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h5 class="mb-3" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #374151;">Characters</h5>
    <div class="horizontal-scroll-container pb-4 mb-5">
        <div class="d-flex flex-nowrap">
            <!-- Add Character Card -->
            <div class="mr-4" style="flex: 0 0 160px;">
                <div class="card h-100 border-0 shadow-sm add-card" data-toggle="modal" data-target="#addCharacterModal" style="cursor: pointer; border-radius: 16px; transition: all 0.3s ease; min-height: 180px; display: flex; align-items: center; justify-content: center; background: rgba(16, 185, 129, 0.05); border: 2px dashed rgba(16, 185, 129, 0.2) !important;">
                    <div class="text-center">
                        <div class="mb-3" style="width: 48px; height: 48px; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.1);">
                            <i class="fas fa-plus" style="color: #10b981; font-size: 1.2rem;"></i>
                        </div>
                        <span style="font-weight: 700; color: #10b981; font-size: 0.9rem;">Add Character</span>
                    </div>
                </div>
            </div>

            <!-- Character Cards -->
            @foreach($room->connections->where('type', 'App\Models\Character') as $connection)
                <div class="mr-4" style="flex: 0 0 160px;">
                    <div class="card h-100 border-0 shadow-sm item-card" style="border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                        <div style="position: relative; padding-top: 100%;">
                            <img src="{{ $connection->connection->thumbnail ?? '/img/placeholder-character.png' }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="{{ $connection->connection->name }}">
                        </div>
                        <div class="card-body p-3">
                            <h6 class="mb-0" style="font-weight: 700; font-size: 0.85rem; color: #111827; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {{ $connection->connection->name }}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h5 class="mb-3" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #374151;">Room Assets</h5>
    <div class="horizontal-scroll-container pb-4">
        <div class="d-flex flex-nowrap">
            <!-- Add Asset Card -->
            <div class="mr-4" style="flex: 0 0 160px;">
                <div class="card h-100 border-0 shadow-sm add-card" data-toggle="modal" data-target="#addAssetModal" style="cursor: pointer; border-radius: 16px; transition: all 0.3s ease; min-height: 180px; display: flex; align-items: center; justify-content: center; background: rgba(16, 185, 129, 0.05); border: 2px dashed rgba(16, 185, 129, 0.2) !important;">
                    <div class="text-center">
                        <div class="mb-3" style="width: 48px; height: 48px; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.1);">
                            <i class="fas fa-plus" style="color: #10b981; font-size: 1.2rem;"></i>
                        </div>
                        <span style="font-weight: 700; color: #10b981; font-size: 0.9rem;">Add Asset</span>
                    </div>
                </div>
            </div>

            <!-- Asset Cards -->
            @foreach($room->connections->where('type', 'App\Models\Asset') as $connection)
                <div class="mr-4" style="flex: 0 0 160px;">
                    <div class="card h-100 border-0 shadow-sm item-card" style="border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                        <div style="position: relative; padding-top: 100%;">
                            @php
                                $imageUrl = $connection->connection->asset;
                                if ($connection->connection->type !== 'image') {
                                    $imageUrl = '/img/placeholder-asset.png'; // Use a better generic icon placeholder if available
                                }
                            @endphp
                            <img src="{{ $imageUrl }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="{{ $connection->connection->title }}">
                            <div class="badge-pill px-2 py-1" style="position: absolute; top: 12px; left: 12px; background: rgba(255,255,255,0.9); font-size: 0.65rem; font-weight: 700; color: #374151; backdrop-filter: blur(4px);">
                                {{ strtoupper($connection->connection->type) }}
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="mb-0" style="font-weight: 700; font-size: 0.85rem; color: #111827; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {{ $connection->connection->title }}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Add Character Modal -->
<div class="modal fade" id="addCharacterModal" tabindex="-1" role="dialog" aria-labelledby="addCharacterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 24px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
            <div class="modal-header border-0 px-4 pt-4">
                <h5 class="modal-title" style="font-family: 'Outfit', sans-serif; font-weight: 700;">Add Characters to Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('rooms.connect', $room) }}" method="POST">
                @csrf
                <input type="hidden" name="type" value="character">
                <div class="modal-body px-4 py-4">
                    <div id="characters-selector" class="row no-gutters">
                        <div class="col-12 text-center py-5">
                            <div class="spinner-border text-success" role="status"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="button" class="btn btn-link text-muted" data-dismiss="modal" style="font-weight: 600; text-decoration: none;">Cancel</button>
                    <button type="submit" class="btn btn-success px-4" style="border-radius: 12px; font-weight: 700; background-color: #10b981; border: none;">Add Selected</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Asset Modal -->
<div class="modal fade" id="addAssetModal" tabindex="-1" role="dialog" aria-labelledby="addAssetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 24px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);">
            <div class="modal-header border-0 px-4 pt-4">
                <h5 class="modal-title" style="font-family: 'Outfit', sans-serif; font-weight: 700;">Add Assets to Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('rooms.connect', $room) }}" method="POST">
                @csrf
                <input type="hidden" name="type" value="asset">
                <div class="modal-body px-4 py-4">
                    <div id="assets-selector" class="row no-gutters">
                        <div class="col-12 text-center py-5">
                            <div class="spinner-border text-success" role="status"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="button" class="btn btn-link text-muted" data-dismiss="modal" style="font-weight: 600; text-decoration: none;">Cancel</button>
                    <button type="submit" class="btn btn-success px-4" style="border-radius: 12px; font-weight: 700; background-color: #10b981; border: none;">Add Selected</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .horizontal-scroll-container {
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 20px;
        margin-bottom: -20px;
    }
    .horizontal-scroll-container::-webkit-scrollbar {
        height: 6px;
    }
    .horizontal-scroll-container::-webkit-scrollbar-track {
        background: rgba(16, 185, 129, 0.05);
        border-radius: 10px;
    }
    .horizontal-scroll-container::-webkit-scrollbar-thumb {
        background: rgba(16, 185, 129, 0.2);
        border-radius: 10px;
    }
    .horizontal-scroll-container::-webkit-scrollbar-thumb:hover {
        background: rgba(16, 185, 129, 0.4);
    }
    .add-card:hover {
        transform: translateY(-5px);
        background: rgba(16, 185, 129, 0.08) !important;
        border-color: rgba(16, 185, 129, 0.4) !important;
    }
    .item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
    }
    .character-option {
        cursor: pointer;
        padding: 8px;
        transition: all 0.2s ease;
    }
    .character-option input {
        display: none;
    }
    .character-card-inner {
        border-radius: 16px;
        border: 2px solid transparent;
        overflow: hidden;
        transition: all 0.2s ease;
        background: #f9fafb;
    }
    .character-option input:checked + .character-card-inner {
        border-color: #10b981;
        background: #ecfdf5;
    }
    .character-option:hover .character-card-inner {
        background: #f3f4f6;
    }
</style>

@push('scripts')
<script>
    $(document).ready(function() {
        function loadOptions(modalId, selectorId, apiUrl, inputName) {
            $(`#${modalId}`).on('show.bs.modal', function() {
                const selector = $(`#${selectorId}`);
                selector.html('<div class="col-12 text-center py-5"><div class="spinner-border text-success" role="status"></div></div>');
                
                $.ajax({
                    url: apiUrl,
                    method: "GET",
                    success: function(data) {
                        selector.empty();
                        if (data.length === 0) {
                            selector.html('<div class="col-12 text-center py-5"><p class="text-muted">Nothing found.</p></div>');
                            return;
                        }
                        data.forEach(item => {
                            let thumb = item.thumbnail || item.asset || '/img/placeholder-asset.png';
                            let name = item.name || item.title;
                            selector.append(`
                                <div class="col-md-3 col-4">
                                    <label class="character-option w-100 mb-0">
                                        <input type="checkbox" name="ids[]" value="${item.id}">
                                        <div class="character-card-inner text-center p-2 h-100">
                                            <div style="position: relative; padding-top: 100%; border-radius: 12px; overflow: hidden; margin-bottom: 8px;">
                                                <img src="${thumb}" style="position: absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                            </div>
                                            <div style="font-size: 0.75rem; font-weight: 700; color: #111827; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                ${name}
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            `);
                        });
                    }
                });
            });
        }

        loadOptions('addCharacterModal', 'characters-selector', "{{ route('api.characters') }}", 'ids[]');
        loadOptions('addAssetModal', 'assets-selector', "{{ route('api.assets') }}", 'ids[]');
    });
</script>
@endpush
@endsection
