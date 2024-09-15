<div class="modal fade" id="processoModal_{{ $projeto->projeto_id }}" tabindex="-1" aria-labelledby="processoModalLabel_{{ $projeto->projeto_id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{ URL::asset('images/' . $projeto->projeto_img) }}" width="30" alt="Logo" class="rounded-circle">
                <h1 class="modal-title fs-5" id="processoModalLabel_{{ $projeto->projeto_id }}">
                    Processos de {{ $projeto->projeto_titulo }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row bg-light d-flex text-center">
                    <div class="col-lg-6 px-0">
                        <h1 class="display-4 fst-italic">Detalhes dos Processos</h1>
                        <p class="lead my-3">Abaixo estão os processos relacionados ao projeto <strong>{{ $projeto->projeto_titulo }}</strong>.</p>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <img src="{{ URL::asset('images/' . $projeto->projeto_img) }}" width="200" class="img img-thumbnail rounded w-20" alt="{{ $projeto->projeto_titulo }}">
                    </div>
                </div>
                <div class="row bg-dark mt-3 rounded text-white">
                    <h2 class="fw-normal mt-3 mb-3">Processos e Links Relacionados</h2>
                    <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                @foreach($projeto->processos as $processo)
                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="{{ URL::asset('images/' . $processo->processo_img) }}" class="img img-thumbnail rounded w-20" alt="{{ $processo->processo_titulo }}">
                                            <div class="card-body">
                                                <h2 class="featurette-heading fw-normal lh-1 text-wrap">{{ $processo->processo_titulo }}</h2>
                                                <p class="card-text">{{ $processo->processo_descricao }}</p>
                                                <p class="card-text">Tecnologia utilizada:</p>
                                                <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                                                    <div class="row">
                                                        @foreach($processo->tecnologias as $tecnologia)
                                                            <div class="col">
                                                                <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                                                    <img class="rounded-circle me-1" width="24" height="24" src="{{ URL::asset('images/' . $tecnologia->tech_img) }}" alt="{{ $tecnologia->tech_titulo }}">
                                                                    {{ $tecnologia->tech_titulo }}
                                                                </span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        @foreach($processo->processoLinks as $link)
                                                            <a href="{{ $link->processo_link_url }}" target="_blank" class="btn btn-sm {{ $link->processo_link_class }}">
                                                                {{ $link->processo_link_nome }}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                    <small class="text-body-secondary">{{ $processo->updated_at->format('Y/m') ?? 'Data não disponível' }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
