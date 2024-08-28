<div class="container">
    <div class="text-center mb-5">
        <h5><span class="text-body-secondary">Projetos Científicos</span></h5>
    </div>
    @foreach($projetosCientificos    as $index => $projeto)
        <div class="row featurette">

            <div class="col-md-7 {{ $index % 2 !== 0 ? 'order-md-2' : '' }} mb-5">
                <h2 class="featurette-heading fw-normal lh-1">{{ $projeto->pj_cientifico_titulo }}</h2>
                <p class="lead">{{ $projeto->pj_cientifico_descricao }}</p>
                @if($projeto->projetoCientificoLink->isNotEmpty())
                    <div class="mt-3">
                        @foreach($projeto->projetoCientificoLink as $link)
                            <p><a class="btn btn-dark" target="_blank" href="{{ $link->pj_cientificos_url }}">Ver sobre &raquo;</a></p>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-md-{{ $index % 2 !== 0 ? '4 order-md-1' : '5' }}">
                @if($projeto->pj_cientifico_img)
                    <img src="{{ Storage::url($projeto->pj_cientifico_img) }}" class="d-block w-50" alt="{{ $projeto->pj_cientifico_titulo }}">
                @else
                    <img src="path/to/default/image.png" class="d-block w-50" alt="...">
                @endif
            </div>
        </div>

        <hr class="featurette-divider">
    @endforeach
</div>
