<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="fs-2 text-center font-bold mb-4">Criar Novo Carrossel</h1>

                    <form action="{{ route('admin.carrossel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Título do Carrossel -->
                        <div class="mb-4">
                            <label for="carrossel_titulo" class="form-label">Título do Carrossel</label>
                            <input type="text" id="carrossel_titulo" name="carrossel_titulo" class="form-control @error('carrossel_titulo') is-invalid @enderror" value="{{ old('carrossel_titulo') }}" required>
                            @error('carrossel_titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Descrição do Carrossel -->
                        <div class="mb-4">
                            <label for="carrossel_descricao" class="form-label">Descrição do Carrossel</label>
                            <textarea id="carrossel_descricao" name="carrossel_descricao" class="form-control @error('carrossel_descricao') is-invalid @enderror">{{ old('carrossel_descricao') }}</textarea>
                            @error('carrossel_descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Imagem do Carrossel -->
                        <div class="mb-4">
                            <label for="carrossel_img" class="form-label">Imagem do Carrossel</label>
                            <input type="file" id="carrossel_img" name="carrossel_img" class="form-control @error('carrossel_img') is-invalid @enderror" accept="image/*">
                            @error('carrossel_img')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Seleção de Perfil -->
                        <div class="mb-4">
                            <x-input-label for="perfil_id" :value="__('Perfil')" />
                            <select id="perfil_id" name="perfil_id" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                @foreach ($perfis as $perfil)
                                    <option value="{{ $perfil->perfil_id }}" {{ old('perfil_id') == $perfil->perfil_id ? 'selected' : '' }}>
                                        {{ $perfil->perfil_nome }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('perfil_id')" class="mt-2" />
                        </div>

                        <!-- Link do Projeto Científico -->
                        <div class="mb-4">
                            <x-input-label for="pj_cientificos_url" :value="__('Link do Projeto Científico')" />
                            <x-text-input id="pj_cientificos_url" class="block mt-1 w-full" type="url" name="pj_cientificos_url" value="{{ old('pj_cientificos_url') }}" />
                            <x-input-error :messages="$errors->get('pj_cientificos_url')" class="mt-2" />
                        </div>


                        <!-- Link do Carrossel -->
                        <div class="mb-4">
                            <x-input-label for="carrossel_link_url" :value="__('Link do Carrossel')" />
                            <x-text-input id="carrossel_link_url" class="block mt-1 w-full" type="url" name="carrossel_link_url" value="{{ old('carrossel_link_url') }}" />
                            <x-input-error :messages="$errors->get('carrossel_link_url')" class="mt-2" />
                        </div>

                        <!-- Botões -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Criar Carrossel</button>
                            <a href="{{ route('admin.carrossel.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
