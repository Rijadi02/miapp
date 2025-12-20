@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($characters as $character)
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#editCharacterModal{{ $character->id }}">
            <div class="item-card" style="background-image: url('{{ $character->thumbnail }}');">
                <div class="item-overlay">
                    <div class="item-content">
                        <h3 class="item-title">{{ $character->name }}</h3>
                        <p class="item-description">
                            {{ Str::words($character->short_description, 15) }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Edit Character Modal -->
    <div class="modal fade" id="editCharacterModal{{ $character->id }}" tabindex="-1" role="dialog" aria-labelledby="editCharacterModalLabel{{ $character->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0" style="border-radius: 24px; overflow: hidden;">
                <div class="modal-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="font-weight-bold mb-0" style="font-family: 'Outfit', sans-serif;">Përditëso Personazhin</h2>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST" onsubmit="return confirm('A jeni të sigurt që dëshironi të fshini këtë personazh?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger p-0" style="font-weight: 600; text-decoration: none;">
                                <i class="fas fa-trash-alt mr-2"></i> Fshi Personazhin
                            </button>
                        </form>
                    </div>
                    
                    <form action="{{ route('characters.update', $character) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="small font-weight-bold text-uppercase text-muted">Emri</label>
                                    <input type="text" name="name" class="form-control border-0 bg-light" value="{{ $character->name }}" required style="border-radius: 12px; padding: 1.5rem;">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-4">
                                    <label class="small font-weight-bold text-uppercase text-muted">Mosha</label>
                                    <input type="text" name="age" class="form-control border-0 bg-light" value="{{ $character->age }}" style="border-radius: 12px; padding: 1.5rem;">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-4">
                                    <label class="small font-weight-bold text-uppercase text-muted">Gjinia</label>
                                    <select name="gender" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                        <option value="Mashkull" {{ $character->gender == 'Mashkull' ? 'selected' : '' }}>Mashkull</option>
                                        <option value="Femer" {{ $character->gender == 'Femer' ? 'selected' : '' }}>Femer</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label class="small font-weight-bold text-uppercase text-muted">Përshkrim i Shkurtër (15 fjalë)</label>
                            <textarea name="short_description" class="form-control border-0 bg-light" rows="2" style="border-radius: 12px; padding: 1.5rem;">{{ $character->short_description }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label class="small font-weight-bold text-uppercase text-muted">Përshkrim i Detajuar</label>
                            <textarea name="detailed_description" class="form-control border-0 bg-light" rows="4" style="border-radius: 12px; padding: 1.5rem;">{{ $character->detailed_description }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="small font-weight-bold text-uppercase text-muted">Imazhi (lëreni bosh për të ruajtur aktualin)</label>
                                    <input type="file" name="thumbnail" class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="small font-weight-bold text-uppercase text-muted">Asetet (lëreni bosh për të ruajtur aktualet)</label>
                                    <input type="file" name="assets[]" multiple class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: #3b82f6; border: none;">Ruaj Ndryshimet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Add New Character Card -->
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#createCharacterModal">
            <div class="item-card add-card">
                <div class="add-content text-primary">
                    <i class="fas fa-plus fa-3x mb-3"></i>
                    <h3 class="item-title mb-0">Shto Personazh</h3>
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
                <h2 class="font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">Personazh i Ri</h2>
                <form action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Emri</label>
                                <input type="text" name="name" class="form-control border-0 bg-light" placeholder="Emri i Personazhit" required style="border-radius: 12px; padding: 1.5rem;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Mosha</label>
                                <input type="text" name="age" class="form-control border-0 bg-light" placeholder="Mosha" style="border-radius: 12px; padding: 1.5rem;">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Gjinia</label>
                                <select name="gender" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                    <option value="Mashkull">Mashkull</option>
                                    <option value="Femer">Femer</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Përshkrim i Shkurtër (15 fjalë)</label>
                        <textarea name="short_description" class="form-control border-0 bg-light" rows="2" placeholder="Përmbledhje e shkurtër..." style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Përshkrim i Detajuar</label>
                        <textarea name="detailed_description" class="form-control border-0 bg-light" rows="4" placeholder="Historia e plotë..." style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Imazhi</label>
                                <input type="file" name="thumbnail" class="form-control border-0 bg-light" required style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Asetet (PDF, Video, Imazhe)</label>
                                <input type="file" name="assets[]" multiple class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: #3b82f6; border: none;">Krijo Personazh</button>
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
        height: 360px;
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
