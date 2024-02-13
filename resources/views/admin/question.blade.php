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
                                Pyetjet
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen pyetjet dhe pergjigjiet nga hoxha.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Pyetje</div>
                <div class="card-body">
                    @if (isset($question))
                        <form method="POST" action="{{ route('update.with.answer', $question->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="col-lg-12">
                                <label for="question" class="col-md-12 col-form-label">Pyetja</label>
                                <input id="question" type="text" name="question"
                                    class="form-control @error('question') is-invalid @enderror"
                                    value="{{ old('question') ?? $question->question }}" autocomplete="question">
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Tags</label>
                                <input id="tags" type="text" name="tags"
                                    class="form-control @error('question') is-invalid @enderror"
                                    value="{{ old('tags') ?? $question->tags }}" autocomplete="tags">
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="answer" class="col-md-12 col-form-label">Shkrimi i pergjigjies</label>
                                <textarea id="answer" name="answer"
                                    class="form-control @error('answer') is-invalid @enderror">{{ $question->answer }}</textarea>
                                @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status') }}">
                                    <option {{ $question->status == '0' ? 'selected' : '' }} value="0">Pasive</option>
                                    <option {{ $question->status == '1' ? 'selected' : '' }} value="1">E pergjigjur</option>
                                    <option {{ $question->status == '2' ? 'selected' : '' }} value="2">Web</option>
                                </select> @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('store.with.answer') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="question" class="col-md-12 col-form-label">Pyetja</label>
                                <input id="question" type="text" name="question"
                                    class="form-control @error('question') is-invalid @enderror" value="{{ old('question') }}"
                                    autocomplete="question">
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Tags</label>
                                <input id="tags" type="text" name="tags"
                                    class="form-control @error('tags') is-invalid @enderror" value="{{ old('tags') }}"
                                    autocomplete="tags">
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="answer" class="col-md-12 col-form-label">Shkrimi i pergjigjies</label>
                                <textarea id="answer" name="answer"
                                    class="form-control @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                                @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status') }}">
                                    <option value="0">Pasive</option>
                                    <option value="1">E pergjigjur</option>
                                    <option value="2" selected>Web</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto pyetje</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Të gjitë pyetjet</div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Pyetja</th>
                                <th>Tags</th>
                                <th>Counter</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Pyetja</th>
                                <th>Tags</th>
                                <th>Counter</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($questions as $question)

                                <tr>
                                    <td>{{ $question->question}}</td>
                                    <td>{{ $question->tags }}</td>
                                    <td>{{ $question->counter }}</td>
                                    <td>{{ $question->status }}</td>


                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                            href="{{ route('question.edit', $question->id) }}"><i
                                                data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $question->id }}" tabindex="-1"
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
                                                            action="{{ route('question.destroy', $question->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                            data-toggle="modal" data-target="#exampleModal{{ $question->id }}"><i
                                                data-feather="trash-2"></i></button>



                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('answer');
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
