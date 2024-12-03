<?php include 'includes/header.php' ?>

<!--Primeiro carrossel da HOME-->
<div id="carrossel-home" class="carousel slide mb-6 mt-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carrossel-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carrossel-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carrossel-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <article class="carousel-item active">
            <img class="d-block w-100" src="images/slide_mario.jpeg" alt="Slide 1 do carrossel da página home" width="800" height="400" style="object-fit: cover;">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h2 class="h1">Expositores</h2>
                    <p>Fique por dentro de todos os Expositores que participarão da Fatecon</p>
                    <p><a class="btn btn-lg btn-primary" href="expositores.php">Saiba mais</a></p>
                </div>
            </div>
        </article>
        <article class="carousel-item">
            <img class="d-block w-100" src="images/slide_batman.jpeg" alt="Slide 2 do carrossel da página home" width="800" height="400" style="object-fit: cover;">
            <div class="container">
                <div class="carousel-caption">
                    <h2 class="h1">Mergulhe no Universo das HQs</h2>
                    <p>Descubra mundos repletos de heróis corajosos, vilões icônicos e narrativas envolventes que capturam a imaginação de todas as idades.</p>
                    <p><a class="btn btn-lg btn-primary" href="hqs.php">Saiba mais</a></p>
                </div>
            </div>
        </article>
        <article class="carousel-item">
            <img class="d-block w-100" src="images/slide_aranha.jpeg" alt="Slide 3 do carrossel da página home" width="800" height="400" style="object-fit: cover;">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h2 class="h1">Descubra nossas atrações Geek</h2>
                    <p>Prepare-se para uma experiência única e imersiva no universo geek!</p>
                    <p><a class="btn btn-lg btn-primary" href="atracoes.php">Saiba mais</a></p>
                </div>
            </div>
        </article>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carrossel-home" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrossel-home" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

<!--Sessão 2 - COM TEXTO E IMAGEM centralizada-->
<aside class="container-fluid bg-transparent py-5">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 d-flex justify-content-center">
            <aside class="col-10 col-sm-8 col-lg-6 d-flex justify-content-center">
                <img src="images/expositores_home.jpg" class="mx-auto img-fluid" alt="Imagem promocional dos expositores" width="500" height="500" loading="lazy">
            </aside>
            <article class="col-lg-6">
                <h2 class="text-warning">Tenha a chance de expor seus trabalhos para um público apaixonado por quadrinhos, cultura geek e muito mais!</h2>
                <p class="lead">Seja você um quadrinista, ilustrador, escritor ou criador de conteúdo geek, a Fatecon é o espaço ideal para apresentar sua arte e conectar-se com fãs e outros profissionais do setor. Inscreva-se agora para garantir sua vaga e aproveite essa oportunidade de destaque no universo geek.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn btn-outline-danger shadow-sm mb-5 btn-lg px-4" href="inscricoes.php">Inscreva-se</a>
                </div>
            </article>
        </div>
    </div>
</aside>

<!--Sessão 3 - COM TITULO, TEXTO E IMAGEM-->
<article class="container text-center bg-dark text-light rounded p-4">
    <h2 class="py-3 text-primary">Cosplay na Fatecon: Dê vida aos seus personagens favoritos!</h2>
    <div>
        <p class="lead">Nosso evento contará com um concurso de cosplay, onde você poderá exibir sua criatividade e talento. Seja qual for o seu personagem — de animes, quadrinhos, filmes ou jogos — todos são bem-vindos para mostrar suas habilidades e celebrar essa cultura vibrante. O concurso será uma oportunidade de interação com outros fãs e de competir por prêmios. Para participar, é necessário se inscrever antecipadamente. <a href="inscricoes.php" class="text-danger text-decoration-none" target="_blank">Saiba mais aqui.</a></p>
        <img class="img-fluid py-5" src="images/home_cosplay.jpg" alt="Imagem com referências a cosplay">
    </div>
</article>

<!--Sessão 4 da HOME - Tópicos de Páginas-->
<section class="container py-5">
    <h2 class="py-4 text-dark text-center">DESTAQUES FATECON</h2>
    <div class="row mb-2 justify-content-center">
        <!-- Primeira Coluna -->
        <article class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-4 text-primary">Animes</strong>
                    <h3 class="mb-0 text-danger">10 Obras-Primas do Anime Que Você Não Pode Deixar de Ver</h3>
                    <div class="mb-1 text-body-secondary">Por: Fabiano Ramos</div>
                    <p class="card-text mb-auto">Nesta seleção especial, destacamos dez animes que transcendem o entretenimento, marcando gerações com narrativas profundas e inesquecíveis.</p>
                    <a href="animes.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
                </div>
            </div>
        </article>

      <article class="col-md-4 d-flex align-items-stretch mb-4">
        <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-4 text-primary">Atrações</strong>
            <h3 class="mb-0 text-danger">Oficinas, Cosplay, Palestras e muito mais</h3>
            <div class="mb-1 text-body-secondary">Por: Rafael Moraes</div>
            <p class="mb-auto">Confira as atrações da FATECon 2024: Uma programação incrível com oficinas práticas, palestras inspiradoras, mesas-redondas, concursos de cosplay e o aguardado Concurso "Desenhe São Roque 2024".</p>
            <a href="atracoes.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
          </div>
        </div>
      </article>
      
        <article class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-4 text-primary">Séries animadas</strong>
                  <h3 class="mb-0 text-danger">5 séries que trouxeram as HQs para a TV</h3>
                  <div class="mb-1 text-body-secondary">Por: Fabiano Ramos</div>
                  <p class="mb-auto">Destacamos séries que não só adaptaram quadrinhos para a televisão, mas também reinventaram seus universos para conquistar novos públicos e consolidar o sucesso delas em novos formatos</p>
                  <a href="series.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
              </div>
            </div>
          </article>

      <article class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-4 text-primary">Expositores</strong>
                  <h3 class="mb-0 text-danger">Conheça alguns dos expositores que já passarão por aqui</h3>
                  <div class="mb-1 text-body-secondary">Por: Cristiano Alves</div>
                  <p class="mb-auto">Entre os destaques estão grandes nomes do cenário nacional que trouxeram suas obras, compartilharam experiências e inspiraram o público com suas trajetórias.</p>
                  <a href="expositores.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
              </div>
            </div>
        </article>

      <article class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-4 text-primary">Mangás</strong>
                  <h3 class="mb-0 text-danger">Descubra a fascinante história por trás dos Mangás</h3>
                  <div class="mb-1 text-body-secondary">Por: Ana Lívia</div>
                  <p class="mb-auto">Explore como essa forma única de arte transformou a cultura pop mundial! Desde as primeiras ilustrações do Japão feudal até as adaptações de sucesso que conquistaram as telas, os mangás contam histórias que emocionam, inspiram e conectam gerações.</p>
                  <a href="mangas.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
              </div>
            </div>
        </article>

      <article class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="row g-0 border border-warning rounded overflow-hidden flex-md-row shadow-sm h-100 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-4 text-primary">Games</strong>
                    <h3 class="mb-0 text-danger">Review de jogos: Resident Evil</h3>
                    <div class="mb-1 text-body-secondary">Por: João Pedro Reveroni</div>
                    <p class="mb-auto">Prepare-se para revisitar o icônico universo do terror com "Resident Evil", uma das franquias mais marcantes da história dos videogames. A série que revolucionou o gênero survival horror com sua atmosfera envolvente .. </p>
                    <a href="games.php" class="icon-link gap-1 icon-link-hover stretched-link">Saiba mais...</a>
                </div>
            </div>
        </article>
    </div>
</section>


<!--section informações Fatecon-->
<section class="container my-5">
    <div class="p-5 text-center bg-transparent rounded-3 border border-primary shadow p-3">
        <h1 class="text-warning">Informações Fatecon</h1>
        <p class="lead">
        Seja expositores, programação ou qualquer outro detalhe, estamos aqui para tornar sua experiência na FATECon ainda mais incrível. Não perca tempo, entre em contato agora mesmo!
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a class="btn btn-outline-primary btn-lg px-4" href="contatos.php">Fale conosco</a>
        </div>
    </div>
</section>  

<!--Carrossel de cards-->
<section class="container-fluid mb-3">
    <div class="py-5 clearfix shadow-lg">
        <div class="container col-10 mt-4 px-0">
            <h2 class="mb-5 ps-2 ps-md-0 text-uppercase text-warning text-center">
                Explore nossas sessões e conheça um pouco mais da FATECon
            </h2>
            <div id="carouselExample" class="carousel slide p-5" data-bs-ride="carousel">
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active mb-3">
                        <div class="d-flex overflow-auto flex-nowrap justify-content-start">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="atracoes.php">
                                        <img src="images/atracoes_carrossel.png" class="img-fluid rounded" alt="Atrações">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="animes.php">
                                        <img src="images/animes_carrossel.png" class="img-fluid rounded" alt="Animes">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="hqs.php">
                                        <img src="images/hqs_carrossel.png" class="img-fluid rounded" alt="HQs">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="mangas.php">
                                        <img src="images/mangas_carrossel.png" class="img-fluid rounded" alt="Mangás">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="series.php">
                                        <img src="images/series_carrossel.png" class="img-fluid rounded" alt="Séries">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="games.php">
                                        <img src="images/games_carrossel.png" class="img-fluid rounded" alt="Games">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="expositores.php">
                                        <img src="images/expositores_carrossel.png" class="img-fluid rounded" alt="Expositores">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="inscricoes.php">
                                        <img src="images/inscricoes_carrossel.png" class="img-fluid rounded" alt="Inscrições">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="quemsomos.php">
                                        <img src="images/quemsomos_carrossel.png" class="img-fluid rounded" alt="Quem Somos">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 flex-shrink-0 mx-2">
                                <div class="card border-0 shadow-sm">
                                    <a href="contatos.php">
                                        <img src="images/contatos_carrossel.png" class="img-fluid rounded" alt="Contatos">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning me-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-warning ms-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
                <p class="lead text-center">Clique na barra para navegar entre os cards.</p>
            </div>
            
        </div>
    </div>
</section>





<!-- Footer -->
<?php include 'includes/footer.php'?>
