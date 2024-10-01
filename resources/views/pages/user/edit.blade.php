<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-4">
                        Voltar
                    </a>

                    <h1 class="text-2xl text-center font-bold mb-4">Informações sobre o usuário</h1>
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" class="block mt-1 w-full pl-4" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="col-md-4 mb-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full pl-4" type="text" name="email" value="{{ old('email', $user->email) }}" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="col-md-4 mb-4">
                                <x-input-label for="summary" :value="__('Resumo')" />
                                <textarea id="summary" class="block mt-1 w-full pl-4 bg-dark" name="summary" required>{{ old('summary', $user->summary) }}</textarea>
                                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
                            </div>

                        </div>

                        <div class="mb-4">
                            <x-input-label for="photo" :value="__('Foto da Educação')" />
                            <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" />
                            <x-input-error :messages="$errors->get('photo')" class="mt-2" />

                            @if ($user->photo)
                            <div class="mt-4">
                                <span class="block text-sm text-gray-600 dark:text-gray-400">Imagem Atual:</span>
                                <img src="{{ asset('images/' . $user->photo) }}" width="150" class="rounded mt-2">
                            </div>
                            @endif
                        </div>
                        <div class="flex items-center justify-content-center gap-4">
                            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-6 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 sm:p-8  dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>