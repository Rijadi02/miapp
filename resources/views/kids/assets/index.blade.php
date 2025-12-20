@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($assets as $asset)
    <div class="col-xl-3 col-md-6 mb-5">
        @php
            $typeConfig = [
                'audio' => ['bg' => '#eff6ff', 'badge' => '#dbeafe', 'icon' => 'fa-headphones'],
                'video' => ['bg' => '#fff7ed', 'badge' => '#ffedd5', 'icon' => 'fa-play-circle'],
                'pdf'   => ['bg' => '#fdf2f8', 'badge' => '#fce7f3', 'icon' => 'fa-file-pdf'],
                'text'  => ['bg' => '#f0fdf4', 'badge' => '#dcfce7', 'icon' => 'fa-file-alt'],
                'zip'   => ['bg' => '#f5f3ff', 'badge' => '#ede9fe', 'icon' => 'fa-file-archive'],
                'image' => ['bg' => '#ecfeff', 'badge' => '#cffafe', 'icon' => 'fa-image']
            ];
            $config = $typeConfig[$asset->type] ?? ['bg' => '#f3f4f6', 'badge' => '#e5e7eb', 'icon' => 'fa-file'];
        @endphp

        <div class="asset-card">
            <div class="asset-inner-box p-4" style="background-color: {{ $config['bg'] }};">
                <span class="badge py-2 px-3 mb-4" style="background: {{ $config['badge'] }}; color: var(--kids-primary); border-radius: 12px; font-weight: 700; text-transform: uppercase; font-size: 0.75rem;">
                    {{ $asset->type }}
                </span>
                
                <h3 class="asset-title mb-2">{{ $asset->title }}</h3>
                <p class="asset-description mb-4">
                    {{ Str::words($asset->description, 10) }}
                </p>

                <div class="asset-preview-area">
                    @if($asset->type == 'audio')
                        <div class="audio-container p-3 bg-white shadow-sm" style="border-radius: 16px;">
                            <audio controls class="w-100" style="height: 30px;">
                                <source src="{{ $asset->asset }}" type="audio/mpeg">
                            </audio>
                        </div>
                    @elseif($asset->type == 'video')
                        <div class="video-preview position-relative bg-dark" style="height: 140px; border-radius: 20px; overflow: hidden; cursor: pointer;" data-toggle="modal" data-target="#videoModal{{ $asset->id }}">
                            <video class="w-100 h-100" muted style="object-fit: cover;">
                                <source src="{{ $asset->asset }}" type="video/mp4">
                            </video>
                            <div class="video-play-overlay">
                                <i class="fas fa-play text-white fa-2x"></i>
                            </div>
                        </div>
                    @elseif($asset->type == 'image')
                        <div class="image-preview position-relative" style="height: 140px; border-radius: 20px; overflow: hidden; background: #fff; cursor: pointer;" data-toggle="modal" data-target="#imageModal{{ $asset->id }}">
                            <img src="{{ $asset->asset }}" class="w-100 h-100" style="object-fit: cover;">
                        </div>
                    @elseif($asset->type == 'pdf')
                        <div class="pdf-file-box">
                            <i class="fas fa-file-pdf fa-3x text-danger mb-2"></i>
                            <div class="small font-weight-bold">Dokument PDF</div>
                        </div>
                    @else
                        <div class="generic-file-box">
                            <i class="fas {{ $config['icon'] }} fa-3x mb-2" style="color: var(--kids-primary); opacity: 0.5;"></i>
                            <div class="small font-weight-bold">Skedar {{ strtoupper($asset->type) }}</div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="asset-footer px-4 py-3 d-flex justify-content-between align-items-center">
                @php
                    $actionText = 'Shkarko';
                    if($asset->type == 'pdf') $actionText = 'Hap PDF';
                    if($asset->type == 'image') $actionText = 'Shiko Imazhin';
                @endphp
                
                <div class="d-flex align-items-center">
                    <span class="footer-text font-weight-bold mr-3">{{ $actionText }}</span>
                    @if($asset->type == 'pdf')
                        <a href="{{ $asset->asset }}" target="_blank" class="footer-btn">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    @elseif($asset->type == 'image')
                        <a href="#" data-toggle="modal" data-target="#imageModal{{ $asset->id }}" class="footer-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    @else
                        <a href="{{ $asset->asset }}" download class="footer-btn">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    @endif
                </div>
                
                <div class="footer-btn" data-toggle="modal" data-target="#editAssetModal{{ $asset->id }}" style="cursor: pointer; background: #e2e8f0;">
                    <i class="fas fa-cog"></i>
                </div>
            </div>
        </div>

        <!-- Edit Asset Modal -->
        <div class="modal fade" id="editAssetModal{{ $asset->id }}" tabindex="-1" role="dialog" aria-labelledby="editAssetModalLabel{{ $asset->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0" style="border-radius: 28px; overflow: hidden;">
                    <div class="modal-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="font-weight-bold mb-0" style="font-family: 'Outfit', sans-serif;">Përditëso Asetin</h2>
                            <form action="{{ route('assets.destroy', $asset) }}" method="POST" onsubmit="return confirm('A jeni të sigurt që dëshironi të fshini këtë aset?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0" style="font-weight: 600; text-decoration: none;">
                                    <i class="fas fa-trash-alt mr-2"></i> Fshi Asetin
                                </button>
                            </form>
                        </div>

                        <form action="{{ route('assets.update', $asset) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Titulli</label>
                                <input type="text" name="title" class="form-control border-0 bg-light" value="{{ $asset->title }}" required style="border-radius: 12px; padding: 1.5rem;">
                            </div>
                            
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Përshkrimi</label>
                                <textarea name="description" class="form-control border-0 bg-light" rows="3" required style="border-radius: 12px; padding: 1.5rem;">{{ $asset->description }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="small font-weight-bold text-uppercase text-muted">Lloji</label>
                                        <select name="type" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                            <option value="image" {{ $asset->type == 'image' ? 'selected' : '' }}>Imazh</option>
                                            <option value="audio" {{ $asset->type == 'audio' ? 'selected' : '' }}>Audio</option>
                                            <option value="video" {{ $asset->type == 'video' ? 'selected' : '' }}>Video</option>
                                            <option value="pdf" {{ $asset->type == 'pdf' ? 'selected' : '' }}>PDF</option>
                                            <option value="text" {{ $asset->type == 'text' ? 'selected' : '' }}>Tekst/Dok</option>
                                            <option value="zip" {{ $asset->type == 'zip' ? 'selected' : '' }}>ZIP/Skedarë</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label class="small font-weight-bold text-uppercase text-muted">Skedari (lëreni bosh për të ruajtur aktualin)</label>
                                        <input type="file" name="asset_file" class="form-control border-0 bg-light" style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: var(--kids-primary); border: none; font-size: 1.1rem;">Ruaj Ndryshimet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->
        @if($asset->type == 'video')
        <div class="modal fade" id="videoModal{{ $asset->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content bg-black border-0 overflow-hidden" style="border-radius: 24px;">
                    <video controls class="w-100"><source src="{{ $asset->asset }}" type="video/mp4"></video>
                </div>
            </div>
        </div>
        @endif

        @if($asset->type == 'image')
        <div class="modal fade" id="imageModal{{ $asset->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content border-0 overflow-hidden" style="border-radius: 24px; background: transparent;">
                    <img src="{{ $asset->asset }}" class="w-100" style="border-radius: 24px;">
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach

    <!-- Add New Asset Card -->
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#createAssetModal">
            <div class="asset-card add-asset-card">
                <div class="add-content text-primary text-center">
                    <i class="fas fa-plus-circle fa-4x mb-3"></i>
                    <h3 class="asset-title mb-0" style="color: var(--kids-primary);">Shto Aset</h3>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Create Asset Modal -->
<div class="modal fade" id="createAssetModal" tabindex="-1" role="dialog" aria-labelledby="createAssetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 28px; overflow: hidden;">
            <div class="modal-body p-5">
                <h2 class="font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">Aset i Ri</h2>
                <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Titulli</label>
                        <input type="text" name="title" class="form-control border-0 bg-light" placeholder="Titulli i Asetit" required style="border-radius: 12px; padding: 1.5rem;">
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Përshkrimi</label>
                        <textarea name="description" class="form-control border-0 bg-light" rows="3" placeholder="Përshkrimi..." required style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Lloji</label>
                                <select name="type" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                    <option value="image">Imazh</option>
                                    <option value="audio">Audio</option>
                                    <option value="video">Video</option>
                                    <option value="pdf">PDF</option>
                                    <option value="text">Tekst/Dok</option>
                                    <option value="zip">ZIP/Skedarë</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Skedari</label>
                                <input type="file" name="asset" class="form-control border-0 bg-light" required style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: var(--kids-primary); border: none; font-size: 1.1rem;">Ngarko Asetin</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .asset-card {
        background: #fff;
        border-radius: 32px;
        height: 100%;
        min-height: 480px;
        display: flex;
        flex-direction: column;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        overflow: hidden;
    }

    .asset-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .asset-inner-box {
        margin: 12px;
        border-radius: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .asset-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.75rem;
        font-weight: 800;
        color: #000;
        line-height: 1.1;
    }

    .asset-description {
        font-size: 0.95rem;
        color: #64748b;
        line-height: 1.4;
    }

    .asset-footer {
        padding-bottom: 20px !important;
    }

    .footer-text {
        font-size: 1.1rem;
        color: #000;
    }

    .footer-btn {
        width: 48px;
        height: 48px;
        background: #f1f5f9;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        transition: all 0.2s ease;
        text-decoration: none !important;
    }

    .footer-btn:hover {
        background: #000;
        color: #fff;
    }

    .video-play-overlay {
        position: absolute; 
        inset: 0; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        background: rgba(0,0,0,0.3); 
        cursor: pointer;
        transition: background 0.3s;
    }

    .video-play-overlay:hover {
        background: rgba(0,0,0,0.5);
    }

    .pdf-file-box, .generic-file-box {
        background: rgba(255,255,255,0.6);
        border-radius: 20px;
        padding: 2.5rem 1rem;
        text-align: center;
    }

    .add-asset-card {
        background: rgba(168, 85, 247, 0.05) !important;
        border: 2px dashed rgba(168, 85, 247, 0.2) !important;
        justify-content: center;
        align-items: center;
    }

    .item-card-link {
        text-decoration: none !important;
        display: block;
        height: 100%;
    }

    .bg-black { background: #000; }
</style>
@endsection
