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
                                Bizneset
                            </h1>
                            <div class="page-header-subtitle">Këtu shtohen bizneset qe do të vendosen në webfaqe dhe në
                                applikacion.</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card mb-5 mt-5">
                <div class="card-header">Shto Biznes</div>
                <div class="card-body">
                    @if (isset($ad))
                        <form method="POST" action="{{ route('ad.update', $ad->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i Biznesit</label>
                                <input id="name" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $ad->name }}" autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="photo" class="col-md-12 col-form-label">Fotoja</label>
                                <input id="photo" type="file" name="photo"
                                    class="form-control @error('photo') is-invalid @enderror"
                                    value="{{ old('photo') ?? $ad->photo }}" autocomplete="photo">
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">


                                <div class="custom-file">
                                    <input type="file" name="gallery[]" class="custom-file-input" id="images"
                                        multiple="multiple">
                                    <label class="custom-file-label" for="images">Galerija</label>
                                </div>

                            </div>


                            <div class="col-lg-12">
                                <label for="description" class="col-md-12 col-form-label">Përshkrimi</label>
                                <textarea  id="description" name="description" class="form-control @error("description") is-invalid @enderror">{{$ad->description}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror"
                                    value="{{ old('link') ?? $ad->link }}" autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Tiketat</label>
                                <input id="tags" type="text" name="tags"
                                    class="form-control @error('tags') is-invalid @enderror"
                                    value="{{ old('tags') ?? $ad->tags }}" autocomplete="tags">
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="city" class="col-md-12 col-form-label">Qyteti</label>
                                <input id="city" type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') ?? $ad->city }}" autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="map" class="col-md-12 col-form-label">Vend-ndodhja(me link)</label>
                                <input id="map" type="text" name="map"
                                    class="form-control @error('map') is-invalid @enderror"
                                    value="{{ old('map') ?? $ad->map }}" autocomplete="map">
                                @error('map')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="facebook" class="col-md-12 col-form-label">Linku i Facebook </label>
                                <input id="facebook" type="text" name="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook') ?? $facebook }}" autocomplete="facebook">
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="twitter" class="col-md-12 col-form-label">Linku i Twitter</label>
                                <input id="twitter" type="text" name="twitter"
                                    class="form-control @error('twitter') is-invalid @enderror"
                                    value="{{ old('twitter') ?? $twitter }}" autocomplete="twitter">
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="instagram" class="col-md-12 col-form-label">Linku i Instagram</label>
                                <input id="instagram" type="text" name="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ old('instagram') ?? $instagram }}" autocomplete="instagram">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="contact_details" class="col-md-12 col-form-label">Detajet e Kontaktit</label>
                                <input id="contact_details" type="text" name="contact_details"
                                    class="form-control @error('contact_details') is-invalid @enderror"
                                    value="{{ old('contact_details') ?? $ad->contact_details }}"
                                    autocomplete="contact_details">
                                @error('contact_details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-12">
                                <label for="phone" class="col-md-12 col-form-label">Telefoni</label>
                                <input id="phone" type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') ?? $ad->phone }}"
                                    autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="address" class="col-md-12 col-form-label">Adresa</label>
                                <input id="address" type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') ?? $ad->address }}"
                                    autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="hours" class="col-md-12 col-form-label">Orari i punës</label>
                                <textarea id="hours" type="text" name="hours" class="form-control @error('hours') is-invalid @enderror" autocomplete="hours">
                                    {{ old('hours') ?? $ad->hours }}
                                </textarea>
                                @error('hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="website" class="col-md-12 col-form-label">Websajti</label>
                                <input id="website" type="text" name="website"
                                    class="form-control @error('website') is-invalid @enderror"
                                    value="{{ old('website') ?? $ad->website }}"
                                    autocomplete="website">
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="email" class="col-md-12 col-form-label">Emaili</label>
                                <input id="email" type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') ?? $ad->email }}"
                                    autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="type_id" class="col-md-12 col-form-label">Lloji i biznesit</label>
                                    <select name="type_id"
                                    class="form-control @error('type_id') is-invalid @enderror"
                                    value="{{ old('type_id') }}" autocomplete="type_id" autofocus>
                                    <option hidden disabled selected value>-- Lloji i biznesit--</option>
                                    @foreach ($types as $type)
                                        @if ($ad->type_id == $type->id)
                                            <option value="{{ $type->id }}" selected>{{ $type->name }}
                                            </option>
                                        @else
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                    @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status') }}">

                                    <option {{ $ad->status == '0' ? 'selected' : '' }} value="0">Jo Aktive</option>
                                    <option {{ $ad->status == '1' ? 'selected' : '' }} value="1">Aktive</option>
                                    <option {{ $ad->status == '2' ? 'selected' : '' }} value="2">E promovuar</option>


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

                        <form method="POST" action="{{ route('ad.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <label for="name" class="col-md-12 col-form-label">Emri i biznesit</label>
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
                                <label for="photo" class="col-md-12 col-form-label">Fotoja</label>
                                <input id="photo" type="file" name="photo"
                                    class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}"
                                    autocomplete="photo">
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">


                                <div class="custom-file">
                                    <input type="file" name="gallery[]" class="custom-file-input" id="images"
                                        multiple="multiple">
                                    <label class="custom-file-label" for="images">Galerija</label>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <label for="description" class="col-md-12 col-form-label">Përshkrimi</label>
                                <textarea  id="description" name="description" class="form-control @error("description") is-invalid @enderror">{{ old('description')}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="link" class="col-md-12 col-form-label">Linku</label>
                                <input id="link" type="text" name="link"
                                    class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}"
                                    autocomplete="link">
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="tags" class="col-md-12 col-form-label">Tiketat</label>
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
                                <label for="city" class="col-md-12 col-form-label">Qyteti</label>
                                <input id="city" type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}"
                                    autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="map" class="col-md-12 col-form-label">Vend-ndodhja(me link)</label>
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
                                <label for="facebook" class="col-md-12 col-form-label">Linku i Facebook</label>
                                <input id="facebook" type="text" name="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook') }}" autocomplete="facebook">
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="twitter" class="col-md-12 col-form-label">Linku i Twitter</label>
                                <input id="twitter" type="text" name="twitter"
                                    class="form-control @error('twitter') is-invalid @enderror"
                                    value="{{ old('twitter') }}" autocomplete="twitter">
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="instagram" class="col-md-12 col-form-label">Linku i Instagram</label>
                                <input id="instagram" type="text" name="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ old('instagram') }}" autocomplete="instagram">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="contact_details" class="col-md-12 col-form-label">Detajet e kontaktit</label>
                                <input id="contact_details" type="text" name="contact_details"
                                    class="form-control @error('contact_details') is-invalid @enderror"
                                    value="{{ old('contact_details') }}" autocomplete="contact_details">
                                @error('contact_details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="phone" class="col-md-12 col-form-label">Telefoni</label>
                                <input id="phone" type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone')}}"
                                    autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="address" class="col-md-12 col-form-label">Adresa</label>
                                <input id="address" type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address')}}"
                                    autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="hours" class="col-md-12 col-form-label">Orari i punës</label>
                                <textarea id="hours" type="text" name="hours" class="form-control @error('hours') is-invalid @enderror" autocomplete="hours">
                                    {{ old('hours')}}
                                </textarea>
                                @error('hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="website" class="col-md-12 col-form-label">Websajti</label>
                                <input id="website" type="text" name="website"
                                    class="form-control @error('website') is-invalid @enderror"
                                    value="{{ old('website')}}"
                                    autocomplete="website">
                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="email" class="col-md-12 col-form-label">Emaili</label>
                                <input id="email" type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email')}}"
                                    autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <label for="type_id" class="col-md-12 col-form-label">Lloji i binzesit</label>
                                <select name="type_id"
                                class="form-control @error('type_id') is-invalid @enderror"
                                value="{{ old('type_id') }}" autocomplete="type_id" autofocus>
                                <option hidden disabled selected value>-- Lloji i binzesit--</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                                </select>
                                @error('type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label for="status" class="col-md-12 col-form-label">Statusi</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status') }}">
                                    <option value="0">Jo Aktive</option>
                                    <option value="1">Aktive</option>
                                    <option value="2">E promovuar</option>

                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Shto Biznes</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="row">

                        @foreach ($ads as $ad)
                            <div class="col-lg-4 mb-3 mb-lg-5">
                                <div class="card">
                                    <div class="card-body text-center p-lg-5">
                                        {{-- <a href="{{ route('ad.books', $ad->id) }}"> --}}
                                        <img class="img-fluid mb-4" src="/storage/{{ $ad->photo }}" alt="">
                                        {{-- </a> --}}
                                        <h5>{{ $ad->name }}</h5>

                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('ad.edit', $ad->id) }}">Përditëso</a>
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $ad->id }}">Shlyej</button>

                                    </div>
                                </div>
                            </div>


                            {{-- Modal for delete --}}

                            <div class="modal fade" id="exampleModal{{ $ad->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shylej biznesin</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Kjo to ta shlyej biznesin dhe të gjitha të dhënat të
                                            asocuara me të.</div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Mbyll</button>
                                            <form method="POST" action="{{ route('ad.destroy', $ad->id) }}">
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
        CKEDITOR.replace( 'description' );


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
