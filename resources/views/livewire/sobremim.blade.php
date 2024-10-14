
@foreach ($users as $user)
<section class="main-section">
    <div class="text-section">
        <h2 class="main-title">Marcos Sobral - Desenvolvedor <span>Web</span></h2>
        <p class="main-content">{{ $user->summary }}</p>
        <button class="btn-grande button-purple">Entrar em contato</button>
    </div>
    <figure class="profile-image">
        <img src="{{ asset('images/' . $user->photo) }}" alt="Seu Nome">
    </figure>
</section>
@endforeach
