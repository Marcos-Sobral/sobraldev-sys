<div class="container">
  <div class="row">
    <div class="text-center mb-5">
      <h2 id="Meus_projetos" class="featurette-heading fw-normal lh-1">Meus projetos</h2>
    </div>

    <!-- ABC -->
    <div class="col-lg-4 text-center mb-5">
      <img src="{{ URL::asset('assets/img/logo/abc.png') }}" class="w-50" alt="...">
      <h2 class="fw-normal">ABC DA ANTÔNIA</h2>
      <p>Promovendo a inclusão e o aprendizado de crianças com TEA por meio da tecnologia</p>
      
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#projeto_abc_Modal">
        Ver sobre
      </button>

      <!-- Modal -->
      <div class="modal fade" id="projeto_abc_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <img src="{{ URL::asset('assets/img/logo/abc.png') }}" width="30" alt="...">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                ABC DA ANTÔNIA</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row bg-light d-flex text-center">
                <div class="col-lg-6 px-0">
                  <h1 class="display-4 fst-italic">Conhecendo mais sobre o ABC da Antônia</h1>
                  <p class="lead my-3">O presente artigo tem como foco apresentar a construções do projeto e suas modalidades</p>
                </div>
                <div class=" col-lg-6 d-flex align-items-center justify-content-center">
                  <img src="{{ URL::asset('assets/img/abc_da_antonia/abc_obj_person.png') }}" width="200" alt="...">
                </div>
              </div>
              <div class="row bg-dark mt-3 rounded text-white">
                <h2 class="fw-normal mt-3 mb-3">Recursos disponíveis no momento</h2>

                <div class="album py-5 bg-body-tertiary">
                  <div class="container">
              
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="{{ URL::asset('assets/img/abc_da_antonia/TCC_ABC da Antônia_Defesa_Proposta.pptx.png') }}" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Proposta de TCC</h2>
                            <p class="card-text">A presente apresentação foi realizada no Instituto Federal de Ciênias e Tecnologia do Tocantins - Campus Paraíso do Tocantins. Portanto, essa primeira etapa do projeto é constituida de:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">Slide</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Vídeo</button>
                                <button type="button" class="btn btn-sm btn-outline-info">Leitura</button>
                              </div>
                              <small class="text-body-secondary">2023/1</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="{{ URL::asset('assets/img/abc_da_antonia/FINAL TCC ABC da Antônia Defesa.png') }}" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">TCC</h2>
                            <p class="card-text">A presente apresentação foi realizada no Instituto Federal de Ciênias e Tecnologia do Tocantins - Campus Paraíso do Tocantins. Portanto, está é a ultima etapa da construção do MVP, assim ela é constituida pelos seguintes tópicos:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">Slide</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Vídeo</button>
                                <button type="button" class="btn btn-sm btn-outline-info">Leitura</button>
                              </div>
                              <small class="text-body-secondary">2023/2</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="{{ URL::asset('assets/img/abc_da_antonia/abc_mvp.png') }}" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">MVP</h2>
                            <p class="card-text">A presente apresentação foi realizada no Instituto Federal de Ciênias e Tecnologia do Tocantins - Campus Paraíso do Tocantins. Portanto, está é a ultima etapa da construção do MVP, assim ela é constituida pelos seguintes tópicos:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">PDF INTERATIVO</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Vídeoo</button>
                              </div>
                              <small class="text-body-secondary">2023/2</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fim da Leitura</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- VDO -->
    <div class="col-lg-4 text-center mb-5">
      <img src="{{ URL::asset('assets/img/logo/1.png') }}" class="w-50 rounded-circle" alt="...">
      <h2 class="fw-normal">Vida de Otaku</h2>
      <p>Vida de Otaku é um sistema de gerenciamento de lista de animes que ajuda os usuários a organizar suas séries favoritas.</p>

      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#projeto_VDO_Modal">
        Ver sobre
      </button>

      <!-- Modal -->
      <div class="modal fade" id="projeto_VDO_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <img src="{{ URL::asset('assets/img/logo/1.png') }}" width="30" class="rounded-circle" alt="...">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Vida de Otaku</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row bg-light d-flex text-center">
                <div class="col-lg-6 px-0">
                  <h1 class="display-4 fst-italic">Conhecendo mais sobre o Vida de Otaku</h1>
                  <p class="lead my-3">O presente artigo tem como foco apresentar a construções do projeto e seus recursos</p>
                </div>
                <div class=" col-lg-6 d-flex align-items-center justify-content-center">
                  <img src="{{ URL::asset('assets/img/abc_da_antonia/abc_obj_person.png') }}" width="200" alt="...">
                </div>
              </div>
              <div class="row bg-dark mt-3 rounded text-white">
                <h2 class="fw-normal mt-3 mb-3">Recursos disponíveis no momento</h2>

                <div class="album py-5 bg-body-tertiary">
                  <div class="container">
              
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/736x/d1/35/56/d13556ec053cffc2410a682ee33436d6.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">VDO - Fluxograma</h2>
                            <p class="card-text">A presente apresentação foi realizada no Instituto Federal de Ciênias e Tecnologia do Tocantins - Campus Paraíso do Tocantins. Portanto, está é a ultima etapa da construção do MVP, assim ela é constituida pelos seguintes tópicos:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-outline-success" target="_blank" href="{{ URL::asset('assets/img/vdo/vdo_fluxograma.png') }}">Abrir Fluxograma</a>
                              </div>
                              <small class="text-body-secondary">2023/1</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/c3/84/87/c38487d01f22861dbc66acff8ff9e373.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Protótipo de alta fidalidade - figma</h2>
                            <p class="card-text">Após a definição do problema e pesquisa de mercado foi implementado a construção do protótipo e a identidade visual o sistema, assim tornando mais ágil e eficiênte na etapa de desenvolvimento:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://www.figma.com/design/H4fC554EFQC54XczrPqf59/Vida-de-Otaku?m=auto&t=HFzVYaAxmGLfO2Cl-1" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir FIGMA</a>
                              </div>
                              <small class="text-body-secondary">2023/2</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/4d/45/1b/4d451befba856ff34e98332f065d5e37.jpg" class="img img-thumbnail rounded" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Vida de Otaku - Produção</h2>
                            <p class="card-text">Nesse bloco possuir duas versões do Vida de Otaku(VDO) sendo apenas no Layout sem a implemtanção de API, Banco de dados e demais outras coisas, enquanto a segunda já possuir sua implementação utilizando Banco de dados:</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://marcos-sobral.github.io/templete-vidadeotaku/" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir Layout</a>
                                <a href="https://github.com/Marcos-Sobral/vidadeotaku" target="_blank" type="button" class="btn btn-sm btn-outline-primary">Abrir Versão com Banco</a>
                              </div>
                              <small class="text-body-secondary">2024/1</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fim da Leitura</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- EXCLUSIVA -->
    <div class="col-lg-4 text-center mb-5">
      <img src="{{ URL::asset('assets/img/logo/excusiva.png') }}" class="w-50" alt="...">
      <h2 class="fw-normal">Exclusiva da Moda</h2>
      <p>A Exclusiva da Moda, é uma loja de roupa no Maranhão de diversas ideais, além de ter sessões especiais de produtos.</p>
      <p><a class="btn btn-dark" target="_blank"  href="https://www.instagram.com/exclusivadamoda/">Ver sobre &raquo;</a></p>
    </div>
    
    <!-- webSite -->
    <div class="col-lg-4 text-center mb-5">
      <img src="https://i.pinimg.com/564x/f5/fa/63/f5fa631ad83ba972e28fcb00c42f4033.jpg" class="w-50 rounded-circle" alt="...">
      <h2 class="fw-normal">WebSites e Sistemas</h2>
      <p>Essa sessão é destinada as aplicações web.</p>

      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#projeto_web_Modal">
        Ver sobre
      </button>

      <!-- Modal -->
      <div class="modal fade" id="projeto_web_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <img src="https://i.pinimg.com/564x/f5/fa/63/f5fa631ad83ba972e28fcb00c42f4033.jpg" width="30" class="rounded-circle" alt="...">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Aplicações Web e Sistemas</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row bg-light d-flex text-center">
                <div class="col-lg-6 px-0">
                  <h1 class="display-4 fst-italic">Desenvolvimento de aplicações sistemas e templetes</h1>
                  <p class="lead my-3"></p>
                </div>
                <div class=" col-lg-6 d-flex align-items-center justify-content-center">
                  <img src="https://i.pinimg.com/564x/e0/8a/86/e08a8633c892de2d188bc9cc17f2128a.jpg" width="200" alt="...">
                </div>
              </div>
              <div class="row bg-dark mt-3 rounded text-white">
                <h2 class="fw-normal mt-3 mb-3">Recursos disponíveis no momento</h2>

                <div class="album py-5 bg-body-tertiary">
                  <div class="container">
              
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/74/76/51/747651473322e877834ba444533d89c4.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Sys OS</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/2048px-Typescript_logo_2020.svg.png" alt="">TS
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/2048px-Angular_full_color_logo.svg.png" alt="">Angular
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png" alt="">Bootstrap
                                  </span>
                                </div>
                            </div>
                          </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/Sys_OS" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir repositório</a>
                                <a href="https://sys-os-olive.vercel.app/" target="_blank" type="button" class="btn btn-sm btn-outline-primary">Abrir projeto</a>
                              </div>
                              <small class="text-body-secondary">2024/1</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/c0/37/c3/c037c3126d2a9eec910a8724aed0e8fa.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">CRUD</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="">PHP
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png" alt="">Laravel
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://techvccloud.mediacdn.vn/2018/7/13/docker-1531468887078532266614-0-14-400-726-crop-15314688919081778546108.png" alt="">Docker
                                  </span>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-outline-success" target="_blank" href="https://github.com/Marcos-Sobral/CRUD">Abrir repositório</a>
                              </div>
                              <small class="text-body-secondary">2022/2</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/c1/1b/93/c11b933070c278311d98c0b342c2b5d1.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Exclusiva OS</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="">PHP
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png" alt="">Laravel
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://techvccloud.mediacdn.vn/2018/7/13/docker-1531468887078532266614-0-14-400-726-crop-15314688919081778546108.png" alt="">Docker
                                  </span>
                                </div>
                            </div>
                          </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/Exclusiva-OS" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir Fprojeto</a>
                              </div>
                              <small class="text-body-secondary">2021/2</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/30/be/df/30bedf9cb1c4045fe6f4d68a511e096a.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Exclusiva da Moda</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="">PHP
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png" alt="">Laravel
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://techvccloud.mediacdn.vn/2018/7/13/docker-1531468887078532266614-0-14-400-726-crop-15314688919081778546108.png" alt="">Docker
                                  </span>
                                </div>
                                <div class="col-4">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://vuejs.org/images/logo.png" alt="">Vue
                                  </span>
                                </div>
                                <div class="col-4">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://raw.githubusercontent.com/innocenzi/awesome-inertiajs/master/assets/logo.svg?sanitize=true" alt="">Inertia
                                  </span>
                                </div>
                              </div>

                          </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/Exclusiva-OS" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir Fprojeto</a>
                              </div>
                              <small class="text-body-secondary">2021/2</small>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>                  
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fim da Leitura</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- MOBILE -->
    <div class="col-lg-4 text-center mb-5">
      <img src="https://i.pinimg.com/564x/3e/1a/f4/3e1af4360bb49fa6fd937ce6911508af.jpg" class="w-50 rounded-circle" alt="...">
      <h2 class="fw-normal">Aplicativos</h2>
      <p>Essa sessão é destinada as aplicações mobile.</p>

      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#projeto_mobile_Modal">
        Ver sobre
      </button>

      <!-- Modal -->
      <div class="modal fade" id="projeto_mobile_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <img src="https://i.pinimg.com/564x/3e/1a/f4/3e1af4360bb49fa6fd937ce6911508af.jpg" width="30" class="rounded-circle" alt="...">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Aplicações Mobile</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row bg-light d-flex text-center">
                <div class="col-lg-6 px-0">
                  <h1 class="display-4 fst-italic">Desenvolvimento de aplicações portateis é aqui</h1>
                  <p class="lead my-3"></p>
                </div>
                <div class=" col-lg-6 d-flex align-items-center justify-content-center">
                  <img src="https://i.pinimg.com/736x/27/ce/08/27ce086df68a4de1ba4612c7a4b5105a.jpg" width="300" alt="...">
                </div>
              </div>
              <div class="row bg-dark mt-3 rounded text-white">
                <h2 class="fw-normal mt-3 mb-3">Recursos disponíveis no momento</h2>

                <div class="album py-5 bg-body-tertiary">
                  <div class="container">
              
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/c0/37/c3/c037c3126d2a9eec910a8724aed0e8fa.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Frase Motivacionais</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://e7.pngegg.com/pngimages/123/816/png-clipart-computer-icons-java-%E5%92%96%E5%95%A1%E6%B5%B7%E6%8A%A5%E5%9B%BE%E7%89%87%E7%B4%A0%E6%9D%90-miscellaneous-text.png" alt="">Java
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://w7.pngwing.com/pngs/991/932/png-transparent-android-studio-alt-macos-bigsur-icon-thumbnail.png" alt="">Android Studio
                                  </span>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-outline-success" target="_blank" href="https://github.com/Marcos-Sobral/APK_FrasesMotivacinais">Abrir repositório</a>
                              </div>
                              <small class="text-body-secondary">2022/1</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/79/cd/e7/79cde75a7c5021520cc8797d11899523.jpg" class="img img-thumbnail rounded w-20" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Agenda de contatos</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://e7.pngegg.com/pngimages/123/816/png-clipart-computer-icons-java-%E5%92%96%E5%95%A1%E6%B5%B7%E6%8A%A5%E5%9B%BE%E7%89%87%E7%B4%A0%E6%9D%90-miscellaneous-text.png" alt="">Java
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://w7.pngwing.com/pngs/991/932/png-transparent-android-studio-alt-macos-bigsur-icon-thumbnail.png" alt="">Android Studio
                                  </span>
                                </div>
                            </div>
                          </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/APK_AgendaContatos" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir Fprojeto</a>
                              </div>
                              <small class="text-body-secondary">2022/1</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/fc/ee/5d/fcee5d8e7ceecc6979f8ec181c7dc862.jpg" class="img img-thumbnail rounded" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Calculadora</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://e7.pngegg.com/pngimages/123/816/png-clipart-computer-icons-java-%E5%92%96%E5%95%A1%E6%B5%B7%E6%8A%A5%E5%9B%BE%E7%89%87%E7%B4%A0%E6%9D%90-miscellaneous-text.png" alt="">Java
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://w7.pngwing.com/pngs/991/932/png-transparent-android-studio-alt-macos-bigsur-icon-thumbnail.png" alt="">Android Studio
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/calculadora" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir repositório</a>
                              </div>
                              <small class="text-body-secondary">2022/1</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="card shadow-sm">
                          <img src="https://i.pinimg.com/564x/6c/53/a2/6c53a21ecabc78f5cc7e5d4a331df362.jpg" class="img img-thumbnail rounded" alt="...">
                          <div class="card-body">
                            <h2 class="featurette-heading fw-normal lh-1 text-wrap">Exclusiva da Moda</h2>
                            <p class="card-text">Tecnologia utilizada:</p>
                            <div class="d-flex gap-md-3 justify-content-around py-2 mb-3">
                              <div class="row">
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://seeklogo.com/images/F/flutter-logo-5086DD11C5-seeklogo.com.png" alt="">Flutter
                                  </span>
                                </div>
                                <div class="col">
                                  <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-pill">
                                    <img class="rounded-circle me-1" width="24" height="24" src="https://w7.pngwing.com/pngs/991/932/png-transparent-android-studio-alt-macos-bigsur-icon-thumbnail.png" alt="">Android Studio
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="https://github.com/Marcos-Sobral/LTP4-MarcosSobral" target="_blank" type="button" class="btn btn-sm btn-outline-success">Abrir repositório</a>
                              </div>
                              <small class="text-body-secondary">2021/2</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fim da Leitura</button>
            </div>
          </div>
        </div>
      </div>

    </div>



  </div><!-- /.row -->
</div>