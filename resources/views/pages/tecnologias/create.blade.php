<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.tech.index') }}" class="btn btn-secondary">
                                Voltar
                    </a>
                    <h1 class="text-2xl text-center font-bold mb-4">Criar Tecnologia</h1>
                    <form action="{{ route('admin.tech.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="tech_titulo" :value="__('Título')" />
                            <x-text-input id="tech_titulo" class="block mt-1 w-full" type="text" name="tech_titulo" value="{{ old('tech_titulo') }}" autofocus />
                            <x-input-error :messages="$errors->get('tech_titulo')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="tech_img" :value="__('Imagem')" />
                            <input id="tech_img" class="block mt-1 w-full" type="file" name="tech_img" />
                            <x-input-error :messages="$errors->get('tech_img')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="perfil_id" :value="__('Perfil')" />
                            <select id="perfil_id" name="perfil_id" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                @foreach ($perfis as $perfil)
                                    <option value="{{ $perfil->perfil_id }}">{{ $perfil->perfil_nome }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('perfil_id')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
