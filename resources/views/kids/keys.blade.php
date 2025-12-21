@extends('components.kids-master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 font-weight-bold mb-0" style="font-family: 'Outfit', sans-serif;">User Keys Management</h1>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                @foreach($users as $user)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm" style="border-radius: 16px;">
                        <div class="card-header bg-white border-0 pt-4 pb-3">
                            <div class="d-flex align-items-center">
                                <img src="{{ $user->profile_picture_url }}" alt="{{ $user->name }}" class="rounded-circle mr-3" style="width: 40px; height: 40px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-0 font-weight-bold">{{ $user->name }}</h6>
                                    <small class="text-muted">{{ $user->email }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('users.keys.update', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="form-group mb-3">
                                    <label class="small font-weight-bold text-muted mb-2">Keys</label>
                                    <div id="keys-container-{{ $user->id }}" class="keys-container">
                                        @if($user->keys && count($user->keys) > 0)
                                            @foreach($user->keys as $index => $key)
                                            <div class="input-group mb-2 key-input-group">
                                                <input type="text" name="keys[]" class="form-control" value="{{ $key }}" placeholder="Enter key" style="border-radius: 8px 0 0 8px;">
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

                                <button type="submit" class="btn btn-primary btn-block" style="border-radius: 12px; padding: 0.75rem;">
                                    <i class="fas fa-save mr-2"></i>Update Keys
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function() {
    // Add new key input
    $('.add-key').on('click', function() {
        var userId = $(this).data('user-id');
        var container = $('#keys-container-' + userId);
        var keyInput = `
            <div class="input-group mb-2 key-input-group">
                <input type="text" name="keys[]" class="form-control" placeholder="Enter key" style="border-radius: 8px 0 0 8px;">
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
});
</script>
@endpush

<style>
.keys-container {
    max-height: 200px;
    overflow-y: auto;
}

.key-input-group .form-control {
    border-right: none;
}

.key-input-group .input-group-append .btn {
    border-left: none;
}

.card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}
</style>
@endsection
