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
                                Kategoritë
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen kategoritë e bizneseve. Si kategori mund të jetë "Ushqimore", "Historia Islame" etj.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto kategori biznesi</div>
                <div class="card-body">
                    @if (isset($type))
                        <form method="POST" action="{{ route('type.update', $type->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i kategorisë</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $type->name }}" autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="icon" class="col-md-12 col-form-label">Fotoja e kategorisë</label>
                                <input id="icon" type="file" name="icon"
                                    class="form-control @error('icon') is-invalid @enderror"
                                    value="{{ old('icon') ?? $type->icon }}" autocomplete="icon">
                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso kategorinë</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('type.store') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i kategorisë</label>
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
                                <label for="icon" class="col-md-12 col-form-label">Fotoja e kategorisë</label>
                                <input id="icon" type="file" name="icon"
                                    class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') }}"
                                    autocomplete="icon">
                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <button type="submit" class="btn btn-primary ">Shto kategorinë</button>
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
                                <th>Id</th>
                                <th>Emri</th>
                                <th>Modifikimet</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Emri</th>
                                <th>Modifikimet</th>

                            </tr>
                        </tfoot>
                        <tbody>

                        @foreach ($types as $type)

                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                    href="{{ route('type.edit', $type->id) }}"><i
                                        data-feather="edit"></i></a>

                                        <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Shylej kategorinë</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">Kjo to ta shlyej kategorinë dhe të gjitha të dhënat të asocuara me të si : Librat, Kapitujt e atyre librave dhe Konetenti</div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Mbyll</button>
                                                        <form method="POST" action="{{ route('type.destroy', $type->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Shlyej</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit"
                                    data-toggle="modal" data-target="#exampleModal{{ $type->id }}"><i
                                        data-feather="trash-2"></i></button>



                            </td>


                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection

</x-admin-master>
