<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="fs-2 text-center font-bold mb-4">Editar Processo</h1>

                    <form action="{{ route('admin.processo.update', $processo->processo_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="processo_titulo" class="form-label">Título do Processo</label>
                            <input type="text" id="processo_titulo" name="processo_titulo" class="form-control @error('processo_titulo') is-invalid @enderror" value="{{ old('processo_titulo', $processo->processo_titulo) }}" required>
                            @error('processo_titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="processo_descricao" class="form-label">Descrição do Processo</label>
                            <textarea id="processo_descricao" name="processo_descricao" class="form-control @error('processo_descricao') is-invalid @enderror">{{ old('processo_descricao', $processo->processo_descricao) }}</textarea>
                            @error('processo_descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="processo_img" class="form-label">Imagem do Processo</label>
                            @if ($processo->processo_img)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $processo->processo_img) }}" class="img-fluid" alt="{{ $processo->processo_titulo }}" style="max-height: 150px; object-fit: cover;">
                                </div>
                            @endif
                            <input type="file" id="processo_img" name="processo_img" class="form-control @error('processo_img') is-invalid @enderror" accept="image/*">
                            @error('processo_img')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pr_projeto_id" class="form-label">Projeto Associado</label>
                            <select id="pr_projeto_id" name="pr_projeto_id" class="form-select @error('pr_projeto_id') is-invalid @enderror" required>
                                <option value="">Selecione um projeto</option>
                                @foreach ($projetos as $projeto)
                                    <option value="{{ $projeto->projeto_id }}" {{ $projeto->projeto_id == old('pr_projeto_id', $processo->pr_projeto_id) ? 'selected' : '' }}>
                                        {{ $projeto->projeto_titulo }}
                                    </option>
                                @endforeach
                            </select>
                            @error('pr_projeto_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Atualizar Processo</button>
                            <a href="{{ route('admin.processo.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
