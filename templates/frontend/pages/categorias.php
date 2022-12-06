<?= retornaHTMLAlertMensagemSessao() ?>
<div class="container">
    <div class="row mx-auto">
        <div class="col-12 text-center">
            <h2><?= $categoria['nome'] ?></h2>
        </div>

        <div class="col-2">
            <img src="<?= $categoria['imagens'][0]['url'] ?>" class="img-fluid" alt="">
        </div>

        <div class="col-10">
            <?= $categoria['descricao'] ?>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-12 mt-3">
            <h3>Produtos</h3>
        </div>
        <?php
            foreach ($produtos as $p) {
                $nome = strlen($p['nome']) <= 60 ? $p['nome']  : substr($p['nome'], 0, 57) . '...';
                echo <<<HTML
                    <div class="col-sm-3">
                        <div class="card my-3 border-0">
                            <div class="card-body">
                                <p class="card-text"><img src="{$p['imagens'][0]['url']}" class="img-fluid" alt=""></p>
                                <p class="card-text">{$nome}</p>
                                <p class="card-text">Avaliação do produto</p>
                                <p class="card-text preco">R\${$p['preco']}</p>
                                <p class="card-text"><small class="text-muted">Em 3x de R$ sem juros no cartão</small></p>
                            </div>
                        </div>
                    </div>
                    HTML;
                "<div></div>";
            }
        ?>
    </div>
</div>