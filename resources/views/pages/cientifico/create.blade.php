<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="text-2xl font-bold text-center mb-4">Adicionar um novo projeto</h1>

                    <form action="{{ route('admin.cientifico.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Título do Projeto Científico -->
                        <div class="mb-4">
                            <label for="pj_cientifico_titulo" class="form-label">Título do Projeto Científico</label>
                            <input type="text" id="pj_cientifico_titulo" name="pj_cientifico_titulo" class="form-control @error('pj_cientifico_titulo') is-invalid @enderror" value="{{ old('pj_cientifico_titulo') }}" required>
                            @error('pj_cientifico_titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Descrição do Projeto Científico -->
                        <div class="mb-4">
                            <label for="pj_cientifico_descricao" class="form-label">Descrição do Projeto Científico</label>
                            <textarea id="pj_cientifico_descricao" name="pj_cientifico_descricao" class="form-control @error('pj_cientifico_descricao') is-invalid @enderror">{{ old('pj_cientifico_descricao') }}</textarea>
                            @error('pj_cientifico_descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Imagem do Projeto Científico -->
                        <div class="mb-4">
                            <label for="pj_cientifico_img" class="form-label">Imagem do Projeto Científico</label>
                            <input type="file" id="pj_cientifico_img" name="pj_cientifico_img" class="form-control @error('pj_cientifico_img') is-invalid @enderror" accept="image/*">
                            @error('pj_cientifico_img')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

                        <!-- Link do Projeto Científico -->
                        <div class="mb-4">
                            <x-input-label for="pj_cientificos_url" :value="__('Link do Projeto Científico')" />
                            <x-text-input id="pj_cientificos_url" class="block mt-1 w-full" type="url" name="pj_cientificos_url" value="{{ old('pj_cientificos_url') }}" />
                            <x-input-error :messages="$errors->get('pj_cientificos_url')" class="mt-2" />
                        </div>

                        <!-- Botões -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Criar Projeto</button>
                            <a href="{{ route('admin.cientifico.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
