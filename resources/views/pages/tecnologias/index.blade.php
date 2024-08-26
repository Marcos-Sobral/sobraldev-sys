<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-bg-primary font-bold mb-4">Tecnologias</h1>
                    <a href="{{ route('admin.tech.create') }}" class="btn btn-primary mb-4">Criar Tecnologia</a>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagem</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($techs as $tecnologia)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $tecnologia->tech_titulo }}</td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($tecnologia->tech_img)
                                        <img src="{{ asset('storage/' . $tecnologia->tech_img) }}" width="100" class="rounded">
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('admin.tech.edit', $tecnologia->tech_id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>

                                    <form action="{{ route('admin.tech.destroy', $tecnologia->tech_id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
