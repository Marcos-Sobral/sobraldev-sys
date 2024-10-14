<div>
    <div class="container">
        <div class="row">
            <div class="text-center mb-5">
                <h2 id="Meus_projetos" class="featurette-heading fw-bold lh-1 color-purple">Meus projetos</h2>
            </div>

            @foreach($projetos as $projeto)
                <div class="col-lg-4 text-center mb-5">
                    <img src="{{ URL::asset('images/' . $projeto->projeto_img) }}" class="w-50 rounded-circle" alt="{{ $projeto->projeto_titulo }}">
                    <h2 class="fw-normal">{{ $projeto->projeto_titulo }}</h2>
                    <p>{{ $projeto->projeto_descricao }}</p>
                    
                    <button type="button" class="btn-medio button-purple" data-bs-toggle="modal" data-bs-target="#processoModal_{{ $projeto->projeto_id }}">
                        Ver processos
                    </button>

                    @livewire('processo-modal', ['projetoId' => $projeto->projeto_id])
                </div>
            @endforeach
        </div><!-- /.row -->
    </div>
</div>
