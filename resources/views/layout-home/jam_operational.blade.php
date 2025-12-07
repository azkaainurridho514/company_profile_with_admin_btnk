<div class="container" style="margin-top: 200px; margin-bottom: 200px">
    <p class="fw-bold text-center fs-2 mb-5">
        Jam Operational
    </p>
    <div class="row d-flex justify-content-evenly gap-3">
        <div class="col-lg-5">
            <div class="card p-4">
                <i class="bi bi-cup-hot fs-1 mx-auto mb-2" style="color: #184D2B"></i>
                <p class="fw-bold text-center fs-4 mb-2">
                    Kedai
                </p>
                <p class="text-center fs-6 mb-2">
                    Senin - Jumat: {{ $master->kedai_senin_jumat }}
                </p>
                <p class="text-center fs-6 mb-2">
                    Sabtu: {{ $master->kedai_sabtu }}
                </p>
                <p class="text-center fs-6 mb-2">
                    Minggu: {{ $master->kedai_minggu }}
                </p>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card p-4">
                <i class="bi bi-cup-hot fs-1 mx-auto mb-2" style="color: #184D2B"></i>
                <p class="fw-bold text-center fs-4 mb-2">
                    Wahana
                </p>
                 <p class="text-center fs-6 mb-2">
                    Senin - Jumat: {{ $master->wahana_senin_jumat }}
                </p>
                <p class="text-center fs-6 mb-2">
                    Sabtu: {{ $master->wahana_sabtu }}
                </p>
                <p class="text-center fs-6 mb-2">
                    Minggu: {{ $master->wahana_minggu }}
                </p>
            </div>
        </div>
    </div>
</div>