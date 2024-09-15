<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="text-2xl text-center font-bold mb-4">Editar Conteúdo do Carrossel</h1>
                    <form action="{{ route('admin.carrossel.update', $carrossel->carrossel_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-input-label for="carrossel_titulo" :value="__('Título')" />
                            <x-text-input id="carrossel_titulo" class="block mt-1 w-full" type="text" name="carrossel_titulo" value="{{ old('carrossel_titulo', $carrossel->carrossel_titulo) }}" autofocus />
                            <x-input-error :messages="$errors->get('carrossel_titulo')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="carrossel_img" :value="__('Imagem')" />
                            <input id="carrossel_img" class="block mt-1 w-full" type="file" name="carrossel_img" />
                            <x-input-error :messages="$errors->get('carrossel_img')" class="mt-2" />

                            @if ($carrossel->carrossel_img)
                                <div class="mt-4">
                                    <span class="block text-sm text-gray-600 dark:text-gray-400">Imagem Atual:</span>
                                    <img src="{{ asset('images/' . $carrossel->carrossel_img) }}" width="150" class="rounded mt-2">
                                </div>
                            @endif
                        </div>

                        <div class="mb-4">
                            <x-input-label for="perfil_id" :value="__('Perfil')" />
                            <select id="perfil_id" name="perfil_id" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                @foreach ($perfis as $perfil)
                                    <option value="{{ $perfil->perfil_id }}" {{ $perfil->perfil_id == $carrossel->carrossel_perfil_id ? 'selected' : '' }}>
                                        {{ $perfil->perfil_nome }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('perfil_id')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="carrossel_link_url" :value="__('Link do Carrossel')" />
                            <x-text-input id="carrossel_link_url" class="block mt-1 w-full" type="url" name="carrossel_link_url" value="{{ old('carrossel_link_url', $carrossel->carrosselLink->first()->carrossel_link_url ?? '') }}" />
                            <x-input-error :messages="$errors->get('carrossel_link_url')" class="mt-2" />
                        </div>


                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
