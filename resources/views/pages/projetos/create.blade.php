<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Adicionar Projeto</h1>
                    <form action="{{ route('admin.projeto.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="projeto_titulo" :value="__('Título')" />
                            <x-text-input id="projeto_titulo" class="block mt-1 w-full" type="text" name="projeto_titulo" value="{{ old('projeto_titulo') }}" autofocus />
                            <x-input-error :messages="$errors->get('projeto_titulo')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="projeto_descricao" :value="__('Descrição')" />
                            <x-text-input id="projeto_descricao" class="block mt-1 w-full" type="text" name="projeto_descricao" value="{{ old('projeto_descricao') }}" />
                            <x-input-error :messages="$errors->get('projeto_descricao')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="projeto_img" :value="__('Imagem')" />
                            <input id="projeto_img" class="block mt-1 w-full" type="file" name="projeto_img" />
                            <x-input-error :messages="$errors->get('projeto_img')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="perfil_id" :value="__('Perfil')" />
                            <select id="perfil_id" name="pj_perfil_id" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                @foreach ($perfis as $perfil)
                                    <option value="{{ $perfil->perfil_id }}">{{ $perfil->perfil_nome }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('pj_perfil_id')" class="mt-2" />
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
