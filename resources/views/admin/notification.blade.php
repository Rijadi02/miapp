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
                                Notifikimet
                            </h1>
                            <div class="page-header-subtitle">Këtu dergohen notifikimet </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto notifikim</div>
                <div class="card-body">


                        <form method="POST" action="{{ route('notification.send') }}" enctype="multipart/form-data">
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
                                <label for="body" class="col-md-12 col-form-label">Body</label>
                                <input id="body" type="text" name="body"
                                    class="form-control @error('body') is-invalid @enderror" value="{{ old('body') }}"
                                    autocomplete="body">
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="url" class="col-md-12 col-form-label">Url-ja</label>
                                <input id="url" type="text" name="url"
                                    class="form-control @error('url') is-invalid @enderror" value="{{ old('body') }}"
                                    autocomplete="url">
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Dergo Notifikim</button>
                        </form>
                </div>
            </div>
        </div>

    @endsection

</x-admin-master>
