<div class="container mt-3 pg-produtos">
    <div class="row">
        <div class="col-8 row p-3">
            <div class="col-5">
                <img class="img-fluid img-produto" src="<?= $imagens[0]['url'] ?>" alt="<?= $produto['nome'] ?>">
            </div>
            <div class="col-7">
                <h1 class="h3 text-justify"><?= $produto['nome'] ?></h1>
                <p><?= str_replace("\n", '<br', $produto['descricao']) ?></p>
            </div>
        </div>

        <div class="col-3 ms-auto bg-light rounded p-3">
            <div class="preco preco-desconto">
                <span class="text-decoration-line-through text-muted">
                    R$ <?= number_format($produto['precodesconto'], 2, ',', '.') ?>
                    <span class="ms-2 badge rounded-pill text-bg-success">
                        <?= $produto['desconto'] * 100 ?>% off
                    </span>
                </span>
            </div>

            <div class="preco preco-full">
                <span class="fs-1">
                    R$ <?= number_format($produto['precodesconto'], 2, ',', '.') ?>
                </span>
            </div>

            <div class="fw-bold">á vista o cartão, pix ou boleto</div>

            <?php
                if ($produto['precodesconto'] > 80):  
            ?>
            <div class="text-muted">
                <i class="bi bi-credit-card"></i>
                no cartão em até 8x de R$
                <?= number_format($produto['precodesconto']/8, 2, ',', '.') ?> <br>
                sem juros
            </div>
            <?php
                endif;
            ?>

            <div class="btn-adicionar mt-4 row">
                <div class="col-3 me-auto text-center">
                    <a href="#" class="fs-4 text-danger p-2" title="Favoritoar este produto">
                        <i class="bi bi-heart"></i>
                    </a>
                </div>
                <div class="col-8">
                    <a href="/carrinho/<?= $produto['idproduto'] ?>/add" class="btn btn-danger w-100">
                        <i class="bi bi-cart-check"></i> comprar
                    </a>
                </div>
            </div>

        </div>

    </div>

    <div class="row mt-5">
        <h1 class="display-5">Especificações</h1>
        <p class="text-justify"><?= $produto['especificacoes'] ?></p>
    </div>
</div>