<div>
    <section id="s-experience">
        <div class="container">
            <h2 class="color-purple">Experiências Profissionais</h2>
            <div class="grid-layout">
                <!-- Coluna de empresas -->
                <div class="option-list">
                    @foreach($experiences as $experience)
                        <div class="item" data-target="exp-{{ $experience->experience_id }}">
                            <div class="institution-button">
                                <img src="{{ URL::asset('images/' . $experience->experience_photo) }}" alt="{{ $experience->experience_enterprise }}" class="institution-image">
                                <span>{{ $experience->experience_enterprise }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Coluna de detalhes das experiências -->
                <div class="text-details">
                    @foreach($experiences as $experience)
                        <div id="exp-{{ $experience->experience_id }}" class="details-content">
                            <h4 class="titleItem">{{ $experience->experience_position }}</h4>
                            <p class="dateItem">{{ \Carbon\Carbon::parse($experience->experience_start)->format('Y') }} - {{ \Carbon\Carbon::parse($experience->experience_end)->format('Y') }}</p>
                            <h5 class="institution">{{ $experience->experience_enterprise }}</h5>
                            <p class="description">{{ $experience->experience_description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        #s-experience {
            padding: 50px 0;
            background-color: white;
            text-align: center;
        }

        .grid-layout {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .option-list {
            flex-basis: 30%;
            max-width: 300px;
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
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
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
            border: 2px solid #8c51fe;
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

        @media (max-width: 768px) {
            .grid-layout {
                flex-direction: column;
            }

            .option-list, .text-details {
                flex-basis: 100%;
                max-width: none;
            }

            .institution-button {
                justify-content: flex-start;
            }
        }
    </style>

    <script>
        function toggleDetails(section, itemSelector, contentSelector) {
            const items = document.querySelectorAll(`#${section} ${itemSelector}`);
            const contents = document.querySelectorAll(`#${section} ${contentSelector}`);

            items.forEach(item => {
                item.addEventListener('click', function() {
                    const targetContent = document.querySelector(`#${this.getAttribute('data-target')}`);

                    if (this.classList.contains('activeItem')) {
                        this.classList.remove('activeItem');
                        targetContent.classList.remove('active');
                    } else {
                        items.forEach(i => i.classList.remove('activeItem'));
                        contents.forEach(c => c.classList.remove('active'));

                        this.classList.add('activeItem');
                        targetContent.classList.add('active');
                    }
                });
            });
        }

        toggleDetails('s-experience', '.item', '.details-content');
    </script>
</div>
