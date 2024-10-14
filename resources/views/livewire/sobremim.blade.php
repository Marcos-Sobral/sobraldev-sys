
@foreach ($users as $user)
<section class="main-section">
    <div class="text-section">
        <h2 class="main-title">{{ $user->name }} - Desenvolvedor <span>Web</span></h2>
        <p class="main-content">{{ $user->summary }}</p>
        <button class="btn-grande button-purple" onclick="window.location.href='mailto:marcossobraldev@gmail.com'">Entrar em contato</button>
    </div>
    <figure class="profile-image">
        <img src="{{ asset('images/' . $user->photo) }}" alt="Seu Nome">
    </figure>
</section>
@endforeach
