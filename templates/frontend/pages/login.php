<div class="container my-5 pg-login">
    <div class="row">
        <div class="col-6 mx-auto">
            <?= retornaHTMLAlertMensagemSessao() ?>
        </div><
    </div>
    <div class="row">
        <div class="col-3 ms-auto border-end">
            <h3 class="text-center display-6 pb-2 border-bottom mb-4">Faça seu logon</h3>
            <?= $formLogin ?>
        </div>
        <div class="col-3 me-auto text-center">
            <h3 class="display-6 pb-2 border-bottom mb-4">Crie sua conta</h3>

            <div class="row px-1">
                <div class="col-12 mb-3 pb-1">
                    <p class="text-justify">
                        Com a sua conta da Bivo você tem acesso a ofertas exclusivas, descontos diversos, pode criar e gerenciar a sua Assinatura Bivo, acompanhar os seus pedidos e muito mais!
                    </p>
                </div>
                
                <div class="col-12 text-center mt-3">
                    <a href="/cadastro" class="btn btn-success mt-4 w-75">Criar conta</a>
                </div>
            </div>

        </div>
    </div>
</div>