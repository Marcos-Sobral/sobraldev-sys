<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="fs-2 text-center font-bold mb-4">Tecnologias</h1>
                    <a href="{{ route('admin.tech.create') }}" class="btn btn-primary mb-4">Criar Tecnologia</a>

                    <div class="row">
                        @foreach ($techs as $tecnologia)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($tecnologia->tech_img)
                                        <img src="{{ URL::asset('images/' . $tecnologia->tech_img) }}" class="card-img-top img-fluid" alt="{{ $tecnologia->tech_titulo }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $tecnologia->tech_titulo }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('admin.tech.edit', $tecnologia->tech_id) }}" class="btn btn-outline-primary">Editar</a>
        
                                                <form action="{{ route('admin.tech.destroy', $tecnologia->tech_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary text-right">
                                                {{ $tecnologia->created_at ? $tecnologia->updated_at->format('Y/m') : 'Data não disponível' }}
                                            </small>
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
</x-app-layout>
