<!-- resources/views/components/carousel.blade.php -->
<div class="container-fluid mt-5">
  <div class="text-center mb-5">
    <h2 id="Meus_projetos" class="featurette-heading fw-bold lh-1 color-purple">Últimas atualizações</h2>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Agrupar itens por lote de 3 para telas grandes, mas exibir um por vez no mobile -->
          @foreach($carrosseis->chunk(3) as $index => $chunk)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <div class="container">
                <!-- Layout para Desktop (3 colunas) -->
                <div class="row g-3 d-none d-lg-flex">
                  @foreach($chunk as $carrossel)
                    <div class="col-lg-4">
                      <div class="card custom-card">
                        <img src="{{ URL::asset('images/' . $carrossel->carrossel_img) }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                          <h5 class="card-title">{{ $carrossel->carrossel_titulo ?? 'Título Padrão' }}</h5>
                          <p class="card-text">{{ $carrossel->carrossel_descricao ?? 'Descrição padrão do carrossel.' }}</p>
                          @if($carrossel->carrosselLink->isNotEmpty())
                            @foreach($carrossel->carrosselLink as $link)
                              <a href="{{ $link->carrossel_link_url }}" class="btn-medio button-purple" target="_blank">Ver mais</a>
                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>

                <!-- Layout para Mobile (1 item por vez) -->
                <div class="d-block d-lg-none">
                  @foreach($chunk as $carrossel)
                    <div class="card custom-card mb-3">
                      <img src="{{ URL::asset('images/' . $carrossel->carrossel_img) }}" class="card-img-top" alt="Imagem">
                      <div class="card-body">
                        <h5 class="card-title">{{ $carrossel->carrossel_titulo ?? 'Título Padrão' }}</h5>
                        <p class="card-text">{{ $carrossel->carrossel_descricao ?? 'Descrição padrão do carrossel.' }}</p>
                        @if($carrossel->carrosselLink->isNotEmpty())
                          @foreach($carrossel->carrosselLink as $link)
                            <a href="{{ $link->carrossel_link_url }}" class="btn-medio button-purple" target="_blank">Ver mais</a>
                          @endforeach
                        @endif
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Botões de controle do carrossel -->
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
