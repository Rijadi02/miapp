<x-admin-master>
    @section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5">
        <div class="container-xl px-">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></div>

                            @if(isset($category))
                            Librat për kategorinë :&nbsp; {{ $category->name}}
                            @else
                            Editimi i librit : &nbsp; {{$book->name}}
                            @endif
                        </h1>
                        <div class="page-header-subtitle">Ketu vendosen librat prej te cilave merret materiali prej seciles kategori</div>
                        <a href="{{route('category.index')}}" class="btn btn-white text-black mt-3"><i style="font-size: 10px" class="fa fa-arrow-left ml-1"></i> &nbsp; Kthehu te Kategoritë</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto një liber</div>
                <div class="card-body">
                    @if (isset($book))
                        <form method="POST" action="{{ route('category.books.update', $book->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i librit</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $book->name }}" autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="image" class="col-md-12 col-form-label">Kopertina e librit</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') ?? $book->image }}" autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Përditëso</button>
                        </form>

                    @else

                        <form method="POST" action="{{ route('category.books.store', $category->id) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i librit</label>
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
                                <label for="image" class="col-md-12 col-form-label">Kopertina e librit</label>
                                <input id="image" type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"
                                    autocomplete="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3 ">
                                <button type="submit" class="btn btn-primary ">Shto</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($books as $book)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        <a href="{{ route('book.chapters', $book->id) }}">
                                            <img class="img-fluid mb-4" src="/storage/{{ $book->image }}" alt="">
                                        </a>
                                        <h5>{{ $book->name }}</h5>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('category.books.edit', $book->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $book->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $book->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shlyej libren</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej libren dhe të gjitha të dhënat të asocuara me të si : Kapitujt e atyre librave dhe Konetenti</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST" action="{{ route('category.books.destroy', $book->id) }}">
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
    @endsection

</x-admin-master>
