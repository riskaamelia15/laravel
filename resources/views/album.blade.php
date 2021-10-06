@extends('layouts.master')

@section('judul')
    Halaman Album
@endsection

@section('welcome')
    Nice to meet you!
@endsection

@section('content')
    {{-- Awal for --}}
    @for ($i = 1; $i <= 2; $i++)
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                            class="bi bi-collection"></i></div>
                    <h2 class="fs-4 fw-bold">Halaman Album</h2>
                    <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this
                        template!</p>
                </div>
            </div>
        </div>
    @endfor
    {{-- Akhir for --}}
@endsection
