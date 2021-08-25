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
                                @if (isset($reciter))
                                    Recitimet e recituesit :&nbsp; <b>{{ $reciter->name }}</b>
                                @else
                                    Editimi i recitimit : &nbsp; <b>{{ $recitation->title }}</b>
                                @endif
                            </h1>
                            <div class="page-header-subtitle">Këtu vendosen recitimit per secilin recitues</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Recitimin</div>
                <div class="card-body">
                    @if (isset($recitation))
                        <form method="POST" action="{{ route('reciter.recitations.update', $recitation->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? $recitation->title }}" autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="surah" class="col-md-12 col-form-label">Surja</label>
                                <input id="surah" type="text" name="surah"
                                    class="form-control @error('surah') is-invalid @enderror"
                                    value="{{ old('surah') ?? $recitation->surah }}" autocomplete="surah">
                                @error('surah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="ayahs" class="col-md-12 col-form-label">Ajetet</label>
                                <input id="ayahs" type="text" name="ayahs"
                                    class="form-control @error('ayahs') is-invalid @enderror"
                                    value="{{ old('ayahs') ?? $recitation->ayahs }}" autocomplete="ayahs">
                                @error('ayahs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku i recitimit</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror"
                                    value="{{ old('link') ?? $recitation->link }}" autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="audio" class="col-md-12 col-form-label">Audio e recitimit</label>
                                <input id="audio" type="file" name="audio"
                                    class="form-control @error('audio') is-invalid @enderror"
                                    value="{{ old('audio') ?? $recitation->audio }}" autocomplete="audio">
                                @error('audio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('reciter.recitations.store',$reciter->id) }}" enctype="multipart/form-data">
                            @csrf

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
                                <label for="surah" class="col-md-12 col-form-label">Surja</label>
                                <input id="surah" type="text" name="surah"
                                    class="form-control @error('surah') is-invalid @enderror" value="{{ old('surah') }}"
                                    autocomplete="surah">
                                @error('surah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="ayahs" class="col-md-12 col-form-label">Ajetet</label>
                                <input id="ayahs" type="text" name="ayahs"
                                    class="form-control @error('ayahs') is-invalid @enderror" value="{{ old('ayahs') }}"
                                    autocomplete="ayahs">
                                @error('ayahs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku i recitimit</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}"
                                    autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="audio" class="col-md-12 col-form-label">Audio e recitimit</label>
                                <input id="audio" type="file" name="audio"
                                    class="form-control @error('audio') is-invalid @enderror" value="{{ old('audio') }}"
                                    autocomplete="audio">
                                @error('audio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto recitim</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Të gjitë recitimet</div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titulli</th>
                                <th>Surja dhe Ajeti</th>
                                <th>Modifikimet</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titulli</th>
                                <th>Surja dhe Ajeti</th>
                                <th>Modifikimet</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($recitations as $recitation)

                                <tr>
                                    <td>{{ $recitation->title }}</td>
                                    <td>{{ $recitation->surah }} {{$recitation->ayahs}}</td>
                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                            href="{{ route('reciter.recitations.edit', $recitation->id) }}"><i
                                                data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $recitation->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Shylej Kontentin</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">Kjo do ta shlyej recitimin, te cilin so mund ta
                                                        riktheni më</div>
                                                    <div class="modal-footer"><button class="btn btn-secondary"
                                                            type="button" data-dismiss="modal">Mbyll</button>
                                                        <form method="POST"
                                                            action="{{ route('reciter.recitations.destroy', $recitation->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                            data-toggle="modal" data-target="#exampleModal{{ $recitation->id }}"><i
                                                data-feather="trash-2"></i></button>



                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('content');
            CKEDITOR.replace('hadith');
            CKEDITOR.replace('arabic');
            CKEDITOR.replace('transliteration');
        </script>
    @endsection

</x-admin-master>
