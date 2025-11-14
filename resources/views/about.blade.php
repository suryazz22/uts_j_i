@extends('layout')

@section('content')

<h2 class="text-center text-white mb-5">
    Halaman ini dibuat oleh: 2301010001 - ANGGI RAHMAWATI (GANJIL)
</h2>

<div class="row justify-content-center g-4">

    @foreach ($profiles as $p)
    <div class="col-md-5">
        <div class="p-4 rounded-4 shadow-lg text-center"
             style="backdrop-filter: blur(15px); background: rgba(255,255,255,0.2);">

            <img src="{{ $p['img'] }}"
                 class="rounded-circle border border-3 shadow"
                 style="width: 180px; height: 180px; object-fit: cover;">

            <h3 class="text-white mt-3">{{ $p['name'] }}</h3>
            <p class="text-white-50">{{ $p['nim'] }}</p>

            <div class="bg-white bg-opacity-25 p-3 rounded-3 mt-3">
                <h6 class="fw-bold text-white">BIO</h6>
                <p class="text-white">{{ $p['bio'] }}</p>
            </div>

        </div>
    </div>
    @endforeach

</div>

@endsection
