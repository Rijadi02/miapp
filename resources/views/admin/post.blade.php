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
                                Postimet
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen postimet e Instagramit qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Artikull</div>
                <div class="card-body">
                    @if (isset($post))
                    <form method="POST" action="{{ route("post.update", $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="col-lg-12">
                    <label for="title" class="col-md-12 col-form-label">Titulli</label>
                    <input id="title" type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title") ?? $post->title }}" autocomplete="title">
                    @error("title")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-lg-12">
                    <label for="link" class="col-md-12 col-form-label">Linku ne instagram</label>
                    <input id="link" type="text" name="link" class="form-control @error("link") is-invalid @enderror" value="{{ old("link") ?? $post->link }}" autocomplete="link">
                    @error("link")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-lg-12">
                    <label for="image" class="col-md-12 col-form-label">Fotoja</label>
                    <input id="image" type="file" name="image" class="form-control @error("image") is-invalid @enderror" value="{{ old("image") ?? $post->image }}" autocomplete="image">
                    @error("image")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>


                     <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Përditëso Postimin</button>
                    </form>

                    @else

                    <form method="POST" action="{{ route("post.store") }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12">
                    <label for="title" class="col-md-12 col-form-label">Titulli</label>
                    <input id="title" type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title") }}" autocomplete="title">
                    @error("title")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-lg-12">
                    <label for="link" class="col-md-12 col-form-label">Linku ne instagram</label>
                    <input id="link" type="text" name="link" class="form-control @error("link") is-invalid @enderror" value="{{ old("link") }}" autocomplete="link">
                    @error("link")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-lg-12">
                    <label for="image" class="col-md-12 col-form-label">Fotoja</label>
                    <input id="image" type="file" name="image" class="form-control @error("image") is-invalid @enderror" value="{{ old("image") }}" autocomplete="image">
                    @error("image")
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                     <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Shto Postim</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($posts as $post)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        {{-- <a href="{{ route('post.books', $post->id) }}"> --}}
                                        <img class="img-fluid mb-4" src="/storage/{{ $post->image }}" alt="">
                                        {{-- </a> --}}
                                        <h5>{{ $post->title }}</h5>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('post.edit', $post->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $post->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shylej postimin</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej postimin</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
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


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('description');
        </script>

        <script>
            $(function() {
                // Multiple images preview with JavaScript
                var multiImgPreview = function(input, imgPreviewPlaceholder) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                    imgPreviewPlaceholder);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#images').on('change', function() {
                    multiImgPreview(this, 'div.imgPreview');
                });
            });
        </script>

    @endsection

</x-admin-master>
