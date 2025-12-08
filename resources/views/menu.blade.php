@extends('layouts.main')
@section('main')
<div class="container" style="margin-top: 100px; margin-bottom: 200px">
    <p class="fw-bold text-center fs-2">
        Our Menu
    </p>
    <p class="text-center fs-6 mb-5">
        {{ $master->desc_our_menu }}
    </p>
    <div class="d-flex justify-content-center gap-2 flex-wrap mb-5">
        @forelse ($categories as $item)
            <a href="/menu?category={{ $item->id }}" class="btn  {{ request('category') == $item->id ? 'btn-green' : 'btn-green-outline' }}" style="width: fit-content;">{{ $item->name }}</a>
        @empty
            <div class="text-center">
                Tidak ada kategori tersedia.
            </div>
        @endforelse
    </div>
    <div class="row d-flex justify-content-center gap-3 align-items-stretch">
        @forelse ($menu as $item)
            <div class="card p-0 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/'.$item->path) }}" alt="" class="w-100">
                    <div class="p-3 mt-1">
                        <p class="fs-5 text-center fw-bold">{{ $item->name }}</p>
                        <p class="fs-6 text-center">
                            {{ $item->desc }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center">
                Tidak ada menu tersedia.
            </div>
        @endforelse
    </div>
</div>
@endsection