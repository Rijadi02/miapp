@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($characters as $character)
    <div class="col-xl-4 col-md-6 mb-5">
        <a href="#" class="item-card-link">
            <div class="item-card" style="background-image: url('{{ $character->thumbnail }}');">
                <div class="item-overlay">
                    <div class="item-content">
                        <h3 class="item-title">{{ $character->name }}</h3>
                        <div class="item-info mb-3">
                            <span class="badge badge-light px-3 py-2 mr-2" style="border-radius: 12px; font-weight: 700;">{{ $character->age }} Yrs</span>
                            <span class="badge badge-light px-3 py-2" style="border-radius: 12px; font-weight: 700;">{{ strtoupper($character->gender) }}</span>
                        </div>
                        <p class="item-description">
                            {{ Str::words($character->short_description, 15) }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach

    <!-- Add New Character Card -->
    <div class="col-xl-4 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#createCharacterModal">
            <div class="item-card add-card">
                <div class="add-content text-primary">
                    <i class="fas fa-plus fa-3x mb-3"></i>
                    <h3 class="item-title mb-0">Add Character</h3>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Create Character Modal -->
<div class="modal fade" id="createCharacterModal" tabindex="-1" role="dialog" aria-labelledby="createCharacterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 24px; overflow: hidden;">
            <div class="modal-body p-5">
                <h2 class="font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">New Character</h2>
                <form action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Name</label>
                                <input type="text" name="name" class="form-control border-0 bg-light" placeholder="Character Name" required style="border-radius: 12px; padding: 1.5rem;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Age</label>
                                <input type="text" name="age" class="form-control border-0 bg-light" placeholder="Age" style="border-radius: 12px; padding: 1.5rem;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Gender</label>
                                <select name="gender" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                    <option value="Mashkull">Mashkull</option>
                                    <option value="Femër">Femër</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Short Description (15 words)</label>
                        <textarea name="short_description" class="form-control border-0 bg-light" rows="2" placeholder="Brief summary..." style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Detailed Description</label>
                        <textarea name="detailed_description" class="form-control border-0 bg-light" rows="4" placeholder="Full story..." style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Thumbnail Image</label>
                                <input type="file" name="thumbnail" class="form-control border-0 bg-light" required style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Assets (PDF, Video, Images)</label>
                                <input type="file" name="assets[]" multiple class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: #3b82f6; border: none;">Create Character</button>
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
        height: 300px;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .add-card {
        background: rgba(59, 130, 246, 0.05);
        border: 2px dashed rgba(59, 130, 246, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .add-content {
        text-align: center;
    }

    .item-card-link:hover .item-card {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .add-card:hover {
        background: rgba(59, 130, 246, 0.1);
        border-color: #3b82f6;
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

    /* Modal styling overrides */
    .form-control:focus {
        box-shadow: none;
        background-color: #f3f4f6 !important;
    }
    
    .text-primary {
        color: #3b82f6 !important;
    }
</style>
@endsection
