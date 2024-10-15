<div>
    <section id="s-education">
        <div class="container">
            <h2 class="color-purple">Educação</h2>
            <div class="grid-layout">
                <!-- Coluna de instituições -->
                <div class="option-list">
                    @foreach($educations as $education)
                        <div class="item" data-target="edu-{{ $education->education_id }}">
                            <div class="institution-button">
                                <img src="{{ URL::asset('images/' . $education->education_photo) }}" alt="{{ $education->education_institution }}" class="institution-image">
                                <span>{{ $education->education_institution }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Coluna de detalhes da educação -->
                <div class="text-details">
                    @foreach($educations as $education)
                        <div id="edu-{{ $education->education_id }}" class="details-content">
                            <h4 class="titleItem">{{ $education->education_course }}</h4>
                            <p class="dateItem">{{ \Carbon\Carbon::parse($education->education_start)->format('Y') }} - {{ \Carbon\Carbon::parse($education->education_end)->format('Y') }}</p>
                            <h5 class="institution">{{ $education->education_institution }}</h5>
                            <p class="description">{{ $education->education_description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Estilos CSS -->
    <style>
        /* Sessão de experiências e educação */
        #s-education {
            padding: 50px 0;
            background-color: white;
            text-align: center;
        }

        .grid-layout {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap; /* Responsividade */
        }

        .option-list {
            flex-basis: 30%;
            max-width: 300px; /* Define uma largura máxima para a lista */
        }

        .item {
            padding: 15px;
            background-color: #f8f9fa;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 8px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            color: #8c51fe;
            text-align: center;
        }

        .institution-button {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .institution-image {
            width: 40px; /* Tamanho da imagem */
            height: 40px; /* Tamanho da imagem */
            border-radius: 50%; /* Forma redonda */
            margin-right: 10px; /* Espaço entre a imagem e o texto */
        }

        .item:hover {
            background-color: #e6ddfa;
        }

        .activeItem {
            background-color: #8c51fe;
            color: #fff;
            border-color: #8c51fe;
        }

        .text-details {
            flex-basis: 65%;
            text-align: left;
        }

        .titleItem {
            font-weight: bold;
            color: #8c51fe;
        }

        .dateItem {
            color: #6c757d;
        }

        .institution {
            color: #8c51fe;
        }

        .details-content {
            display: none;
            border: 2px solid #8c51fe; /* Borda ao redor do conteúdo */
            padding: 20px;
            border-radius: 10px;
        }

        .details-content.active {
            display: block;
        }

        .description {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .grid-layout {
                flex-direction: column; /* Muda para coluna em telas menores */
            }

            .option-list, .text-details {
                flex-basis: 100%; /* Ocupa 100% do espaço em mobile */
                max-width: none; /* Remove a largura máxima */
            }

            .institution-button {
                justify-content: flex-start; /* Alinha a imagem e o texto à esquerda */
            }
        }
    </style>

    <script>
        // Função para alternar a exibição de detalhes (Experiência e Educação de forma independente)
        function toggleDetails(section, itemSelector, contentSelector) {
            const items = document.querySelectorAll(`#${section} ${itemSelector}`);
            const contents = document.querySelectorAll(`#${section} ${contentSelector}`);

            items.forEach(item => {
                item.addEventListener('click', function() {
                    const targetContent = document.querySelector(`#${this.getAttribute('data-target')}`);

                    // Se já está ativo, desativa
                    if (this.classList.contains('activeItem')) {
                        this.classList.remove('activeItem');
                        targetContent.classList.remove('active');
                    } else {
                        // Desativa todos os itens e conteúdos
                        items.forEach(i => i.classList.remove('activeItem'));
                        contents.forEach(c => c.classList.remove('active'));

                        // Ativa o item e o conteúdo correspondentes
                        this.classList.add('activeItem');
                        targetContent.classList.add('active');
                    }
                });
            });
        }

        // Ativa a função para as duas seções
        toggleDetails('s-experience', '.item', '.details-content');
        toggleDetails('s-education', '.item', '.details-content');
    </script>
</div>
