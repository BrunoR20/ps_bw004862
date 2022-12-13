<div class="container">
    <h1>Nossas lojas</h1>
    <div class="row mt-3">
        <?php
            foreach ($empresa as $e) {
                $tagImg = empty($e['imagens'][0]['url']) ? 'Imagem indefinida' : $e['nomefantasia'];
                $e['imagens'][0]['url'] ??= 'https://picsum.photos/160';
                $site = str_replace(['http://', 'https://'], '', $e['site']);

                // $e['estado'] = trocar nome completo pela sigla (fazer depois)
                // $telefone = formatar telefone (fazer depois);

                echo <<<HTML
                    <div class="col-sm-12 pb-4">
                        <div class="card border-dark">
                            <div class="card-body row d-flex align-items-center">
                                <div class="col-2">
                                    <img src="{$e['imagens'][0]['url']}" class="img-fluid" alt="{$tagImg}">
                                </div>
                                <div class="col-10">
                                    <h2 class="h3">{$e['nomefantasia']}</h2>
                                    <h3 class="h5">{$e['razaosocial']}</h3>

                                    <p class="card-text mb-1">{$e['cidade']} - {$e['estado']}</p>
                                    <p class="card-text mb-1">{$e['rua']}, {$e['numero']}</p>

                                    <p class="card-text mb-1">{$site} | {$e['email']} | {$e['telefone1']}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                HTML;
            }
        ?>
    </div>
</div>