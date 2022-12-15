<div class="container">
    <div class="row mx-auto">
            <?= retornaHTMLAlertMensagemSessao() ?>

            <div class="col-12 mt-3">
                <h1 class="h2">Carrinho de compras</h1>
                <hr>
            </div>

            <?php $valorTotal = 0; ?>

            <?php foreach ($produtos as $p): ?>
                <div class="col-2">
                    <img src="<?= $p['imagens'][0]['url'] ?>" alt="" class="img-fluid">
                </div>

                <div class="col-6 d-flex align-items-center">
                    <?= $p['nome'] ?>
                </div>

                <div class="col-2 d-flex align-items-center">
                    <a href="#" class="altera-qtd-produto" data-incremento="-1" data-idproduto="<?= $p['idproduto'] ?>">
                        <i class="bi bi-dash mx-2"></i>
                    </a>
                    <input type="text" class="w-100 mx-2 text-center" value="<?= $p['quantidade'] ?>" id="produto-<?= $p['idproduto'] ?>">
                    <a href="#" class="altera-qtd-produto" data-incremento="1" data-idproduto="<?= $p['idproduto'] ?>">
                        <i class="bi bi-plus mx-2"></i>
                    </a>
                </div>

                <div class="col-2 d-flex align-items-center justify-content-center display-1 fs-4">
                    R$ <?= number_format($p['preco'], 2, ',', '.') ?>
                </div>
                <hr class="my-3">

                <?php $valorTotal += $p['preco'] * $p['quantidade']; ?>
            <?php endforeach; ?>

            <div class="col-10 d-flex align-items-center justify-content-end h3 mb-0">
                Total no carrinho
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center display-1 fs-4 valor-total">
                R$ <?= number_format($valorTotal, 2, ',', '.') ?>
            </div>
            <hr class="my-3">

            <div class="col-12 mb-3 text-end">
                <a href="#" class="btn btn-danger">Finalizar compra</a>
            </div>
        </div>
    </div>
</div>