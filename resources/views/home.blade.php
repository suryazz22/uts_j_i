@extends('layout')

@section('content')

<div class="home-background min-h-screen p-8">

    <h2 class="text-center text-white mb-4">
        Halaman ini dibuat oleh 2301010002 – AHMAD IMRAN
    </h2>

    <div class="row g-4">
        @foreach($places as $p)
        <div class="col-md-4">
            <div class="card shadow-lg border-0 overflow-hidden rounded-4">
                <img src="{{ $p['img'] }}" class="card-img-top" style="height: 220px; object-fit: cover;">
                <div class="card-img-overlay d-flex align-items-end">
                    <h5 class="text-white fw-bold bg-dark bg-opacity-50 px-2 py-1 rounded">
                        {{ $p['title'] }}
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
