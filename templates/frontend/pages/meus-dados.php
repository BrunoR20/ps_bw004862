<div class="container">

    <div class="row mt-3 mx-auto">

        <div class="col-12 px-0">
            <h1 class="h2">Dados da conta</h1>
        </div>

    </div>

    <div class="row mt-3 mx-auto">

        <div class="col-sm-12 px-0">
            <div class="card border-dark border-0">

                <div class="card-header border-0 py-3 d-flex justify-content-between align-items-center">
                    <h2 class="card-text h5 mb-0">
                        INFORMAÇÕES PESSOAIS
                    </h2>
                    
                    <a href="#" class="card-text h6 text-decoration-none">
                        <i class="bi bi-pencil-square"></i> ALTERAR
                    </a>
                </div>

                <div class="card-body ps-0 mx-0 row">

                    <div class="col-1 text-center align-self-center">
                        <i class="bi bi-person" style="font-size: 3em"></i>
                    </div>

                    <div class="col-11 row">
                        <div class="col-12">
                            <p class="h4"><?= $cliente['nome'] ?></p>
                            <p class="card-text mb-1"><?= $cliente['email'] ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 px-0 mt-3">
            <div class="card border-dark border-0">

            <div class="card-header border-0 py-3 d-flex justify-content-between align-items-center">
                    <h2 class="card-text h5 mb-0">
                        INFORMAÇÕES DE ENDEREÇO
                    </h2>
                    
                    <a href="#" class="card-text h6 text-decoration-none">
                        <i class="bi bi-pencil-square"></i> ALTERAR
                    </a>
                </div>

                <div class="card-body ps-0 mx-0 row">

                    <div class="col-1 text-center align-self-center">
                        <i class="bi bi-geo-alt" style="font-size: 4em"></i>
                    </div>

                    <div class="col-11 row">
                        <div class="col-12">
                            <p class="h4">Brasil - RS</p>
                            <p class="card-text mb-1">Horizontina (98920-000)</p>
                            <p class="card-text mb-1">Rua Tuparendi, 986</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3 px-0 align-items-middle text-center">
            <div>
                <a href="/logout" class="bg-danger text-white text-decoration-none p-2 rounded">SAIR</a>
            </div>
        </div>
    </div>
</div>