<div id="carouselExampleCaptions" class="carousel slide mb-5">
    <div class="carousel-indicators">
        @foreach($carrosseis as $index => $carrossel)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($carrosseis as $index => $carrossel)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $carrossel->carrossel_img) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    @foreach($carrossel->carrosselLink as $link)
                        <p><a class="btn btn-light" href="{{ $link->carrossel_link_url }}">Ver mais</a></p>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
