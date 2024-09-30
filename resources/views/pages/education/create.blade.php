<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.education.index') }}" class="btn btn-secondary mb-4">
                        Voltar
                    </a>
                    
                    <h1 class="text-2xl text-center font-bold mb-4">Adicionar Educação</h1>
                    <form action="{{ route('admin.education.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-4 mb-4 pl-4">
                                <x-input-label for="education_course" :value="__('Nome do Curso')" />
                                <x-text-input id="education_course" class="block mt-1 w-full pl-2" type="text" name="education_course" value="{{ old('education_course') }}" required autofocus />
                                <x-input-error :messages="$errors->get('education_course')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_institution" :value="__('Nome da Instituição')" />
                                <x-text-input id="education_institution" class="block mt-1 w-full pl-2" type="text" name="education_institution" value="{{ old('education_institution') }}" required />
                                <x-input-error :messages="$errors->get('education_institution')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_modality" :value="__('Modalidade')" />
                                <x-text-input id="education_modality" class="block mt-1 w-full pl-2" type="text" name="education_modality" value="{{ old('education_modality') }}" required />
                                <x-input-error :messages="$errors->get('education_modality')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_address" :value="__('Local')" />
                                <x-text-input id="education_address" class="block mt-1 w-full pl-2" type="text" name="education_address" value="{{ old('education_address') }}" required />
                                <x-input-error :messages="$errors->get('education_address')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_start" :value="__('Data de início')" />
                                <x-text-input id="education_start" class="block mt-1 w-full pl-2" type="date" name="education_start" value="{{ old('education_start') }}" required />
                                <x-input-error :messages="$errors->get('education_start')" class="mt-2" />
                            </div>
    
                            <div class="col-md-4 mb-4">
                                <x-input-label for="education_end" :value="__('Data de fim')" />
                                <x-text-input id="education_end" class="block mt-1 w-full pl-2" type="date" name="education_end" value="{{ old('education_end') }}" required />
                                <x-input-error :messages="$errors->get('education_end')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <x-input-label for="education_photo" :value="__('Imagem')" />
                            <input id="education_photo" class="block mt-1 w-full" type="file" name="education_photo" />
                            <x-input-error :messages="$errors->get('education_photo')" class="mt-2" />
                        </div>



                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
