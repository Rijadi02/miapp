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
                                Financat
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohet financat </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto shpenzim/hyrje</div>
                <div class="card-body">


                        <form method="POST" action="{{ route('finance.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Përdoruesi</label>
                                <select name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                    <option value="Rijadi">Rijadi</option>
                                    <option value="Graniti">Graniti</option>
                                    <option value="Ardi">Ardi</option>
                                    <option value="Albani">Albani</option>
                                    <option value="Eralbi">Eralbi</option>
                                </select>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="giver" class="col-md-12 col-form-label">Dhuruesi</label>
                                <input id="giver" type="text" name="giver"
                                    class="form-control @error('giver') is-invalid @enderror" value="{{ old('giver') }}"
                                    autocomplete="giver">
                                @error('giver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="sum" class="col-md-12 col-form-label">Shuma</label>
                                <input id="sum" type="number" name="sum"
                                    class="form-control @error('sum') is-invalid @enderror" value="{{ old('sum') }}"
                                    autocomplete="sum">
                                @error('sum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="type" class="col-md-12 col-form-label">Tipi</label>
                                <select name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                                    value="{{ old('type') }}">
                                    <option value="Hyrje">Hyrje</option>
                                    <option value="Dalje">Dalje</option>

                                </select>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="project" class="col-md-12 col-form-label">Projekti</label>
                                <select name="project" id="project" class="form-control @error('project') is-invalid @enderror"
                                    value="{{ old('project') }}">
                                    <option value="Muslimani Ideal">Muslimani Ideal</option>
                                    <option value="Shenjester">Shenjester</option>

                                </select>
                                @error('project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="description" class="col-md-12 col-form-label">Përshkrimi</label>
                                <input id="description" type="text" name="description"
                                    class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"
                                    autocomplete="description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto financa</button>
                        </form>
                </div>
            </div>
        </div>


            <div class="card">
                <div class="card-header">Të gjitha financat</div>
                <div class="card-body">
                    <div class="datatable" style="overflow-x:auto;">

                        <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                            width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Emri</th>
                                    <th>Dhuruesi</th>
                                    <th>Shuma</th>
                                    <th>Tipi</th>
                                    <th>Projekti</th>
                                    <th>Përshkrimi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Emri</th>
                                    <th>Dhuruesi</th>
                                    <th>Shuma</th>
                                    <th>Tipi</th>
                                    <th>Projekti</th>
                                    <th>Përshkrimi</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            @foreach ($finances as $finance)

                            <tr>
                                <td>{{ $finance->name }}</td>
                                <td>{{ $finance->giver }}</td>
                                <td>{{ $finance->sum }}</td>
                                <td>{{ $finance->type }}</td>
                                <td>{{ $finance->project }}</td>
                                <td>{{ $finance->description }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection

</x-admin-master>
