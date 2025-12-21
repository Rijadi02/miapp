@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($users as $user)
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#editKeysModal{{ $user->id }}">
            <div class="item-card" style="background-image: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));">
                <div class="item-overlay">
                    <div class="user-avatar-overlay">
                        <img src="{{ $user->profile_picture_url }}" alt="{{ $user->name }}" class="user-avatar-image">
                    </div>
                    <div class="item-content">
                        <div class="d-flex align-items-center mb-3">
                            <div>
                                <h3 class="item-title mb-0">{{ $user->name }}</h3>
                                <p class="item-description mb-0">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="keys-preview">
                            @if($user->keys && count($user->keys) > 0)
                                <div class="keys-count badge" style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">
                                    <i class="fas fa-key mr-1"></i>{{ count($user->keys) }} {{ Str::plural('Key', count($user->keys)) }}
                                </div>
                                <div class="keys-list mt-3">
                                    @foreach(array_slice($user->keys, 0, 2) as $key)
                                        <div class="key-item" style="background: rgba(255,255,255,0.1); padding: 0.25rem 0.75rem; border-radius: 12px; margin-bottom: 0.25rem; font-size: 0.8rem; color: white;">
                                            {{ Str::limit($key, 20) }}
                                        </div>
                                    @endforeach
                                    @if(count($user->keys) > 2)
                                        <div class="key-item" style="background: rgba(255,255,255,0.1); padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.8rem; color: white;">
                                            +{{ count($user->keys) - 2 }} more...
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="no-keys" style="color: rgba(255,255,255,0.7);">
                                    <i class="fas fa-key fa-2x mb-2"></i>
                                    <div>No keys assigned</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Edit Keys Modal -->
    <div class="modal fade" id="editKeysModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editKeysModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0" style="border-radius: 24px; overflow: hidden;">
                <div class="modal-body p-5">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ $user->profile_picture_url }}" alt="{{ $user->name }}" class="rounded-circle mr-3" style="width: 50px; height: 50px; object-fit: cover;">
                        <div>
                            <h2 class="font-weight-bold mb-0" style="font-family: 'Outfit', sans-serif;">{{ $user->name }}</h2>
                            <p class="text-muted mb-0">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Keys</label>
                        <div id="keys-container-{{ $user->id }}" class="keys-container">
                            @if($user->keys && count($user->keys) > 0)
                                @foreach($user->keys as $index => $key)
                                <div class="input-group mb-2 key-input-group">
                                    <input type="text" name="keys[]" class="form-control key-input" value="{{ $key }}" placeholder="Enter key" style="border-radius: 8px 0 0 8px;" data-user-id="{{ $user->id }}">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-danger remove-key" style="border-radius: 0 8px 8px 0;">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm add-key" data-user-id="{{ $user->id }}" style="border-radius: 8px;">
                            <i class="fas fa-plus mr-1"></i>Add Key
                        </button>
                    </div>

                    <div class="alert alert-success d-none" id="success-alert-{{ $user->id }}" role="alert">
                        <i class="fas fa-check-circle mr-2"></i>Keys updated successfully!
                    </div>

                    <div class="alert alert-danger d-none" id="error-alert-{{ $user->id }}" role="alert">
                        <i class="fas fa-exclamation-circle mr-2"></i><span id="error-message-{{ $user->id }}"></span>
                    </div>
                </div>
            </div>
        </div>
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
        height: 380px;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .item-card-link:hover .item-card {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .item-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.3) 70%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2rem;
    }

    .user-avatar-overlay {
        position: absolute;
        top: 2rem;
        right: 2rem;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid rgba(255,255,255,0.8);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .user-avatar-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
    }

    .keys-container {
        max-height: 300px;
        overflow-y: auto;
    }

    .key-input-group .form-control {
        border-right: none;
    }

    .key-input-group .input-group-append .btn {
        border-left: none;
    }

    .no-keys {
        text-align: center;
        padding: 2rem 0;
    }

    .keys-count {
        display: inline-block;
    }

    .keys-list {
        max-height: 120px;
        overflow: hidden;
    }

    .key-item {
        word-break: break-all;
    }

    /* Modal styling overrides */
    .form-control:focus {
        box-shadow: none;
        background-color: #f3f4f6 !important;
    }
</style>

@push('scripts')
<script>
$(document).ready(function() {
    // Add new key input
    $('.add-key').on('click', function() {
        var userId = $(this).data('user-id');
        var container = $('#keys-container-' + userId);
        var keyInput = `
            <div class="input-group mb-2 key-input-group">
                <input type="text" name="keys[]" class="form-control key-input" placeholder="Enter key" style="border-radius: 8px 0 0 8px;" data-user-id="${userId}">
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-danger remove-key" style="border-radius: 0 8px 8px 0;">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        container.append(keyInput);
    });

    // Remove key input (using event delegation for dynamic elements)
    $(document).on('click', '.remove-key', function() {
        $(this).closest('.key-input-group').remove();
    });

    // Auto-save on key input change
    $(document).on('blur', '.key-input', function() {
        var userId = $(this).data('user-id');
        saveKeys(userId);
    });

    // Auto-save when adding/removing keys
    $(document).on('click', '.add-key, .remove-key', function() {
        var userId = $(this).data('user-id') || $(this).closest('.modal').find('.key-input').first().data('user-id');
        setTimeout(function() {
            saveKeys(userId);
        }, 100);
    });

    function saveKeys(userId) {
        var keys = [];
        $('#keys-container-' + userId + ' input[name="keys[]"]').each(function() {
            var value = $(this).val().trim();
            if (value) {
                keys.push(value);
            }
        });

        // Hide previous alerts
        $('#success-alert-' + userId).addClass('d-none');
        $('#error-alert-' + userId).addClass('d-none');

        $.ajax({
            url: '{{ route("users.keys.update", ":userId") }}'.replace(':userId', userId),
            method: 'POST',
            data: {
                keys: keys,
                _method: 'PATCH',
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#success-alert-' + userId).removeClass('d-none');
                // Refresh the page content to show updated keys
                setTimeout(function() {
                    location.reload();
                }, 1500);
            },
            error: function(xhr) {
                var errorMessage = 'An error occurred while saving keys.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).flat().join(', ');
                }
                $('#error-message-' + userId).text(errorMessage);
                $('#error-alert-' + userId).removeClass('d-none');
            }
        });
    }
});
</script>
@endpush
@endsection
