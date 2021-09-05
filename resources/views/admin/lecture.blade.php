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
                                @if (isset($lecturer))
                                    Derset e hoxhës :&nbsp; <b>{{ $lecturer->name }}</b>
                                @else
                                    Përditësimi i dersit : &nbsp;  <a style="text-decoration: none; color:white" href="{{ route('lecturer.lectures', $lecture->lecturer->id) }}"><b>{{ $lecture->title }}</b> </a>
                                @endif
                            </h1>
                            <div class="page-header-subtitle">Ketu shtohen dhe modifikohen derset e hoxhallarëve</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Ders</div>
                <div class="card-body">
                    @if (isset($lecture))
                        <form method="POST" action="{{ route('lecturer.lectures.update', $lecture->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli i ligjerates</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? $lecture->title }}" autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="date" class="col-md-12 col-form-label">Data e ligjerates</label>
                                <input id="date" type="text" name="date"
                                    class="form-control @error('date') is-invalid @enderror"
                                    value="{{ old('date') ?? $lecture->date }}" autocomplete="date">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="day_id" class="col-md-12 col-form-label">Dita e ligjerates</label>
                                    <select name="day_id"
                                    class="form-control @error('day_id') is-invalid @enderror"
                                    value="{{ old('day_id') }}" autocomplete="day_id" autofocus>
                                    <option hidden disabled selected value>-- Dita e Dersit--</option>
                                    @foreach ($days as $day)
                                        @if ($day->id == $day->id)
                                            <option value="{{ $day->id }}" selected>{{ $day->name }}
                                            </option>
                                        @else
                                            <option value="{{ $day->id }}">{{ $day->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                    @error('day_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="time" class="col-md-12 col-form-label">Koha e ligjerates</label>
                                <input id="time" type="text" name="time"
                                    class="form-control @error('time') is-invalid @enderror"
                                    value="{{ old('time') ?? $lecture->time }}" autocomplete="time">
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="city_id" class="col-md-12 col-form-label">Qyteti</label>
                                    <select name="city_id"
                                    class="form-control @error('city_id') is-invalid @enderror"
                                    value="{{ old('city_id') }}" autocomplete="city_id" autofocus>
                                    <option hidden disabled selected value>-- Qyteti ku mbahet dersi--</option>
                                    @foreach ($cities as $city)
                                        @if ($city->id == $city->id)
                                            <option value="{{ $city->id }}" selected>{{ $city->name }}
                                            </option>
                                        @else
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                    @error('city_id')
                                        <span city_id="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="place" class="col-md-12 col-form-label">Emri i Vendndodhjes</label>
                                <input id="place" type="text" name="place"
                                    class="form-control @error('place') is-invalid @enderror"
                                    value="{{ old('place') ?? $lecture->place }}" autocomplete="place">
                                @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="map" class="col-md-12 col-form-label">Vendndodhja(GoogleMaps link)</label>
                                <input id="map" type="text" name="map"
                                    class="form-control @error('map') is-invalid @enderror"
                                    value="{{ old('map') ?? $lecture->map }}" autocomplete="map">
                                @error('map')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku i ligjerates</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror"
                                    value="{{ old('link') ?? $lecture->link }}" autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="allowance" class="col-md-12 col-form-label">Kujt i lejohet hyrja</label>
                                <select name="allowance" id="allowance" class="form-control @error('allowance') is-invalid @enderror"
                                value="{{ old('allowance') }}">
                                <option {{ $lecture->allowance == 'Meshkuj' ? 'selected' : '' }} value="Meshkuj">Meshkuj</option>
                                <option {{ $lecture->allowance == 'Femra' ? 'selected' : '' }} value="Femra">Femra</option>
                                <option {{ $lecture->allowance == 'Meshkuj dhe Femra' ? 'selected' : '' }} value="Meshkuj dhe Femra">Meshkuj dhe Femra</option>
                            </select>
                                @error('allowance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status"  id="status"  class="form-control @error("status") is-invalid @enderror" value="{{ old("status") }}">

                                <option {{ $lecture->status == "1" ? 'selected' : '' }} value="1">Mbahet</option>
                                <option {{ $lecture->status == "0" ? 'selected' : '' }} value="0">Nuk Mbahet</option>

                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('lecturer.lectures.store', $lecturer->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="title" class="col-md-12 col-form-label">Titulli i ligjerates</label>
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
                                <label for="date" class="col-md-12 col-form-label">Data kur mbahet</label>
                                <input id="date" type="text" name="date"
                                    class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}"
                                    autocomplete="date">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="day_id" class="col-md-12 col-form-label">Dita e ligjerates</label>
                                <select name="day_id"
                                class="form-control @error('day_id') is-invalid @enderror"
                                value="{{ old('day_id') }}" autocomplete="day_id" autofocus>
                                <option hidden disabled selected value>-- Dita e ligjerates--</option>
                                @foreach ($days as $day)
                                    <option value="{{ $day->id }}">{{ $day->name }}</option>
                                @endforeach
                                </select>
                                @error('day_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="time" class="col-md-12 col-form-label">Ora e ligjerates</label>
                                <input id="time" type="text" name="time"
                                    class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}"
                                    autocomplete="time">
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="city_id" class="col-md-12 col-form-label">Qyteti</label>
                                <select name="city_id"
                                class="form-control @error('city_id') is-invalid @enderror"
                                value="{{ old('city_id') }}" autocomplete="city_id" autofocus>
                                <option hidden disabled selected value>-- Qyteti ku mbahet dersi--</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                                </select>
                                @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="place" class="col-md-12 col-form-label">Emri i Vendndodhjes</label>
                                <input id="place" type="text" name="place"
                                    class="form-control @error('place') is-invalid @enderror" value="{{ old('place') }}"
                                    autocomplete="place">
                                @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="map" class="col-md-12 col-form-label">Vendndodhja(link me Google Maps)</label>
                                <input id="map" type="text" name="map"
                                    class="form-control @error('map') is-invalid @enderror" value="{{ old('map') }}"
                                    autocomplete="map">
                                @error('map')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku i ligjerates</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror"
                                    value="{{ old('link')}}" autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="allowance" class="col-md-12 col-form-label">Kujt i lejohet hyrja</label>
                                <select name="allowance" id="allowance" class="form-control @error('allowance') is-invalid @enderror"
                                value="{{ old('allowance') }}">
                                    <option value="Meshkuj">Meshkuj</option>
                                    <option value="Femra">Femra</option>
                                    <option value="Meshkuj dhe Femra">Meshkuj dhe Femra</option>

                                </select>
                                @error('allowance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status"  id="status"  class="form-control @error("status") is-invalid @enderror" value="{{ old("status") }}">
                                    <option value="1">Mbahet</option>
                                    <option value="0">Nuk Mbahet</option>
                                  </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto ligjerat</button>
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
                                <th>Titulli</th>
                                <th>Dita</th>
                                <th>Koha</th>
                                <th>Statusi</th>
                                <th>Modifikimet</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titulli</th>
                                <th>Dita</th>
                                <th>Koha</th>
                                <th>Statusi</th>
                                <th>Modifikimet</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($lectures as $lecture)

                                <tr>
                                    <td>{{ $lecture->title }}</td>
                                    <td>{{ $lecture->day->name }}</td>
                                    <td>{{ $lecture->time }}</td>
                                    <td>
                                    @if ($lecture->status == 0)
                                        <b>Nuk Mbahet</b>
                                    @else
                                        <b>Mbahet</b>
                                    @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                            href="{{ route('lecturer.lectures.edit', $lecture->id) }}"><i
                                                data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $lecture->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Shylej Ligjeraten</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">Kjo do ta shlyej ligjeraten, te cilin so mund ta
                                                        riktheni më</div>
                                                    <div class="modal-footer"><button class="btn btn-secondary"
                                                            type="button" data-dismiss="modal">Mbyll</button>
                                                        <form method="POST"
                                                            action="{{ route('lecturer.lectures.destroy', $lecture->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                            data-toggle="modal" data-target="#exampleModal{{ $lecture->id }}"><i
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
