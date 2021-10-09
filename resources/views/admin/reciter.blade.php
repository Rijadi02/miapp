<x-admin-master>
    @section('content')
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
            <div class="container-xl px-">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg></div>
                                Recituesit
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen recituesit qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto recituesin</div>
                <div class="card-body">
                    @if (isset($reciter))
                        <form method="POST" action="{{ route('reciter.update', $reciter->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i recituesit</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $reciter->name }}" autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="image" class="col-md-12 col-form-label">Fotoja e recituesit</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') ?? $reciter->image }}" autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso recituesin</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('reciter.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i recituesit</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="image" class="col-md-12 col-form-label">Fotoja e recituesit</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"
                                    autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <button type="submit" class="btn btn-primary ">Shto recituesin</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($reciters as $reciter)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        <a style="text-decoration: none" href="{{ route('reciter.recitations', $reciter->id) }}">
                                            <img class="img-fluid mb-4" src="/storage/{{ $reciter->image }}" alt="">
                                            <h5>{{ $reciter->name }}</h5>
                                        </a>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('reciter.edit', $reciter->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $reciter->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $reciter->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shylej recituesin</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej recituesin</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST" action="{{ route('reciter.destroy', $reciter->id) }}">
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
