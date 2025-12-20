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
            
            <div class="row align-items-center mb-2">
                <div class="col-md-6">
                    <label class="small font-weight-bold text-muted mb-1" style="font-size: 0.75rem; text-transform: uppercase;">Caktuar për:</label>
                    <select class="form-control border-0 bg-light episode-assigned p-2" style="border-radius: 8px; font-size: 0.85rem; height: auto;">
                        <option value="">Askujt</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $episode->assigned_to == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="long-text-expandable" style="display: none;">
                <hr>
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted mb-2">Teksti i Detajuar</label>
                    <textarea class="form-control border-0 p-0 episode-text" style="font-size: 0.95rem; min-height: 100px; background: transparent; box-shadow: none;" placeholder="Teksti i detajuar...">{{ $episode->text }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="small font-weight-bold text-muted mb-2">Personazhet e Episodit</label>
                    <div class="row">
                        @foreach($roomCharacters as $char)
                            <div class="col-6 mb-2">
                                <label class="d-flex align-items-center p-2 rounded bg-light" style="cursor: pointer; transition: all 0.2s;">
                                    <input type="checkbox" class="mr-2 episode-character-checkbox" value="{{ $char->id }}" {{ in_array($char->id, $episode->character_ids ?? []) ? 'checked' : '' }}>
                                    <span style="font-size: 0.85rem; font-weight: 600;">{{ $char->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
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
