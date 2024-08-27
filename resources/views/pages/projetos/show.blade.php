<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="fs-2 text-center font-bold mb-4">{{  '$projeto->projeto_titulo }}</h1>                  

                    <!-- Botão para abrir um novo processo -->
                    <div class="text-center mb-4">
                        <a href="{{ route('admin.processo.create', ['projeto_id' => $projeto->projeto_id]) }}" class="btn btn-primary">
                            Abrir Processo
                        </a>
                    </div>
                    
                    <!-- Lista de processos associados a este projeto -->
                    @if($projeto->processos->count())
                        <h3 class="text-center font-bold mb-4">Processos Associados</h3>
                        <div class="row">
                            @foreach($projeto->processos as $processo)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm">
                                        @if ($processo->processo_img)
                                            <img src="{{ asset('storage/' . $processo->processo_img) }}" class="img img-thumbnail rounded w-100" alt="{{ $processo->processo_titulo }}" style="max-height: 250px; object-fit: cover;">
                                        @else
                                            <img src="URL::asset('assets/img/default-image.png')" class="img img-thumbnail rounded w-100" alt="Default Image">
                                        @endif
                                        <div class="card-body">
                                            <h2 class=" text-center font-bold fs-3 featurette-heading fw-normal lh-1 text-wrap mb-3">{{ $processo->processo_titulo }}</h2>
                                            <p class="card-text mb-3">{{ $processo->processo_descricao }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.processo.edit', $processo->processo_id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                    <form action="{{ route('admin.processo.destroy', $processo->processo_id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                                                    </form>
                                                </div>
                                                <small class="text-body-secondary">{{ $processo->created_at->format('Y/m') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">Não há processos associados a este projeto.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
