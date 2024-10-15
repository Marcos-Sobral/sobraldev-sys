<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.education.index') }}" class="btn btn-secondary mb-4">
                        Voltar
                    </a>

                    <h1 class="text-2xl text-center font-bold mb-4">Editar Educação</h1>
                    <form action="{{ route('admin.education.update', $education->education_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_course" :value="__('Título')" />
                                <x-text-input id="education_course" class="block mt-1 w-full pl-4" type="text" name="education_course" value="{{ old('education_course', $education->education_course) }}" required autofocus />
                                <x-input-error :messages="$errors->get('education_course')" class="mt-2" />
                            </div>

                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_institution" :value="__('Instituição')" />
                                <x-text-input id="education_institution" class="block mt-1 w-full pl-4" type="text" name="education_institution" value="{{ old('education_institution', $education->education_institution) }}" required />
                                <x-input-error :messages="$errors->get('education_institution')" class="mt-2" />
                            </div>

                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_description" :value="__('Descrição')" />
                                <x-text-input id="education_description" class="block mt-1 w-full pl-4" type="text" name="education_description" value="{{ old('education_description', $education->education_description) }}" required />
                                <x-input-error :messages="$errors->get('education_description')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_address" :value="__('Local')" />
                                <x-text-input id="education_address" class="block mt-1 w-full pl-4" type="text" name="education_address" value="{{ old('education_address', $education->education_address) }}" required />
                                <x-input-error :messages="$errors->get('education_address')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_start" :value="__('Data de inicio')" />
                                <x-text-input id="education_start" class="block mt-1 w-full pl-4" type="date" name="education_start" value="{{ old('education_start', $education->education_start) }}" required min="1900" max="{{ date('Y') }}" />
                                <x-input-error :messages="$errors->get('education_start')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_end" :value="__('Data de fim')" />
                                <x-text-input id="education_end" class="block mt-1 w-full pl-4" type="date" name="education_end" value="{{ old('education_end', $education->education_end) }}" required min="1900" max="{{ date('Y') }}" />
                                <x-input-error :messages="$errors->get('education_end')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="education_photo" :value="__('Foto da Educação')" />
                            <x-text-input id="education_photo" class="block mt-1 w-full" type="file" name="education_photo" />
                            <x-input-error :messages="$errors->get('education_photo')" class="mt-2" />

                            @if ($education->education_photo)
                            <div class="mt-4">
                                <span class="block text-sm text-gray-600 dark:text-gray-400">Imagem Atual:</span>
                                <img src="{{ asset('images/' . $education->education_photo) }}" width="150" class="rounded mt-2">
                            </div>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>