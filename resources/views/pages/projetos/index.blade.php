<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">          

                    <h1 class="fs-2 text-center font-bold mb-4">Projetos</h1>
                    <a href="{{ route('admin.projeto.create') }}" class="btn btn-primary mb-4">Criar projeto</a>

                    <div class="row">
                        @foreach ($projetos as $projeto)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($projeto->projeto_img)
                                        <img src="{{ URL::asset('images/' . $projeto->projeto_img) }}" class="card-img-top img-fluid" alt="{{ $projeto->projeto_titulo }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $projeto->projeto_titulo }}</h5>
                                        <a href="{{ route('admin.projeto.edit', $projeto->projeto_id) }}" class="btn btn-outline-primary">Editar</a>

                                        <form action="{{ route('admin.projeto.destroy', $projeto->projeto_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                        </form>
                                          <!-- Botão para Abrir Processos -->
                                            <a href="{{ route('admin.projeto.show', $projeto->projeto_id) }}" class="btn btn-outline-success">Abrir Processos</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
