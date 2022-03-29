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
                                Media
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen numri i njerzve qe e ndjekin MI-ne ne media te ndryshme, e qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Mediat</div>
                <div class="card-body">
                    @if (isset($media))
                        <form method="POST" action="{{ route('media.update', $media->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="telegram" class="col-md-12 col-form-label">Antaret e Telegram-it</label>
                                <input id="telegram" type="number" name="telegram"
                                    class="form-control @error('telegram') is-invalid @enderror"
                                    value="{{ old('telegram') ?? $media->telegram }}" autocomplete="telegram">
                                @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="facebook" class="col-md-12 col-form-label">Pelqimet ne Facebook</label>
                                <input id="facebook" type="number" name="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook') ?? $media->facebook }}" autocomplete="facebook">
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="instagram" class="col-md-12 col-form-label">Ndjekësti ne Instagram</label>
                                <input id="instagram" type="number" name="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ old('instagram') ?? $media->instagram }}" autocomplete="instagram">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="youtube" class="col-md-12 col-form-label">Abonimet ne Youtube</label>
                                <input id="youtube" type="number" name="youtube"
                                    class="form-control @error('youtube') is-invalid @enderror"
                                    value="{{ old('youtube') ?? $media->youtube }}" autocomplete="youtube">
                                @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('media.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="telegram" class="col-md-12 col-form-label"><a href="https://t.me/muslimani_ideal">Add telegram</a></label></label>
                                <input id="telegram" type="number" name="telegram"
                                    class="form-control @error('telegram') is-invalid @enderror"
                                    value="{{ old('telegram') }}" autocomplete="telegram">
                                @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="facebook" class="col-md-12 col-form-label">Add facebook</label>
                                <input id="facebook" type="number" name="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook') }}" autocomplete="facebook">
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="instagram" class="col-md-12 col-form-label"><a href="https://www.instagram.com/muslimani_ideal/?__a=1"> Add instagram</a></label>
                                <input id="instagram" type="number" name="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ old('instagram') }}" autocomplete="instagram">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="youtube" class="col-md-12 col-form-label">Add youtube</label>
                                <input id="youtube" type="number" name="youtube"
                                    class="form-control @error('youtube') is-invalid @enderror"
                                    value="{{ old('youtube') }}" autocomplete="youtube">
                                @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Të gjitë mediat</div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Telegram</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Youtube</th>
                                <th>Modifikimet</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Telegram</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Youtube</th>
                                <th>Modifikimet</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($medias as $media)

                                <tr>
                                    <td>{{ $media->telegram}}</td>
                                    <td>{{ $media->facebook }}</td>
                                    <td>{{ $media->instagram }}</td>
                                    <td>{{ $media->youtube }}</td>


                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                            href="{{ route('media.edit', $media->id) }}"><i
                                                data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $media->id }}" tabindex="-1"
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
                                                            action="{{ route('media.destroy', $media->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                            data-toggle="modal" data-target="#exampleModal{{ $media->id }}"><i
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

    @endsection

</x-admin-master>
