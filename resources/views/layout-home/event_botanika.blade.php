<div class="container" style="margin-top: 200px; margin-bottom: 200px">
    <p class="fw-bold text-center fs-2 mb-3">
        Event Botanika
    </p>
    <p class="text-center fs-6 mb-5">
        {{ $master->desc_event_home }}
    </p>
    <div class="row">
        @forelse ($event as $item)
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/'.$item->photo) }}" alt="" class="w-100">
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
                Tidak ada event tersedia.
            </div>
        @endforelse
    </div>
</div>