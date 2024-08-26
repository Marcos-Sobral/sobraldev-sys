<div class="container-fluid justify-content-center">
    <div class="text-center mb-2">
        <h2 id="Meus_projetos" class="featurette-heading fw-normal lh-1">Tecnologias que utilizo</h2>
    </div>

    <div class="d-flex gap-md-3 justify-content-around py-5">
        <div class="row">
            @foreach ($tecnologias as $tecnologia)
                <div class="col mb-3">
                    <span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">
                        <img class="rounded-circle me-1" width="24" height="24" src="{{ asset('storage/' . $tecnologia->tech_img) }}" alt="{{ $tecnologia->tech_titulo }}">
                        {{ $tecnologia->tech_titulo }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</div>
