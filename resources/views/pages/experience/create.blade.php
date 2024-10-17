<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.experience.index') }}" class="btn btn-secondary mb-4">Voltar</a>
                    
                    <h1 class="text-2xl text-center font-bold mb-4">Adicionar Experiência</h1>
                    <form action="{{ route('admin.experience.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_position" :value="__('Cargo')" />
                                <x-text-input id="experience_position" class="block mt-1 w-full" type="text" name="experience_position" value="{{ old('experience_position') }}" required autofocus />
                                <x-input-error :messages="$errors->get('experience_position')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_enterprise" :value="__('Empresa')" />
                                <x-text-input id="experience_enterprise" class="block mt-1 w-full" type="text" name="experience_enterprise" value="{{ old('experience_enterprise') }}" required />
                                <x-input-error :messages="$errors->get('experience_enterprise')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_description" :value="__('Descrição')" />
                                <x-text-input id="experience_description" class="block mt-1 w-full" type="text" name="experience_description" value="{{ old('experience_description') }}" required />
                                <x-input-error :messages="$errors->get('experience_description')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_address" :value="__('Local')" />
                                <x-text-input id="experience_address" class="block mt-1 w-full" type="text" name="experience_address" value="{{ old('experience_address') }}" required />
                                <x-input-error :messages="$errors->get('experience_address')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_start" :value="__('Data de início')" />
                                <x-text-input id="experience_start" class="block mt-1 w-full" type="date" name="experience_start" value="{{ old('experience_start') }}" required />
                                <x-input-error :messages="$errors->get('experience_start')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="experience_end" :value="__('Data de fim')" />
                                <x-text-input id="experience_end" class="block mt-1 w-full" type="date" name="experience_end" value="{{ old('experience_end') }}" required />
                                <x-input-error :messages="$errors->get('experience_end')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <x-input-label for="experience_photo" :value="__('Imagem')" />
                            <input id="experience_photo" class="block mt-1 w-full" type="file" name="experience_photo" />
                            <x-input-error :messages="$errors->get('experience_photo')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
