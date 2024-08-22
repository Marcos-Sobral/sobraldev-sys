<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">{{ $tecnologia->tech_titulo }}</h1>
                    @if ($tecnologia->tech_img)
                        <img src="{{ asset('storage/' . $tecnologia->tech_img) }}" width="300" class="mb-4">
                    @endif
                    <p class="mb-4">Perfil: {{ $tecnologia->perfil->perfil_nome }}</p>
                    <a href="{{ route('admin.tech.edit', $tecnologia) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('admin.tech.destroy', $tecnologia) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    <a href="{{ route('admin.tech.index') }}" class="btn btn
