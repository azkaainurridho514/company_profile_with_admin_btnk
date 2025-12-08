<div class="container" style="margin-top: 200px; margin-bottom: 200px">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <p class="fs-4 fw-bold mb-2">
                {{ $master->greating_home_1 }}
            </p>
            <p class="fs-1 fw-bold" style="color: #184D2B">
               {{ $master->greating_home_2 }}
            </p>
            <p class="fs-6">
               {{ $master->greating_home_3 }}
            </p>
            <div class="d-flex gap-2">
                <a href="/menu" class="btn btn-green">Menu</a>
                <a href="/event" class="btn btn-green-outline">Event</a>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('storage/'.$master->foto_header) }}" alt=""  style="width: 75%"
                data-aos="fade-up">
        </div>
    </div>
</div>