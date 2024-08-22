<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Criar Tecnologia</h1>
                    <form action="{{ route('admin.tech.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="tech_titulo" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" name="tech_titulo" id="tech_titulo" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-black text-white" value="{{ old('tech_titulo') }}">
                            @error('tech_titulo')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="tech_img" class="block text-sm font-medium text-gray-700">Imagem</label>
                            <input type="file" name="tech_img" id="tech_img" class="mt-1 block w-full text-sm border-gray-300 rounded-md">
                            @error('tech_img')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="perfil_id" class="block text-sm font-medium text-gray-700">Perfil</label>
                            <select name="perfil_id" id="perfil_id" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-black text-white">
                                @foreach ($perfis as $perfil)
                                    <option value="{{ $perfil->perfil_id }}">{{ $perfil->perfil_nome }}</option>
                                @endforeach
                            </select>
                            @error('perfil_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
