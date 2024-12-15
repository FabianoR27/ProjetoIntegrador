<!-- Header-->
<?php include 'includes/header.php'?>

<!--Formulário de inscrição-->
<div class="container col-xl-10 col-xxl-8 px-4 py-2">
    <main class="row align-items-center g-lg-5 py-5">
        <!-- Texto explicativo -->
        <aside class="col-lg-6 text-center text-lg-start text-light">
            <h1 class="display-4 fw-bold lh-1 text-primary mb-3">Formulário de Inscrição</h1>
            <p class="col-lg-10 fs-4 mb-5">
                Participe do evento FATECon escolhendo sua categoria: inscreva-se no concurso de cosplay, seja um expositor ou colabore como voluntário. Venha fazer parte dessa experiência única e contribuir para o sucesso do maior evento geek da região!
            </p>
        </aside>

        <!-- Formulário -->
        <div class="col-md-10 mx-auto col-lg-6">
            <form class="p-2 p-md-5 bordas rounded-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Nome completo">
                    <label for="floatingName">Nome completo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="emailBox" name="email" placeholder="name@example.com">
                    <label for="emailBox">Digite seu e-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="subscriptionType" aria-label="Tipo de Inscrição">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="cosplay">Cosplay</option>
                        <option value="expositores">Expositores</option>
                        <option value="voluntario">Voluntários</option>
                    </select>
                    <label for="floatingSelect">Selecione seu tipo de inscrição</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="floatingTextarea" name="comments" placeholder="Comentários ou observações" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comentários ou observações</label>
                </div>
                <button class="btn btn-lg btn-primary mt-4 w-100" type="submit">Inscrever-se</button>
                <hr class="my-4">
                <div class="mb-3 text-center">
                    <small class="text-light">Ao clicar em Inscrever-se, você concorda com os <a href="normas.php" class="text-warning fw-semibold">termos de uso.</a></small>
                </div>
            </form>
        </div>
    </main>
</div>

<!--Footer-->
<?php include 'includes/footer.php'?>
