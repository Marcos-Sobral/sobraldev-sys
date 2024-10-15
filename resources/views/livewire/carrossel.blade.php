<!-- resources/views/components/carousel.blade.php -->
<div class="container-fluid mt-5">
  <div class="text-center mb-5">
    <h2 id="Meus_projetos" class="featurette-heading fw-bold lh-1 color-purple">Tecnologias que utilizo</h2>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($carrosseis->chunk(3) as $index => $chunk)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <div class="container">
                <div class="row">
                  @foreach($chunk as $carrossel)
                    <div class="col-sm-12 col-lg-4 mb-3">
                      <div class="card" style="width: 100%; margin: auto;">
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
              </div>
            </div>
          @endforeach
        </div>

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
