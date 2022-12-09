<div class="conteudo-site mt-2">
    <div class="container">
        <?= retornaHTMLAlertMensagemSessao() ?>
        
        <div id="carouselImagens" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1400/300" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1401/300" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1402/300" class="d-block w-100" alt="">
                </div>
            </div>

            <div class="carousel-icons">
                <button class="carousel-control-prev seta" type="button" data-bs-target="#carouselImagens" data-bs-slide="prev">
                    <i class="bi bi-arrow-left-square-fill fs-2"></i>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next seta" type="button" data-bs-target="#carouselImagens" data-bs-slide="next">
                    <i class="bi bi-arrow-right-square-fill fs-2"></i>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
        
        <div id="carouselDestaque" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-title mt-3">
                <h2>Em destaque</h2>
            </div>

            <div class="carousel-inner">
                <?php
                    $ativo = 'active';
                    $itensPorPagina = '4';
                    $qtdItensCarousel = ceil( count($produtos) / $itensPorPagina );
                    $produtoAtual = 0;

                    for ($i = 1; $i <= $qtdItensCarousel; $i++) {
                        echo "<div class='carousel-item {$ativo}'>";
                        echo "<div class='row row-cols-5'>";

                        for ($j = 0; $j <= $itensPorPagina; $j++) {
                            $dadosProdutoAtual = $produtos[$produtoAtual];

                            $nome = strlen($dadosProdutoAtual ['nome']) <= 40 ? $dadosProdutoAtual['nome']  : substr($dadosProdutoAtual['nome'], 0, 37) . '...';

                            echo <<<HTML
                                <div class="col">
                                    <div class="card my-3">

                                        <div class="card-header text-center">
                                            <p class="card-text">15% de desconto</p>
                                        </div>

                                        <div class="card-body">
                                            <p class="card-text"><img src="{$dadosProdutoAtual['imagens'][0]['url']}" class="img-fluid"></p>
                                            <p class="card-text">{$nome}</p>
                                            <p class="card-text">Avaliação do produto</p>
                                            <p class="card-text preco">R\${$dadosProdutoAtual['preco']}</p>
                                            <p class="card-text"><small class="text-muted">Em 3x de R$ sem juros no cartão</small></p>
                                        </div>
                                    </div>
                                </div>
                            HTML;
                            
                            $produtoAtual++;

                            if (empty( $produtos[$produtoAtual] )) {
                                break;
                            }
                        }

                        echo "</div>";
                        echo "</div>";
                        $ativo = '';
                    }
                ?>
            </div>

            <div class="carousel-icons">
                <button class="carousel-control-prev seta" type="button" data-bs-target="#carouselDestaque" data-bs-slide="prev">
                    <i class="bi bi-arrow-left-square-fill text-dark fs-2"></i>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next seta" type="button" data-bs-target="#carouselDestaque" data-bs-slide="next">
                    <i class="bi bi-arrow-right-square-fill text-dark fs-2"></i>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>

        <div class="items-loja">

            <div class="items-loja-title mt-3">
                <h2>Nossos produtos</h2>
            </div>

            <div class="items-loja-products mt-4 row">

            <?php
                foreach ($produtos as $p) {
                    $nome = strlen($p['nome']) <= 60 ? $p['nome']  : substr($p['nome'], 0, 57) . '...';
                    $precoTotal = $p['preco'];
                    $precoDesconto = 'Em até 8x de R$' . number_format($p['precodesconto']/8, 2, ',', '.'). ' sem juros';

                    echo <<<HTML
                        <div class="col-3 px-2 pb-4">
                            <!-- button stretched-link -->
                            <!-- Elemnto pai position-relative -->
                            <a href="/produtos/{$p['idproduto']}" class="text-decoration-none text-body card m-1 border-0">
                                <div class="card-header text-center">
                                    <p class="card-text">15% de desconto</p>
                                </div>
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
    </div>
</div>