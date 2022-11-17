<x-admin-master>
    @section('content')
     <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
        <div class="container-xl px-">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></div>
                             @if(isset($chapter))
                             Kontenti për kapitullin :&nbsp; <b>{{$chapter->name}}</b>
                             @else
                             Editimi i kontentit : &nbsp; <b>{{$content->title}}</b>
                             @endif
                        </h1>
                        <div class="page-header-subtitle">The default page header layout with main content that overlaps the background of the page header</div>
                        @if(isset($chapter))
                        <a href="{{route('book.chapters',$chapter->book_id)}}" class="btn btn-white text-black mt-3"><i style="font-size: 10px" class="fa fa-arrow-left ml-1"></i> &nbsp; Kthehu te Kapitujt</a>
                        @else
                        <a href="{{route('book.chapters',$content->chapter->book_id)}}" class="btn btn-white text-black mt-3"><i style="font-size: 10px" class="fa fa-arrow-left ml-1"></i> &nbsp; Kthehu te Kapitujt</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Kontentin</div>
                <div class="card-body">
                    @if (isset($content))
                    <form method="POST" action="{{ route('chapter.contents.update', $content->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="col-lg-12">
                            <label for="number" class="col-md-12 col-form-label">Numri i renditjes</label>
                            <input id="number" type="number" name="number"
                                class="form-control @error('number') is-invalid @enderror"
                                value="{{ old('number') ?? $content->number }}" autocomplete="number">
                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="title" class="col-md-12 col-form-label">Titulli(sa here të thuhet, psh: 3)</label>
                            <input id="title" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') ?? $content->title }}" autocomplete="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-12">
                            <label for="arabic" class="col-md-12 col-form-label">Kontenti Arabisht</label>
                            <textarea  id="arabic" name="arabic"  class="form-control @error("arabic") is-invalid @enderror">{{$content->arabic}}</textarea>
                            @error('arabic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-lg-12">
                            <label for="transliteration" class="col-md-12 col-form-label">Transliterimi</label>
                            <textarea  id="transliteration" name="transliteration" class="form-control @error("transliteration") is-invalid @enderror">{{$content->transliteration}}</textarea>
                            @error('transliteration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-lg-12">
                            <label for="content" class="col-md-12 col-form-label">Kontenti ne Shqip</label>
                            <textarea id="content" name="content"  class="form-control @error("content") is-invalid @enderror">{{$content->content}}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-lg-12">
                            <label for="reference" class="col-md-12 col-form-label">Referenca</label>
                            <input id="reference" type="text" name="reference"
                                class="form-control @error('reference') is-invalid @enderror"
                                value="{{ old('reference') ?? $content->reference }}" autocomplete="reference">
                            @error('reference')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="hadith" class="col-md-12 col-form-label">Hadithi</label>
                            <textarea  id="hadith" name="hadith" class="form-control @error("hadith") is-invalid @enderror">{{$content->hadith}}</textarea>
                            @error('hadith')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="audio" class="col-md-12 col-form-label">Audio</label>
                            <input id="audio" type="file" name="audio"
                                class="form-control @error('audio') is-invalid @enderror"
                                value="{{ old('audio' ?? $content->audio )}}" autocomplete="audio">
                            @error('audio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Përditëso Kontentin</button>
                    </form>

                @else

                    <form method="POST" action="{{ route('chapter.contents.store', $chapter->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-12">
                            <label for="number" class="col-md-12 col-form-label">Numri i renditjes</label>
                            <input id="number" type="number" name="number"
                                class="form-control @error('number') is-invalid @enderror"
                                value="{{ old('number') }}" autocomplete="number">
                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="title" class="col-md-12 col-form-label">Titulli (sa here të thuhet, psh: 3)</label>
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
                            <label for="arabic" class="col-md-12 col-form-label">Arabisht</label>
                            <textarea  id="arabic" name="arabic" class="form-control @error("arabic") is-invalid @enderror">{{ old('arabic')}}</textarea>
                            @error('arabic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="transliteration" class="col-md-12 col-form-label">Transliterimi</label>
                            <textarea  id="transliteration" name="transliteration"  class="form-control @error("transliteration") is-invalid @enderror">{{ old('transliteration')}}</textarea>
                            @error('transliteration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="content" class="col-md-12 col-form-label">Kontenti Shqip</label>
                            <textarea  id="content" name="content"  class="form-control @error("content") is-invalid @enderror">{{ old('content')}}</textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="reference" class="col-md-12 col-form-label">Referenca (ku është marrë, psh: 'Buhari 32' ose 'Buhariu dhe Muslimi')</label>
                            <input id="reference" type="text" name="reference"
                                class="form-control @error('reference') is-invalid @enderror"
                                value="{{ old('reference') }}" autocomplete="reference">
                            @error('reference')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="hadith" class="col-md-12 col-form-label">Hadithi (nese ka ndonje hadith për të)</label>
                            <textarea  id="hadith" name="hadith" class="form-control @error("hadith") is-invalid @enderror">{{ old('hadith')}}</textarea>
                            @error('hadith')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="audio" class="col-md-12 col-form-label">Audio</label>
                            <input id="audio" type="file" name="audio"
                                class="form-control @error('audio') is-invalid @enderror"
                                value="{{ old('audio')}}" autocomplete="audio">
                            @error('audio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Shto Kontentin</button>
                    </form>
                @endif

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Të gjitë kontenti</div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Renditja</th>
                                <th>Shqip</th>
                                <th>Referenca</th>
                                <th>Modifikimet</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Renditja</th>
                                <th>Shqip</th>
                                <th>Referenca</th>
                                <th>Modifikimet</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($contents as $content)

                                <tr>
                                    <td>{{ $content->number }}</td>
                                    <td> {{  \Illuminate\Support\Str::limit($content->content, $limit = 100, $end = '...') }}</td>
                                    <td> {{  $content->reference }}</td>


                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                            href="{{ route('chapter.contents.edit', $content->id) }}"><i
                                                data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $content->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Shylej Kontentin</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">Kjo do ta shlyej kontentin, te cilin so mund ta riktheni më</div>
                                                    <div class="modal-footer"><button class="btn btn-secondary"
                                                            type="button" data-dismiss="modal">Mbyll</button>
                                                        <form method="POST"
                                                            action="{{ route('chapter.contents.destroy', $content->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                            data-toggle="modal" data-target="#exampleModal{{ $content->id }}"><i
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
        // CKEDITOR.replace( 'content' );
        // CKEDITOR.replace( 'hadith' );
        // CKEDITOR.replace( 'arabic' );
        // CKEDITOR.replace( 'transliteration' );

        </script>
    @endsection

</x-admin-master>
