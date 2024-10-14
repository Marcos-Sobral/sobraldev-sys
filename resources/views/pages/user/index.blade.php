<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="fs-2 text-center font-bold mb-4">Formação Profissonal</h1>
                    <a href="{{ route('admin.education.create') }}" class="btn btn-primary mb-4">Adicionar Educação</a>

                    <div class="row">
                        @foreach ($educations as $education)
                        
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($education->education_photo)
                                    <img src="{{ asset('images/' . $education->education_photo) }}"class="card-img-top img-fluid" alt="{{ $education->education_photo }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="text-center font-bold fs-3 featurette-heading fw-normal lh-1 text-wrap mb-3">{{ $education->education_course }}</h5>
                                        <p class="card-text mb-3">{{ $education->education_institution}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('admin.education.edit', $education->education_id) }}" class="btn btn-outline-primary">Editar</a>
        
                                                <form action="{{ route('admin.education.destroy', $education->education_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary text-right">
                                                {{ $education->education_end ? (new \DateTime($education->education_start))->format('Y/m') : 'Data não disponível' }}
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

