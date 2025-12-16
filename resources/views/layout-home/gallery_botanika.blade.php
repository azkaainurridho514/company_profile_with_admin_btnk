<div class="container" style="margin-top: 200px; margin-bottom: 200px">
    <p class="fw-bold text-center fs-2 mb-3">
        Gallery Botanika
    </p>
    <p class="text-center fs-6 mb-3">
        {{ $master->desc_gallery }}
    </p>
    <div class="row">
        @forelse ($gallery as $item)
            <div class="col-lg-4 mb-4">
                <div class="card" style="cursor:pointer"
                    onclick="openPreviewEventOrGallery(
                        '{{ asset('storage/'.$item->path) }}'
                    )" >
                    <div class="ratio ratio-4x3">
                        <img src="{{ asset('storage/'.$item->path) }}"
                            class="rounded"
                            style="width:100%; height:100%; object-fit:cover;"
                            alt="foto menu" >
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center">
                Tidak ada foto tersedia.
            </div>
        @endforelse
    </div>
</div>
<div class="modal fade" id="galleryOrEventPreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img id="previewImageGalleryOrEvent"
                             src=""
                             class="img-fluid rounded"
                             alt="">
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        function openPreviewEventOrGallery(image) {
            document.getElementById('previewImageGalleryOrEvent').src = image;

            const modalGallery = new bootstrap.Modal(
                document.getElementById('galleryOrEventPreviewModal')
            );
            modalGallery.show();
        }
    </script>
@endpush

