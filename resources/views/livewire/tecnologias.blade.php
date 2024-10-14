@php
    // Definindo um array de cores predefinidas
    $cores = ['primary', 'success', 'danger', 'warning', 'info', 'dark'];
@endphp

<section class="container-fluid justify-content-center h-100 p-5 col">
    <div class="text-center mb-2">
        <h2 id="Meus_projetos" class="featurette-heading fw-bold lh-1 color-purple">Tecnologias que utilizo</h2>
    </div>

    <section class="d-flex gap-md-3 justify-content-around py-5">
        <div class="row">
            @foreach ($tecnologias as $index => $tecnologia)
                @php
                    // Seleciona a cor com base no índice, usando o operador módulo para ciclar pelas cores
                    $cor = $cores[$index % count($cores)];
                @endphp
                <div class="col mb-3">
                    <span class="badge d-flex align-items-center p-1 pe-2 text-{{ $cor }}-emphasis bg-{{ $cor }}-subtle border border-{{ $cor }}-subtle rounded-pill">
                        <img class="rounded-circle me-1" width="24" height="24" src="{{ URL::asset('images/' . $tecnologia->tech_img) }}" alt="{{ $tecnologia->tech_titulo }}">
                        {{ $tecnologia->tech_titulo }}
                    </span>
                </div>
            @endforeach
        </div>
    </section>
</section>
