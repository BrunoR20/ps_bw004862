<div class="container mt-3 pg-produtos">

    <div class="row mx-auto">

        <div class="col-8 row p-3">
            <div class="col-5">
                <img class="img-fluid img-produto" src="<?= $imagens[0]['url'] ?>" alt="<?= $produto['nome'] ?>">
            </div>
            
            <div class="col-7">
                <h1 class="h3 text-justify"><?= $produto['nome'] ?></h1>
                <p class="mt-3"><?= str_replace("\n", '<br>', $produto['descricao']) ?></p>
            </div>
        </div>

        <div class="col-3 ms-auto bg-light rounded p-3">

            <div class="row align-items-top d-flex justify-content-between align-items-center">

                <div class="col-10">
                    <span class="text-decoration-line-through text-muted">
                        R$<?= number_format($produto['preco'] + $produto['preco'] * 0.15, 2, ',', '.') ?>
                    </span>

                    <span class="ms-2 badge rounded-pill text-bg-success">
                        <?= $produto['desconto'] * 100 ?>% OFF
                    </span>
                </div>

                <div class="col-2">
                    <a href="#"
                       class="fs-4 text-danger curtir-produto"
                       data-idproduto="<?= $produto['idproduto'] ?>"
                       title="Favoritar este produto">
                        
                        <i class="bi <?= ($produto['ativo'] == 'S') ? 'bi-heart-fill' : 'bi-heart' ?>"></i>
                    </a>
                </div>
                
            </div>

            <div class="fs-2 fw-semibold">
                R$<?= number_format($produto['preco'], 2, ',', '.') ?>
            </div>

            <?php
                if ($produto['precodesconto'] > 80):  
            ?>
                <div class="fs-5 mb-1">
                    <span>em</span>

                    <span class="text-success fw-semibold">
                        8x R$<?= number_format($produto['preco']/8, 2, ',', '.') ?> sem juros
                    </span>
                </div>
            <?php
                endif;
            ?>

            <div class="mt-3">
                <div class="text-success fw-semibold">
                    <i class="bi bi-truck"></i> Frete grátis 
                </div>
            </div>

            <div class="mt-3">
                <div class="h6 fs-5">
                    <?= $produto['quantidade'] > 0 ? 'Estoque disponível' : 'Estoque indisónível' ?>
                </div>

                <div class="mt-1">
                    <span>
                        Quantidade:
                    </span>

                    <span class="fw-bold">
                        <?= $produto['quantidade'] ?> unidades
                    </span>
                </div>
            </div>

            <div class="mt-3 row">

                <div class="col-12">
                    <a href="#"
                       class="btn btn-primary w-100 border-0 py-2 px-1 fw-semibold"
                       data-idproduto="<?= $produto['idproduto'] ?>"
                       data-quantidade="1">

                        Comprar agora
                    </a>
                </div>

                <div class="col-12 mt-2">
                    <a href="#"
                       class="btn btn-secondary w-100 border-0 py-2 px-1 fw-semibold text-primary bg-secondary bg-opacity-25 comprar-produto
                       data-idproduto="<?= $produto['idproduto'] ?>"
                       data-quantidade="1">

                        Adicionar ao carrinho
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