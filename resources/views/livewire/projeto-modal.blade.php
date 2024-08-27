<div class="modal fade" id="projeto_{{ $projetoId }}_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $projeto->projeto_titulo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ $projeto->projeto_descricao }}</p>
                
                @if($processos->isNotEmpty())
                    <h5>Processos:</h5>
                    <ul>
                        @foreach($processos as $processo)
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
