<div class="card border-0 shadow-sm mb-4 episode-card" data-id="{{ $episode->id }}" style="border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
    <div class="card-body p-4">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="flex-grow-1">
                <input type="text" class="form-control border-0 p-0 episode-title" value="{{ $episode->title }}" style="font-family: 'Outfit', sans-serif; font-weight: 700; font-size: 1.25rem; color: #111827; background: transparent; box-shadow: none;" placeholder="Titulli i Episodit">
                <div class="d-flex align-items-center mt-1">
                    <span class="badge badge-light px-2 py-1" style="font-size: 0.7rem; color: #6b7280; font-weight: 600;">KODI:</span>
                    <input type="text" class="form-control border-0 p-0 ml-2 episode-key" value="{{ $episode->key }}" style="font-size: 0.75rem; color: #10b981; font-weight: 700; background: transparent; box-shadow: none; width: auto;" placeholder="KODI">
                </div>
            </div>
            <div>
                <button class="btn btn-sm btn-light expand-btn" style="border-radius: 8px; font-weight: 600; font-size: 0.75rem; color: #6b7280;">
                    Zgjero <i class="fas fa-chevron-down ml-1"></i>
                </button>
            </div>
        </div>
        
        <div class="description-container">
            <input type="text" class="form-control border-0 p-0 mb-2 episode-description text-muted" value="{{ $episode->description }}" style="font-size: 0.95rem; background: transparent; box-shadow: none;" placeholder="Përshkrim i shkurtër...">
            
            <div class="d-flex justify-content-between align-items-center mb-2">
                <!-- Assigned To Avatar Dropdown -->
                <div class="dropdown">
                    <div class="" type="button" id="assignedToDropdown{{ $episode->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if($episode->assignedUser)
                            <div class="rounded-circle" style="width: 32px; height: 32px; overflow: hidden; cursor: pointer; border: 2px solid #10b981;" title="Caktuar: {{ $episode->assignedUser->name }}">
                                <img src="{{ $episode->assignedUser->profile_picture_url }}" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                        @else
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-muted" style="width: 32px; height: 32px; cursor: pointer; border: 1px dashed #ccc;" title="Cakto një përdorues">
                                <i class="fas fa-user-plus small"></i>
                            </div>
                        @endif
                    </div>
                    <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="assignedToDropdown{{ $episode->id }}" style="border-radius: 12px; min-width: 200px;">
                        <h6 class="dropdown-header font-weight-bold">Cakto Tek</h6>
                        <button class="dropdown-item d-flex align-items-center py-2 episode-assign-option" type="button" data-val="" data-id="{{ $episode->id }}">
                            <div class="rounded-circle bg-light mr-2 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px;">
                                <i class="fas fa-times small text-muted"></i>
                            </div>
                            <span class="small font-weight-bold text-muted">Hiq caktimin</span>
                        </button>
                        <div class="dropdown-divider"></div>
                        @foreach($users as $user)
                            <button class="dropdown-item d-flex align-items-center py-2 episode-assign-option" type="button" data-val="{{ $user->id }}" data-id="{{ $episode->id }}">
                                <div class="rounded-circle mr-2 overflow-hidden" style="width: 24px; height: 24px;">
                                    <img src="{{ $user->profile_picture_url }}" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                                <span class="small font-weight-bold {{ $episode->assigned_to == $user->id ? 'text-success' : '' }}">{{ $user->name }}</span>
                            </button>
                        @endforeach
                    </div>
                    <!-- Hidden input for auto-save logic -->
                    <input type="hidden" class="episode-assigned" value="{{ $episode->assigned_to }}">
                </div>

                <button class="btn btn-link p-0 text-muted expand-btn" style="font-size: 0.85rem; font-weight: 600; text-decoration: none;">
                    Zgjero <i class="fas fa-chevron-down ml-1"></i>
                </button>
            </div>

            <div class="long-text-expandable" style="display: none;">
                <hr>
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted mb-2">Teksti i Detajuar</label>
                    <textarea class="form-control border-0 p-0 episode-text" style="font-size: 0.95rem; min-height: 100px; background: transparent; box-shadow: none;" placeholder="Teksti i detajuar...">{{ $episode->text }}</textarea>
                </div>
                
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted mb-2">Prompts / Udhëzime</label>
                    <textarea class="form-control border-0 bg-light p-3 episode-promts" style="font-size: 0.9rem; min-height: 80px; border-radius: 12px; resize: vertical;" placeholder="Shkruaj prompts ose udhëzime këtu...">{{ $episode->promts }}</textarea>
                </div>

                <div class="mt-4">
                    <label class="small font-weight-bold text-muted mb-2">Asetet e Episodit</label>
                    <div class="d-flex flex-wrap" id="episode-assets-{{ $episode->id }}">
                        @forelse($episode->assets as $asset)
                            <div class="badge badge-light p-2 mr-2 mb-2" style="border-radius: 8px; font-weight: 600; color: #374151;">
                                <i class="fas fa-file-alt mr-1"></i> {{ $asset->title }}
                            </div>
                        @empty
                            <p class="text-muted small">Nuk ka asete të lidhura me këtë episod.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
