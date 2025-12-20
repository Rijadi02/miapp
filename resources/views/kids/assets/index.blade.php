@extends('components.kids-master')

@section('content')
<div class="row">
    @foreach($assets as $asset)
    <div class="col-xl-3 col-md-6 mb-5">
        @php
            $bgColors = [
                'audio' => 'background: #eff6ff;', // Blue-ish
                'video' => 'background: #fff7ed;', // Orange-ish
                'pdf'   => 'background: #fdf2f8;', // Pink-ish
                'text'  => 'background: #f0fdf4;', // Green-ish
                'zip'   => 'background: #f5f3ff;'  // Purple-ish
            ];
            $typeColors = [
                'audio' => '#dbeafe',
                'video' => '#ffedd5',
                'pdf'   => '#fce7f3',
                'text'  => '#dcfce7',
                'zip'   => '#ede9fe'
            ];
            $bgColor = $bgColors[$asset->type] ?? 'background: #f3f4f6;';
            $typeColor = $typeColors[$asset->type] ?? '#f3f4f6';
        @endphp

        <div class="asset-card" style="{{ $bgColor }}">
            <div class="asset-card-top p-4">
                <span class="badge py-2 px-3 mb-4" style="background: {{ $typeColor }}; color: var(--kids-primary); border-radius: 12px; font-weight: 700; text-transform: uppercase; font-size: 0.75rem;">
                    {{ $asset->type }}
                </span>
                
                <h3 class="asset-title mb-3">{{ $asset->title }}</h3>
                <p class="asset-description">
                    {{ Str::words($asset->description, 10) }}
                </p>

                <div class="asset-preview mt-4">
                    @if($asset->type == 'audio')
                        <audio controls class="w-100" style="height: 35px;">
                            <source src="{{ $asset->asset }}" type="audio/mpeg">
                        </audio>
                    @elseif($asset->type == 'video')
                        <div class="video-preview position-relative" style="height: 120px; border-radius: 16px; overflow: hidden; background: #000;">
                            <video class="w-100 h-100" muted>
                                <source src="{{ $asset->asset }}" type="video/mp4">
                            </video>
                            <div class="video-overlay" style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.3); cursor: pointer;" data-toggle="modal" data-target="#videoModal{{ $asset->id }}">
                                <i class="fas fa-play text-white fa-2x"></i>
                            </div>
                        </div>
                    @elseif($asset->type == 'pdf')
                        <div class="pdf-preview text-center py-4" style="background: rgba(255,255,255,0.5); border-radius: 16px;">
                            <i class="fas fa-file-pdf fa-3x text-danger mb-2"></i>
                            <div class="small font-weight-bold">PDF Document</div>
                        </div>
                    @elseif($asset->type == 'text')
                        <div class="text-preview p-3" style="background: rgba(255,255,255,0.5); border-radius: 16px; height: 120px; overflow: hidden; font-size: 0.8rem;">
                            <i class="fas fa-file-alt mr-2"></i> View Content
                        </div>
                    @elseif($asset->type == 'zip')
                        <div class="zip-preview text-center py-4" style="background: rgba(255,255,255,0.5); border-radius: 16px;">
                            <i class="fas fa-file-archive fa-3x text-warning mb-2"></i>
                            <div class="small font-weight-bold">ZIP Archive</div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="asset-card-bottom px-4 py-3 d-flex justify-content-between align-items-center bg-white" style="border-radius: 0 0 32px 32px;">
                @if($asset->type == 'pdf')
                    <a href="{{ $asset->asset }}" target="_blank" class="asset-action-text font-weight-bold" style="color: #000; text-decoration: none;">Open PDF</a>
                    <a href="{{ $asset->asset }}" target="_blank" class="btn-action">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                @elseif($asset->type == 'zip')
                    <a href="{{ $asset->asset }}" download class="asset-action-text font-weight-bold" style="color: #000; text-decoration: none;">Download ZIP</a>
                    <a href="{{ $asset->asset }}" download class="btn-action">
                        <i class="fas fa-download"></i>
                    </a>
                @else
                    <span class="asset-action-text font-weight-bold" style="color: #000;">Download</span>
                    <a href="{{ $asset->asset }}" download class="btn-action">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                @endif
            </div>
        </div>

        @if($asset->type == 'video')
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal{{ $asset->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content bg-black border-0 overflow-hidden" style="border-radius: 24px;">
                    <button type="button" class="close position-absolute p-3 text-white" data-dismiss="modal" style="right: 0; z-index: 10;">&times;</button>
                    <video controls class="w-100">
                        <source src="{{ $asset->asset }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach

    <!-- Add New Asset Card -->
    <div class="col-xl-3 col-md-6 mb-5">
        <a href="#" class="item-card-link" data-toggle="modal" data-target="#createAssetModal">
            <div class="asset-card add-card" style="height: 100%; min-height: 480px; justify-content: center; align-items: center; display: flex;">
                <div class="add-content text-primary text-center">
                    <i class="fas fa-plus fa-3x mb-3"></i>
                    <h3 class="asset-title mb-0" style="color: var(--kids-primary);">Add Asset</h3>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Create Asset Modal -->
<div class="modal fade" id="createAssetModal" tabindex="-1" role="dialog" aria-labelledby="createAssetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 24px; overflow: hidden;">
            <div class="modal-body p-5">
                <h2 class="font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">New Asset</h2>
                <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Title</label>
                        <input type="text" name="title" class="form-control border-0 bg-light" placeholder="Asset Title" required style="border-radius: 12px; padding: 1.5rem;">
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="small font-weight-bold text-uppercase text-muted">Description</label>
                        <textarea name="description" class="form-control border-0 bg-light" rows="3" placeholder="Description..." required style="border-radius: 12px; padding: 1.5rem;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">Type</label>
                                <select name="type" class="form-control border-0 bg-light" style="border-radius: 12px; height: auto; padding: 1rem 1.5rem;">
                                    <option value="audio">Audio</option>
                                    <option value="video">Video</option>
                                    <option value="pdf">PDF</option>
                                    <option value="text">Text/Doc</option>
                                    <option value="zip">ZIP/Files</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="small font-weight-bold text-uppercase text-muted">File</label>
                                <input type="file" name="asset" class="form-control border-0 bg-light" required style="border-radius: 12px; padding: 0.75rem 1.5rem; height: auto;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold" style="border-radius: 16px; background: var(--kids-primary); border: none;">Upload Asset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .asset-card {
        border-radius: 32px;
        height: 100%;
        min-height: 480px;
        display: flex;
        flex-direction: column;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .asset-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .asset-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.5rem;
        font-weight: 800;
        color: #000;
        line-height: 1.2;
    }

    .asset-description {
        font-size: 0.9rem;
        color: #64748b;
        line-height: 1.5;
    }

    .btn-action {
        width: 45px;
        height: 45px;
        background: #f8fafc;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        transition: all 0.2s ease;
        text-decoration: none !important;
    }

    .btn-action:hover {
        background: #000;
        color: #fff;
    }

    .add-card {
        background: rgba(168, 85, 247, 0.05) !important;
        border: 2px dashed rgba(168, 85, 247, 0.3) !important;
    }

    .item-card-link {
        text-decoration: none !important;
        display: block;
        height: 100%;
    }

    /* Video player specific */
    .video-preview video {
        object-fit: cover;
    }

    /* Modal Black Bg */
    .modal-content.bg-black {
        background: #000;
    }
</style>
@endsection
