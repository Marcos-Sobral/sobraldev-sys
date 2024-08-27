<div class="container">
    <div class="row">
        <div class="text-center mb-5">
            <h2 id="Meus_projetos" class="featurette-heading fw-normal lh-1">Meus projetos</h2>
        </div>

        @foreach($projetos as $projeto)
            <div class="col-lg-4 text-center mb-5">
                <img src="{{ Storage::url($projeto->projeto_img) }}" class="w-50 rounded-circle" alt="{{ $projeto->projeto_titulo }}">
                <h2 class="fw-normal">{{ $projeto->projeto_titulo }}</h2>
                <p>{{ $projeto->projeto_descricao }}</p>
                
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#projeto_{{ $projeto->id }}_Modal">
                    Ver sobre
                </button>

                <!-- Modal -->
                <div class="modal fade" id="projeto_{{ $projeto->id }}_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $projeto->projeto_titulo }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $projeto->projeto_descricao }}</p>

                                @if($projeto->processos->isNotEmpty())
                                    <h5>Processos:</h5>
                                    <ul>
                                        @foreach($projeto->processos as $processo)
                                            <li>
                                                <strong>{{ $processo->processo_titulo }}</strong>
                                                <p>{{ $processo->processo_descricao }}</p>
                                                @if($processo->processoLink->isNotEmpty())
                                                    <h6>Links:</h6>
                                                    <ul>
                                                        @foreach($processo->processoLink as $link)
                                                            <li><a href="{{ $link->processo_link_url }}" target="_blank">{{ $link->processo_link_url }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Sem processos para mostrar.</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!-- /.row -->
</div>
