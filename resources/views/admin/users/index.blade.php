@extends('components.admin-master')

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="users"></i></div>
                        Menaxhimi i Përdoruesve
                    </h1>
                    <div class="page-header-subtitle">Këtu mund të shihni, rregulloni ose fshini përdoruesit e sistemit.</div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <a class="btn btn-white p-3" href="{{ route('register') }}">
                        <i class="fas fa-plus mr-2"></i> Regjistro Përdorues të Ri
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Lista e Përdoruesve</div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Emri</th>
                            <th>Email</th>
                            <th>Roli</th>
                            <th>Veprimet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                <img src="{{ $user->profile_picture_url }}" class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->isAdmin())
                                    <span class="badge badge-primary">Admin</span>
                                @elseif($user->isKids())
                                    <span class="badge badge-info">Fëmijë</span>
                                @else
                                    <span class="badge badge-secondary">Përdorues</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit"></i></a>
                                <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-datatable btn-icon btn-transparent-dark" onclick="return confirm('A jeni të sigurt që dëshironi të fshini këtë përdorues?')">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
