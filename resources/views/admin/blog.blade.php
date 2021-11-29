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
                                Blogjet
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen blogjet qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Blog</div>
                <div class="card-body">
                    @if (isset($blog))
                        <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? $blog->title }}" autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="author" class="col-md-12 col-form-label">Autori</label>
                                <input id="author" type="text" name="author"
                                    class="form-control @error('author') is-invalid @enderror"
                                    value="{{ old('author') ?? $blog->author }}" autocomplete="author">
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="content" class="col-md-12 col-form-label">Shkrimi i Blogut</label>
                                <textarea id="content" name="content"
                                    class="form-control @error('content') is-invalid @enderror">{{ $blog->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="image" class="col-md-12 col-form-label">Fotoja</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') ?? $blog->image }}" autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Statusi</label>
                                <select name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror"
                                    value="{{ old('tags') }}">
                                    <option {{ $blog->tags == 'Pasive' ? 'selected' : '' }} value="Pasive">Pasive</option>
                                    <option {{ $blog->tags == 'Aktive' ? 'selected' : '' }} value="Aktive">Aktive</option>
                                </select> @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
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
                                <label for="author" class="col-md-12 col-form-label">Autori</label>
                                <input id="author" type="text" name="author"
                                    class="form-control @error('author') is-invalid @enderror"
                                    value="{{ old('author') }}" autocomplete="author">
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="content" class="col-md-12 col-form-label">Shkrimi i Blogut</label>
                                <textarea id="content" name="content"
                                    class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="image" class="col-md-12 col-form-label">Fotoja</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"
                                    autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Statusi</label>
                                <select name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror"
                                    value="{{ old('tags') }}">
                                    <option value="Pasive">Pasive</option>
                                    <option value="Aktive">Aktive</option>
                                </select>

                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto Blog</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        {{-- <a href="{{ route('blog.books', $blog->id) }}"> --}}
                                        <img class="img-fluid mb-4" src="/storage/{{ $blog->image }}" alt="">
                                        {{-- </a> --}}
                                        <h5>{{ $blog->title }}</h5>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('blog.edit', $blog->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $blog->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shylej blogun</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej blogun.</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST" action="{{ route('blog.destroy', $blog->id) }}">
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
            CKEDITOR.replace('content');
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
