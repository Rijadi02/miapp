<x-admin-master>
    @section('content')
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="tool"></i></div>
                                Tools
                            </h1>
                            <div class="page-header-subtitle">Upload and manage JS tools (ZIP files). These will be extracted and accessible for use.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-xl px-4 mt-n5">
            <div class="card mb-4">
                <div class="card-header">Add New Tool</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tools.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="title">Title</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="Enter tool title" value="{{ old('title') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="icon">Icon (Bootstrap/Feather name)</label>
                                <input class="form-control" id="icon" name="icon" type="text" placeholder="e.g. tool, package, code" value="{{ old('icon') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="zip_file">ZIP File (containing JS/HTML)</label>
                            <input class="form-control" id="zip_file" name="zip_file" type="file" accept=".zip">
                        </div>
                        <button class="btn btn-primary" type="submit">Upload & Extract</button>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Manage Tools</div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tools as $tool)
                                    <tr>
                                        <td><i data-feather="{{ $tool->icon ?? 'tool' }}"></i></td>
                                        <td>{{ $tool->title ?? 'Untitled' }}</td>
                                        <td>
                                            @if($tool->link)
                                                <a href="{{ $tool->link }}" target="_blank">{{ $tool->link }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-sm mr-2" href="{{ $tool->link }}" target="_blank">
                                                <i class="mr-1" data-feather="external-link"></i> Open
                                            </a>
                                            
                                            <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#deleteModal{{ $tool->id }}">
                                                <i class="mr-1" data-feather="trash-2"></i> Delete
                                            </button>

                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="deleteModal{{ $tool->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $tool->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel{{ $tool->id }}">Confirm Deletion</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Are you sure you want to delete this tool? This will remove the ZIP file and the extracted content.</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <form method="POST" action="{{ route('tools.destroy', $tool->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4 ml-4 mr-4" role="alert">
                {{ session('success') }}
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
    @endsection
</x-admin-master>
