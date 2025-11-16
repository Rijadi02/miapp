<x-admin-master>
    @section('content')
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
            <div class="container-xl px-">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-layout">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                        </rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg></div>
                                Përkthimet
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen përkthimet qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">{{ isset($translation) ? 'Përditëso Përkthimin' : 'Shto Përkthim' }}</div>
                <div class="card-body">
                    @if (isset($translation))
                        <form method="POST" action="{{ route('translation.update', $translation->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="translator" class="col-md-12 col-form-label">Përkthyesi</label>
                                <input id="translator" type="text" name="translator"
                                    class="form-control @error('translator') is-invalid @enderror"
                                    value="{{ old('translator') ?? $translation->translator }}" autocomplete="translator">
                                @error('translator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? $translation->title }}" autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="code" class="col-md-12 col-form-label">Kodi</label>
                                <input id="code" type="text" name="code"
                                    class="form-control @error('code') is-invalid @enderror"
                                    value="{{ old('code') ?? $translation->code }}" autocomplete="code">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="arabic_text" class="col-md-12 col-form-label">Teksti në Arabisht</label>
                                <textarea id="arabic_text" name="arabic_text" rows="10"
                                    class="form-control @error('arabic_text') is-invalid @enderror">{{ old('arabic_text') ?? $translation->arabic_text }}</textarea>
                                @error('arabic_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="albanian_text" class="col-md-12 col-form-label">Teksti në Shqip</label>
                                <textarea id="albanian_text" name="albanian_text" rows="10"
                                    class="form-control @error('albanian_text') is-invalid @enderror">{{ old('albanian_text') ?? $translation->albanian_text }}</textarea>
                                @error('albanian_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="arabic_files" class="col-md-12 col-form-label">Skedarët në Arabisht</label>
                                @if ($translation->arabic_files && count($translation->arabic_files) > 0)
                                    <div class="mb-2">
                                        <p class="text-muted">Skedarët aktualë:</p>
                                        <ul>
                                            @foreach ($translation->arabic_files as $file)
                                                <li><a href="/storage/{{ $file }}"
                                                        target="_blank">{{ basename($file) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input id="arabic_files" type="file" name="arabic_files[]" multiple
                                    class="form-control @error('arabic_files.*') is-invalid @enderror">
                                <small class="text-muted">Mund të zgjidhni shumë skedarë në të njëjtën kohë</small>
                                @error('arabic_files.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="albanian_file" class="col-md-12 col-form-label">Skedari në Shqip</label>
                                @if ($translation->albanian_file)
                                    <p class="text-muted">Skedari aktual: <a
                                            href="/storage/{{ $translation->albanian_file }}" target="_blank">Shiko
                                            skedarin</a></p>
                                @endif
                                <input id="albanian_file" type="file" name="albanian_file"
                                    class="form-control @error('albanian_file') is-invalid @enderror"
                                    value="{{ old('albanian_file') }}" autocomplete="albanian_file">
                                @error('albanian_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('translation.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="translator" class="col-md-12 col-form-label">Përkthyesi</label>
                                <input id="translator" type="text" name="translator"
                                    class="form-control @error('translator') is-invalid @enderror"
                                    value="{{ old('translator') }}" autocomplete="translator">
                                @error('translator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                    autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="code" class="col-md-12 col-form-label">Kodi</label>
                                <input id="code" type="text" name="code"
                                    class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}"
                                    autocomplete="code">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="arabic_text" class="col-md-12 col-form-label">Teksti në Arabisht</label>
                                <textarea id="arabic_text" name="arabic_text" rows="10"
                                    class="form-control @error('arabic_text') is-invalid @enderror">{{ old('arabic_text') }}</textarea>
                                @error('arabic_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="albanian_text" class="col-md-12 col-form-label">Teksti në Shqip</label>
                                <textarea id="albanian_text" name="albanian_text" rows="10"
                                    class="form-control @error('albanian_text') is-invalid @enderror">{{ old('albanian_text') }}</textarea>
                                @error('albanian_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="arabic_files" class="col-md-12 col-form-label">Skedarët në Arabisht</label>
                                <input id="arabic_files" type="file" name="arabic_files[]" multiple
                                    class="form-control @error('arabic_files.*') is-invalid @enderror">
                                <small class="text-muted">Mund të zgjidhni shumë skedarë në të njëjtën kohë</small>
                                @error('arabic_files.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="albanian_file" class="col-md-12 col-form-label">Skedari në Shqip</label>
                                <input id="albanian_file" type="file" name="albanian_file"
                                    class="form-control @error('albanian_file') is-invalid @enderror"
                                    value="{{ old('albanian_file') }}" autocomplete="albanian_file">
                                @error('albanian_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto Përkthim</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($translations as $translation)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        <h5>{{ $translation->title }}</h5>
                                        <p class="text-muted">{{ $translation->translator }}</p>
                                        <p class="text-muted"><strong>Kodi:</strong> {{ $translation->code }}</p>
                                        <p class="text-muted">
                                            <small>{{ Str::limit($translation->arabic_text, 50) }}</small>
                                        </p>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('translation.edit', $translation->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $translation->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $translation->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shylej përkthimin</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej përkthimin.</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST"
                                                action="{{ route('translation.destroy', $translation->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Shlyej</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    @endsection

</x-admin-master>
