<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="fs-2 text-center font-bold mb-4">Editar Processo</h1>

                    <form action="{{ route('admin.processo.update', $processo->processo_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label for="processo_titulo" class="form-label">Título do Processo</label>
                                <input type="text" id="processo_titulo" name="processo_titulo" class="form-control @error('processo_titulo') is-invalid @enderror" value="{{ old('processo_titulo', $processo->processo_titulo) }}" required>
                                @error('processo_titulo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="processo_descricao" class="form-label">Descrição do Processo</label>
                                <textarea id="processo_descricao" name="processo_descricao" class="form-control @error('processo_descricao') is-invalid @enderror">{{ old('processo_descricao', $processo->processo_descricao) }}</textarea>
                                @error('processo_descricao')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-4">
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
                        </div>

                        <div class="d-flex justify-center">
                            <div class="col-md-3 mb-4">
                                <label for="processo_img" class="form-label">Imagem do Processo</label>
                                @if ($processo->processo_img)
                                    <div class="mb-2">
                                        <img src="{{ asset('images/' . $processo->processo_img) }}" class="img-fluid" alt="{{ $processo->processo_titulo }}" style="max-height: 150px; object-fit: cover;">
                                    </div>
                                @endif
                                <input type="file" id="processo_img" name="processo_img" class="form-control @error('processo_img') is-invalid @enderror" accept="image/*">
                                @error('processo_img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="tecnologias" class="form-label">Tecnologias Utilizadas</label>
                            <div class="form-check">
                                @foreach ($tecnologias as $tecnologia)
                                    <div class="mb-2">
                                        <input type="checkbox" 
                                            id="tecnologia_{{ $tecnologia->tech_id }}" 
                                            name="tecnologias[]" 
                                            value="{{ $tecnologia->tech_id }}" 
                                            class="form-check-input"
                                            {{ in_array($tecnologia->tech_id, $processo->tecnologias->pluck('tech_id')->toArray()) ? 'checked' : '' }}>
                                        <label for="tecnologia_{{ $tecnologia->tech_id }}" class="form-check-label">
                                            {{ $tecnologia->tech_titulo }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <!-- Seção para links -->
                        <div id="links-section">
                            <h2 class="fs-4 mb-3">Links do Processo</h2>
                            <div class="mb-3">
                                <button type="button" class="btn btn-success" onclick="addLink()">Adicionar Link</button>
                            </div>
                            <div id="links-container">
                                @foreach ($processo->processoLinks as $index => $link)
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <input type="text" name="links[{{ $index }}][processo_link_nome]" class="form-control" placeholder="Nome do Link" value="{{ old('links.' . $index . '.processo_link_nome', $link->processo_link_nome) }}" required>
                                        <input type="url" name="links[{{ $index }}][processo_link_url]" class="form-control ms-2" placeholder="URL do Link" value="{{ old('links.' . $index . '.processo_link_url', $link->processo_link_url) }}" required>
                                        <input type="text" name="links[{{ $index }}][processo_link_class]" class="form-control ms-2" placeholder="Classe do Link" value="{{ old('links.' . $index . '.processo_link_class', $link->processo_link_class) }}">
                                        <button type="button" class="btn btn-danger ms-2" onclick="removeLink(this)">Remover</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Atualizar Processo</button>
                            <a href="{{ route('admin.projeto.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        function addLink() {
            const container = document.getElementById('links-container');
            const index = container.children.length;

            const linkDiv = document.createElement('div');
            linkDiv.classList.add('d-flex', 'justify-content-between', 'align-items-center', 'mb-2');

            linkDiv.innerHTML = `
                <input type="text" name="links[${index}][processo_link_nome]" class="form-control" placeholder="Nome do Link" required>
                <input type="url" name="links[${index}][processo_link_url]" class="form-control ms-2" placeholder="URL do Link" required>
                <input type="text" name="links[${index}][processo_link_class]" class="form-control ms-2" placeholder="Classe do Link">
                <button type="button" class="btn btn-danger ms-2" onclick="removeLink(this)">Remover</button>
            `;

            container.appendChild(linkDiv);
        }

        function removeLink(button) {
            const container = document.getElementById('links-container');
            container.removeChild(button.parentElement);
        }
    </script>
</x-app-layout>
