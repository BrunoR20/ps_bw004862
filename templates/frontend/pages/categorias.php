<?= retornaHTMLAlertMensagemSessao() ?>
<div class="container">

    <div class="row mx-auto">

        <div class="col-12 px-0">
            <h1 class="h2 mt-3"><?= $categoria['nome'] ?></h1>
        </div>

        <div class="col-2 px-0">
            <img src="<?= $categoria['imagens'][0]['url'] ?>" class="img-fluid" alt="">
        </div>

        <div class="col-10">
            <?= $categoria['descricao'] ?>
        </div>
    </div>

    <div class="row mx-auto">
        
        <div class="col-12 px-0">
            <h2 class="mt-3">Produtos</h2>
        </div>

        <?php
            foreach ($produtos as $p) {
                $nome = strlen($p['nome']) <= 60 ? $p['nome']  : substr($p['nome'], 0, 57) . '...';

                $precoTotal = number_format($p['preco'], 2, ',', '.');
                $precoParcela = number_format($p['preco']/8, 2, ',', '.');
                $precoDesconto = 'Em até 8x de R$' . $precoParcela . ' sem juros';

                echo <<<HTML
                    <div class="col-sm-3 mb-1">
                        <a href="/produtos/{$p['idproduto']}" class="text-decoration-none text-body card my-3 border-0">
                            <div class="card-body pb-0">
                                <p class="card-text"><img src="{$p['imagens'][0]['url']}" class="img-fluid" alt=""></p>
                                <p class="card-text">{$nome}</p>
                                <p class="card-text mb-2">Avaliação do produto</p>
                                <p class="card-text fw-bold fs-5 mb-2">R\${$precoTotal}</p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {$precoDesconto}
                                    </small>
                                </p>
                            </div>
                        </a>
                    </div>
                HTML;
            }
        ?>
    </div>
</div>