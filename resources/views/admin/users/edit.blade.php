@extends('components.admin-master')

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user"></i></div>
                        Edito Përdoruesin: {{ $user->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-n10">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">Foto e Profilit</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="{{ $user->profile_picture_url }}" alt="" style="width: 150px; height: 150px; object-fit: cover;" />
                    <div class="small font-italic text-muted mb-4">JPG ose PNG, jo më shumë se 2 MB</div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">Detajet e Llogarisë</div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label class="small mb-1" for="name">Emri</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" for="role">Roli</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Fëmijë</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" for="profile_picture">Ndrysho Foton e Profilit</label>
                            <input class="form-control-file @error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture" type="file">
                            @error('profile_picture')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">Ndrysho Fjalëkalimin (Lëreni bosh nëse nuk dëshironi ta ndryshoni)</h5>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="password">Fjalëkalimi i ri</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="password_confirmation">Konfirmo Fjalëkalimin</label>
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Ruaj Ndryshimet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
