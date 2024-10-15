<header id="header">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid d-flex justify-content-between align-items-center mx-5 my-3">
      <a class="navbar-brand d-flex align-items-center" href="{{ URL::route('principal') }}">
        <img src="{{ URL::asset('assets/img/logo/2.png') }}" alt="Logo" width="120" height="40" class="d-inline-block align-text-top me-2">
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul id="nav_item" class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#noticias">Últimas atualizações</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Currículos
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item fw-bold" target="_blank" href="http://lattes.cnpq.br/4305160667586368">Carreira Científica - Lattes</a></li>
              <li><a class="dropdown-item fw-bold" target="_blank" href="#">Desenvolvedor PHP</a></li>
              <li><a class="dropdown-item fw-bold" target="_blank" href="#">Desenvolvedor Java</a></li>
              <li><a class="dropdown-item fw-bold" target="_blank" href="#">Design UX/UI</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="https://github.com/Marcos-Sobral" class="nav-link fs-6" target="_blank">GitHub <i class="fab fa-github"></i></a>
          </li>

          <li class="nav-item">
            <a href="https://www.linkedin.com/in/marcossobral-ti" target="_blank" class="nav-link fs-6">LinkedIn <i class="fab fa-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>