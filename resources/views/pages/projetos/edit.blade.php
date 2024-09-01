<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="text-2xl text-center font-bold mb-4">Editar Projeto</h1>

                    <form action="{{ route('admin.projeto.update', $projeto->projeto_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Primeira linha: Título, Descrição e Perfil -->
                        <div class="row mb-4">
                            <div class="col-md-4 mb-3">
                                <x-input-label for="projeto_titulo" :value="__('Título')" />
                                <x-text-input id="projeto_titulo" class="block mt-1 w-full" type="text" name="projeto_titulo" value="{{ old('projeto_titulo', $projeto->projeto_titulo) }}" autofocus />
                                <x-input-error :messages="$errors->get('projeto_titulo')" class="mt-2" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <x-input-label for="projeto_descricao" :value="__('Descrição')" />
                                <x-text-input id="projeto_descricao" class="block mt-1 w-full" type="text" name="projeto_descricao" value="{{ old('projeto_descricao', $projeto->projeto_descricao) }}" />
                                <x-input-error :messages="$errors->get('projeto_descricao')" class="mt-2" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <x-input-label for="pj_perfil_id" :value="__('Perfil')" />
                                <select id="pj_perfil_id" name="pj_perfil_id" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                    @foreach ($perfis as $perfil)
                                        <option value="{{ $perfil->perfil_id }}" {{ $perfil->perfil_id == $projeto->pj_perfil_id ? 'selected' : '' }}>
                                            {{ $perfil->perfil_nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('pj_perfil_id')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Segunda linha: Imagem -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <x-input-label for="projeto_img" :value="__('Imagem')" />
                                <input id="projeto_img" class="block mt-1 w-full" type="file" name="projeto_img" />
                                <x-input-error :messages="$errors->get('projeto_img')" class="mt-2" />

                                @if ($projeto->projeto_img)
                                    <div class="mt-4">
                                        <span class="block text-sm text-gray-600 dark:text-gray-400">Imagem Atual:</span>
                                        <img src="{{ asset('storage/' . $projeto->projeto_img) }}" width="150" class="rounded mt-2">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
