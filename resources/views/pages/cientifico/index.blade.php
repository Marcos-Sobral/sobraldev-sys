<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="fs-2 text-center font-bold mb-4">Meus projetos Cientificos</h1>
                    <a href="{{ route('admin.cientifico.create') }}" class="btn btn-primary mb-4">Adicionar contéudo</a>

                    <div class="row">
                        @foreach ($projetosCientificos as $pj_cientifico)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($pj_cientifico->pj_cientifico_img)
                                        <img src="{{ asset('storage/' . $pj_cientifico->pj_cientifico_img) }}" class="card-img-top img-fluid" alt="{{ $pj_cientifico->pj_cientifico_titulo }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pj_cientifico->pj_cientifico_titulo }}</h5>
                                        <a href="{{ route('admin.cientifico.edit', $pj_cientifico->pj_cientifico_id) }}" class="btn btn-outline-primary">Editar</a>

                                        <form action="{{ route('admin.cientifico.destroy', $pj_cientifico->pj_cientifico_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                        </form>
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
