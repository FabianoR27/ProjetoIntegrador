<!-- HEADER -->
<?php include 'includes/header.php'?>

    <div id="pageAnimes" class="container-fluid px-0">
        <!--artigo sobre animes-->
        <div class="d-flex flex-column flex-lg-row container mx-auto justify-content-around align-content-stretch">
            <article class="py-lg-5 py-md-3 py-sm-0 col-12 col-lg-7 mx-2">
                <div class="container py-5 bordas h-100">
                    <div class="p-0 p-md-5">
                        <div class="col-12 order-0 ">
                            <h1 class="col-md-8 text-center text-sm-center text-md-start fw-semibold">VAMOS FALAR UM POUCO DE ANIMES?</h1>
                        </div>

                        <small>Escrito por: Fabiano Ramos.</small>
                        <div class="text-end">
                            <img src="images/anime_character_zoro.webp" alt="Roronoa Zoro" class="img-fluid m-auto my-2 rounded-3">
                            <small> NA IMAGEM: Roronoa Zoro.</small>
                        </div>

                        <p class="mt-4">No evento da FATECon HQs deste ano, os fãs de cultura pop tiveram a oportunidade de participar de um concurso de melhor cosplay, onde dezenas de pessoas exibiram sua criatividade e paixão ao se vestirem como seus personagens favoritos de animes. Mas, afinal, o que são animes? Essa pergunta pode parecer simples para muitos, mas esconde uma rica história e tradição por trás dessas produções tão queridas por milhões de pessoas ao redor do mundo.</p>
                        
                        <p class="mt-4">Animes são animações de origem japonesa, geralmente derivada dos <a href="mangas.php" class="link-dark link-underline-opacity-0"><strong>mangás</strong></a>, que conquistaram uma audiência global. Diferentes dos desenhos animados ocidentais, os animes se destacam por suas histórias complexas, traços artísticos únicos e a capacidade de abordar temas profundos e variados, desde aventuras épicas até dramas existenciais. Embora muitos animes sejam voltados para o público jovem, há obras para todas as idades e gostos, tornando o gênero acessível e diversificado.</p>

                        <p class="mt-4">A palavra "anime" vem da abreviação da palavra inglesa <span lang="en-us">"animation"</span>, mas no Japão, refere-se a qualquer tipo de animação. Fora do Japão, no entanto, o termo é usado exclusivamente para as produções japonesas. Essas obras vão além da estética vibrante e envolvem narrativas intensas, cheias de nuances emocionais, culturais e, muitas vezes, filosóficas, o que torna o gênero tão apreciado em diversas partes do mundo.</p>

                        <p class="order-3 mt-4">E agora, que tal conhecer alguns dos animes mais marcantes? Se você é novo nesse universo ou já é um fã, selecionei dez animes que certamente vão te prender e te fazer mergulhar de cabeça nesse fascinante mundo das animações japonesas. Prepare a pipoca e venha conferir!</p>
                    </div>
                </div>
            </article>

            <aside class="py-lg-5 py-md-3 py-sm-0 col-12 col-lg-4 mx-2">
                <div class="container py-5 bordas">
                    <div class="d-flex flex-column justify-content-center p-0 px-md-4 py-md-5">
                        <h2 class="text-uppercase text-center text-primary fw-semibold">10 curisodades sobre animes e mangás:</h2>
                        
                        <div class="text-center m-auto">
                            <img src="images/anime_character_luffy.webp" alt="Luffy do Chapéu de Palha" class="p-2 rounded-4 img-fluid">
                        </div>
                        
                        <ol class="py-2 lh-base">
                            <li class="pt-2">A palavra anime não admite plural, sendo anime mesmo o plural de anime.</li>
                            <li class="pt-2">Anime é a palavra que abrevia o termo “Animação” no Japão. E tudo teve início em 1917 pelas mãos dos artistas: Shimokawa Oten, Jun'ichi Kouchi e Seitaro Kitayama.</li>
                            <li class="pt-2">Anime não pode ser considerado apenas sinônimo de “cartoon”, e sim uma forma de arte que trata de temas mais profundos e emocionais.</li>
                            <li class="pt-2">A ordem de leitura de um mangá (quadrinhos) japonês é a inversa da ocidental.</li>
                            <li class="pt-2">No Japão, calcula-se que 40 novos anime estreiam na televisão, semanalmente.</li>
                            <li class="pt-2">No mangá tudo é desenhado à mão.</li>
                            <li class="pt-2">Em japonês, mangá significa, ao pé da letra, “desenhos irresponsáveis”.</li>
                            <li class="pt-2">Osamu Tezuka é o mangaká (desenhista de mangá) mais famoso do Japão.</li>
                            <li class="pt-2">O primeiro anime, criado em 1917, era de dois minutos e apresentava um samurai testando sua nova espada.</li>
                            <li class="pt-2">Um dos fatos mais interessantes sobre o mangá é que seu público é majoritariamente feminino.</li>
                        </ol>
                        <small>fonte: <a href="https://coisasdojapao.com/2016/12/20-curiosidades-sobre-anime-e-manga-que-todo-otaku-deve-saber-cdj/" target="_blank" class="link-success link-underline-opacity-0">Coisas do Japão <i class="bi bi-box-arrow-up-right"></i></a></small>
                    </div>
                </div>
            </aside>
        </div>

        <!--
            
                            ///////////////////////////////
                                    //       //                    //
                                    //       //                  ////
                                    //       //                //  //
                                    ////////////////////     //    //
                                    //       //     ////   ////    ///
                                    //       //   //  // //  //   //
                                    //       // //    ///    // //
                                    //       ///      //     ///
            
            -->

        <!--Seção - Lista de dez animes para assistir-->
        <section class="py-2 clearfix shadow-lg" id="animeList">
            <div class=" container mt-4 px-0">
                <h2 class="mb-3 ps-2 ps-md-0 text-uppercase text-center text-md-start fw-semibold">10 Obras-Primas do Anime Que Você Não Pode Deixar de Ver:</h2>
                <div class="carousel"> <!-- A class 'carousel' está segurando os botões no lugar correto-->
                    <!-- botões de enfeite, pois não pode usar javaScript para fazê-los funcionar -->
                    <button title="!!! Apenas de enfeite ¯\_(ツ)_/¯" class="scroll-button left" type="button" id="scrollLeft">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button title="!!! Apenas de enfeite ¯\_(ツ)_/¯" class="scroll-button right" type="button" id="scrollRight">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    
                    <?php //função para ativar a classe 'bright-image' ao clicar em uma imagem
                        function brightness($imagemBrilhante){
                            $paginaAnime = isset($_GET['page']) ? $_GET['page'] : ''; 
                            if($imagemBrilhante == $paginaAnime){
                                echo 'bright-image';
                            } 
                        }
                    ?>
                    <ul class="d-flex list-unstyled gap-2 overflow-x-scroll p-2 px-md-0" id="imageContainer">
                        <li class="mx-1 mx-md-2" id="anime1">
                            <div class="clearfix zoom-img mt-1">
                            <a href="animes.php?page=anime1#anime1" class="link-dark link-underline-opacity-0 <?php brightness('anime1')?>">
                            <img src="images/anime_one_piece_sm.webp" class="figure-img rounded-3" alt="One Piece">
                                    <h4 class="text-start m-0" lang="en-us">One Piece</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime2#anime2" class="link-dark link-underline-opacity-0 <?php brightness('anime2')?>">
                                    <img src="images/anime_naruto_sm.webp" class="figure-img rounded-3" alt="Naruto Shippuden ">
                                    <h4 class="text-start m-0">Naruto Shippuden</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime3">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime3#anime3" class="link-dark link-underline-opacity-0 <?php brightness('anime3')?>">
                                    <img src="images/anime_dragon_ball_sm.webp" class="figure-img rounded-3" alt="Dragon Ball Z">
                                    <h4 class="text-start m-0" lang="en-us">Dragon Ball Z</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime4">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime4#anime4" class="link-dark link-underline-opacity-0 <?php brightness('anime4')?>">
                                    <img src="images/anime_attack_on_titan_sm.webp" class="figure-img rounded-3" alt="Attack On Titan">
                                    <h4 class="text-start m-0" lang="en-us">Attack On Titan</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime5">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime5#anime5" class="link-dark link-underline-opacity-0 <?php brightness('anime5')?>">
                                    <img src="images/anime_death_note_sm.webp" class="figure-img rounded-3" alt="Death Note">
                                    <h4 class="text-start m-0" lang="en-us">Death Note</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime6">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime6#anime6" class="link-dark link-underline-opacity-0 <?php brightness('anime6')?>">
                                    <img src="images/anime_chainsaw_man_sm.webp" class="figure-img rounded-3" alt="Chainsaw Man">
                                    <h4 class="text-start m-0" lang="en-us">Chainsaw Man</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime7">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime7#anime7" class="link-dark link-underline-opacity-0 <?php brightness('anime7')?>">
                                    <img src="images/anime_cowboy_bebop_sm.webp" class="figure-img rounded-3" alt="Cowboy Bebop">
                                    <h4 class="text-start m-0">Cowboy Bebop</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime8">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime8#anime8" class="link-dark link-underline-opacity-0 <?php brightness('anime8')?>">
                                    <img src="images/anime_one_punch_man_sm.webp" class="figure-img rounded-3" alt="One Punch Man">
                                    <h4 class="text-start m-0" lang="en-us">One Punch Man</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime9">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime9#anime9" class="link-dark link-underline-opacity-0 <?php brightness('anime9')?>">
                                    <img src="images/anime_jujutsu_kaisen_sm.webp" class="figure-img rounded-3" alt="Jujutsu Kaisen">
                                    <h4 class="text-start m-0">Jujutsu Kaisen</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-1 mx-md-2" id="anime10">
                            <div class="clearfix zoom-img mt-1">
                                <a href="animes.php?page=anime10#anime10" class="link-dark link-underline-opacity-0 <?php brightness('anime10')?>">
                                    <img src="images/anime_demon_slayer_sm.webp" class="figure-img rounded-3" alt="Demon Slayer">
                                    <h4 class="text-start m-0" lang="en-us">Demon Slayer</h4>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <div class="text-center">
                        <small class="text-light"><em>Utilize a barra para mover a lista</em></small>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTEÚDO DOS ANIMES, CARREGADO DINAMICAMENTE COM PHP -->
        <div class="container-fluid p-0" id="content">
            <?php // recurso para incluir o conteúdo correspondente ao anime selecionado
                // Verifica se existe o parâmetro 'page' na URL
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    // Incluir o conteúdo baseado no valor do parâmetro
                    if ($page == 'anime1') {
                        include 'includes/anime-onePiece.php';
                    } elseif ($page == 'anime2') {
                        include 'includes/anime-naruto.php';

                    } elseif ($page == 'anime3') {
                        include 'includes/anime-dragonBall.php';
                    
                    } elseif ($page == 'anime4') {
                        include 'includes/anime-attackOnTitan.php';
                    
                    } elseif ($page == 'anime5') {
                        include 'includes/anime-deathNote.php';
                    
                    } elseif ($page == 'anime6') {
                        include 'includes/anime-chainsawMan.php';
                    
                    } elseif ($page == 'anime7') {
                        include 'includes/anime-cowboyBebop.php';
                    
                    } elseif ($page == 'anime8') {
                        include 'includes/anime-onePunchMan.php';
                    
                    } elseif ($page == 'anime9') {
                        include 'includes/anime-jujutsuKaisen.php';
                    
                    } elseif ($page == 'anime10') {
                        include 'includes/anime-demonSlayer.php';
                    
                    }
                }
            ?>
        </div>

        <!--Secão Veja Também-->
        <section class="py-4">
            <div class="container p-2 text-center rounded-3 py-4">
                <h3>CONHEÇA TAMBÉM: OS MANGÁS QUE INSPIRARAM ANIMES</h3>
                <p>Conheça os mangás por trás dos sucessos dos Animes</p>
                <a class="btn btn-secondary btn-lg" href="mangas.php">SAIBA MAIS</a>
            </div>
        </section>
    </div>

<!-- FOOTER -->
<?php  include 'includes/footer.php' ?>