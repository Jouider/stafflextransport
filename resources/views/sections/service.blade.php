<div id='services' class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">NOS SERVICES</h6>
            <h1 class="mb-5">Explorez Nos Services</h1>
        </div>
        <div class="row g-4">
            @foreach ($services as $service)
            <x-service-card :service=$service/>
            @endforeach
        </div>
    </div>
</div>
