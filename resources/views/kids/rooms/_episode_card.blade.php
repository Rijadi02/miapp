<div class="card border-0 shadow-sm mb-3 episode-card" data-id="{{ $episode->id }}" style="border-radius: 16px; overflow: visible; transition: all 0.3s ease; z-index: 1;">
    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center" style="border-radius: 16px 16px 0 0;">
        <div class="d-flex align-items-center" style="flex: 1; min-width: 0;">
            <div class="mr-3" style="width: 4px; height: 32px; background: #10b981; border-radius: 4px;"></div>
            <div style="flex: 1; min-width: 0;">
                <input type="text" class="form-control border-0 p-0 font-weight-bold episode-title" value="{{ $episode->title }}" style="font-size: 1.1rem; color: #111827; background: transparent; box-shadow: none;">
                <input type="text" class="form-control border-0 p-0 text-muted small episode-key" value="{{ $episode->key }}" style="font-size: 0.8rem; background: transparent; box-shadow: none;">
            </div>
        </div>
        
        <div class="d-flex align-items-center ml-3">
             <!-- Assigned To Avatar Dropdown -->
             <div class="dropdown mr-3">
                <div class="" type="button" id="assignedToDropdown{{ $episode->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; z-index: 1002;">
                    @if($episode->assignedUser)
                        <div class="rounded-circle assigned-avatar-container" style="width: 32px; height: 32px; overflow: hidden; cursor: pointer; border: 2px solid #10b981;" title="Caktuar: {{ $episode->assignedUser->name }}">
                            <img src="{{ $episode->assignedUser->profile_picture_url }}" class="w-100 h-100 assigned-avatar-img" style="object-fit: cover;">
                        </div>
                    @else
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center text-muted assigned-avatar-container" style="width: 32px; height: 32px; cursor: pointer; border: 1px dashed #ccc;" title="Cakto një përdorues">
                            <i class="fas fa-user-plus small assigned-avatar-icon"></i>
                            <img src="" class="w-100 h-100 assigned-avatar-img d-none" style="object-fit: cover;">
                        </div>
                    @endif
                </div>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow-lg" aria-labelledby="assignedToDropdown{{ $episode->id }}" style="border-radius: 12px; min-width: 200px; z-index: 1050;">
                    <h6 class="dropdown-header font-weight-bold">Cakto Tek</h6>
                    <button class="dropdown-item d-flex align-items-center py-2 episode-assign-option" type="button" data-val="" data-id="{{ $episode->id }}" data-img="" data-name="">
                        <div class="rounded-circle bg-light mr-2 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px;">
                            <i class="fas fa-times small text-muted"></i>
                        </div>
                        <span class="small font-weight-bold text-muted">Hiq caktimin</span>
                    </button>
                    <div class="dropdown-divider"></div>
                    @foreach($users as $user)
                        <button class="dropdown-item d-flex align-items-center py-2 episode-assign-option" type="button" data-val="{{ $user->id }}" data-id="{{ $episode->id }}" data-img="{{ $user->profile_picture_url }}" data-name="{{ $user->name }}">
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

            <button class="btn btn-light text-danger mr-2 delete-episode-btn" data-id="{{ $episode->id }}" data-title="{{ $episode->title }}" style="width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.2s;" title="Fshij Episodin">
                <i class="fas fa-trash-alt small"></i>
            </button>

            <button class="btn btn-light expand-btn" style="width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6b7280; transition: all 0.2s;">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
    </div>
    
    <div class="card-body pt-0 pb-3">
        <div class="description-container">
            <input type="text" class="form-control border-0 p-0 mb-2 episode-description text-muted" value="{{ $episode->description }}" style="font-size: 0.95rem; background: transparent; box-shadow: none;" placeholder="Përshkrim i shkurtër...">
            
            <div class="long-text-expandable" style="display: none;">
                <hr>
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted mb-2">Teksti i Detajuar</label>
                    <textarea class="form-control border-0 p-3 episode-text" style="font-size: 0.95rem; min-height: 300px; background: #f8fafc; border-radius: 12px; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);" placeholder="Teksti i detajuar...">{{ $episode->text }}</textarea>
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
