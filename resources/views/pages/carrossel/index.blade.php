<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="fs-2 text-center font-bold mb-4">Meus Carrosseis de noticiais</h1>
                    <a href="{{ route('admin.carrossel.create') }}" class="btn btn-primary mb-4">Adicionar contéudo</a>

                    <div class="row">
                        @foreach ($carrosseis as $carrossel)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($carrossel->carrossel_img)
                                        <img src="{{ URL::asset('images/' . $carrossel->carrossel_img) }}" class="card-img-top img-fluid" alt="{{ $carrossel->carrossel_titulo }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $carrossel->carrossel_titulo }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('admin.carrossel.edit', $carrossel->carrossel_id) }}" class="btn btn-outline-primary">Editar</a>

                                                <form action="{{ route('admin.carrossel.destroy', $carrossel->carrossel_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary text-right">
                                                {{ $carrossel->created_at ? $carrossel->updated_at->format('Y/m') : 'Data não disponível' }}
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
