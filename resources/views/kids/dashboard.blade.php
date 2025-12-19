@extends('components.kids-master')

@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <h1 class="font-weight-bold" style="color: var(--kids-primary);">Mirëseerdhe, {{ Auth::user()->name }}! 👋</h1>
        <p class="lead text-muted">Çfarë dëshiron të mësosh sot?</p>
    </div>
</div>

<div class="row">
    <!-- Quick Action Cards -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="kids-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-book-open fa-3x" style="color: #4834d4;"></i>
            </div>
            <h3 class="font-weight-bold">Librat e Mi</h3>
            <p class="text-muted">Lexo histori të mrekullueshme dhe mësime të bukura.</p>
            <a href="#" class="btn btn-primary btn-round shadow-sm px-4" style="background: #4834d4; border: none; border-radius: 20px;">Shiko Librat</a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="kids-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-play-circle fa-3x" style="color: #eb4d4b;"></i>
            </div>
            <h3 class="font-weight-bold">Videot</h3>
            <p class="text-muted">Shiko video argëtuese dhe mësimore.</p>
            <a href="#" class="btn btn-danger btn-round shadow-sm px-4" style="background: #eb4d4b; border: none; border-radius: 20px;">Shiko Videot</a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="kids-card p-4 text-center">
            <div class="mb-3">
                <i class="fas fa-certificate fa-3x" style="color: #6ab04c;"></i>
            </div>
            <h3 class="font-weight-bold">Arritjet</h3>
            <p class="text-muted">Shiko sa shumë ke mësuar dhe mblidh yje!</p>
            <a href="#" class="btn btn-success btn-round shadow-sm px-4" style="background: #6ab04c; border: none; border-radius: 20px;">Shiko Yjet</a>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="kids-card p-5" style="background: linear-gradient(135deg, #76c7c0 0%, #a2d2ff 100%); color: white;">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="font-weight-bold">Këshilla e Ditës 🌟</h2>
                    <p class="lead">"I dërguari i Allahut ﷺ ka thënë: 'Më i dobishmi i njerëzve është ai që u bën dobi njerëzve tjerë.'"</p>
                </div>
                <div class="col-md-4 text-right d-none d-md-block">
                    <i class="fas fa-lightbulb fa-5x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-round {
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .btn-round:hover {
        transform: scale(1.05);
        filter: brightness(1.1);
    }
    .opacity-50 {
        opacity: 0.3;
    }
</style>
@endsection
