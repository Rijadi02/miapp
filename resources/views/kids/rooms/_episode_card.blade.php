<div class="card border-0 shadow-sm mb-4 episode-card" data-id="{{ $episode->id }}" style="border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="flex-grow-1">
                <input type="text" class="form-control border-0 p-0 episode-title" value="{{ $episode->title }}" style="font-family: 'Outfit', sans-serif; font-weight: 700; font-size: 1.25rem; color: #111827; background: transparent; box-shadow: none;" placeholder="Episode Title">
                <div class="d-flex align-items-center mt-1">
                    <span class="badge badge-light px-2 py-1" style="font-size: 0.7rem; color: #6b7280; font-weight: 600;">KEY:</span>
                    <input type="text" class="form-control border-0 p-0 ml-2 episode-key" value="{{ $episode->key }}" style="font-size: 0.75rem; color: #10b981; font-weight: 700; background: transparent; box-shadow: none; width: auto;" placeholder="KEY">
                </div>
            </div>
            <div class="text-muted">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        
        <div class="description-container">
            <input type="text" class="form-control border-0 p-0 mb-2 episode-description text-muted" value="{{ $episode->description }}" style="font-size: 0.95rem; background: transparent; box-shadow: none;" placeholder="Short description...">
            
            <div class="long-text-expandable" style="display: none;">
                <hr>
                <textarea class="form-control border-0 p-0 episode-text" style="font-size: 0.95rem; min-height: 100px; background: transparent; box-shadow: none;" placeholder="Detailed text...">{{ $episode->text }}</textarea>
            </div>
        </div>
    </div>
</div>
