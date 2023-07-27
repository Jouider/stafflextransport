<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">NOTRE EQUIPE</h6>
            <h1 class="mb-5">Nos Experts</h1>
        </div>
        <div class="row g-4">
            @foreach ($team as $member)
            <x-team-card :member=$member/>
            @endforeach
        </div>
    </div>
</div>