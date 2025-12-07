<div class="container" style="margin-top: 200px; margin-bottom: 200px">
    <p class="fw-bold text-center fs-2 mb-3">
        Our Best Menu
    </p>
    <p class="text-center fs-6 mb-5">
        {{ $master->desc_our_menu_home }}
    </p>
    <div class="row">
        @foreach ($menu as $item)
        <div class="col-lg-3 mb-4">
            <div class="card">
                {{-- <img src="{{ asset('botanika/img/makanan.png') }}" alt=""> --}}
                <img src="{{ asset('storage/'.$item->path) }}" alt="">
                <div class="p-3 mt-1">
                    <p class="fs-5 text-center fw-bold">{{ $item->name }}</p>
                    <p class="fs-6 text-center">
                        {{ $item->desc }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>