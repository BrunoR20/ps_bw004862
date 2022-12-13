<?php
if (empty($cliente)) {
    $opcaoLogin = <<<HTML
            <a href="/login" title="Entrar/Cadastrar" class="d-flex align-items-center lh-1">
                <i class="bi bi-person fs-4 pe-2"></i>
                <span>Entrar ou<br>cadastrar</span>
            </a>
        HTML;
} else {
    $opcaoLogin = <<<HTML
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Olá <strong>{$cliente['prinome']}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-light">
                    <li><a class="dropdown-item" href="/meus-dados">Dados da conta</a></li>
                    <li><a class="dropdown-item" href="/meus-pedidos">Meus pedidos</a></li>
                    <li><hr class="dropdown-divider border-light"></li>
                    <li><a class="dropdown-item" href="/logout">Sair</a></li>
                </ul>
            </div>
        HTML;
}

$categoriasLista = '';
foreach ($categorias ?? [] as $c) {
    $categoriasLista .= <<<HTML
        <li class="py-2">
            <a href="/categorias/{$c['idcategoria']}" class="text-decoration-none text-body">{$c['nome']}</a>
        </li>
    HTML;
}
?>
<!-- Hack para o topo não "comer" o conteúdo da página -->
<div style="margin-top: 5.5em">&nbsp;</div>

<div class="topo-site fixed-top">
    <div class="container">
        <div class="topo-site-superior row pt-3 pb-1">
            <div class="topo-site-logo col-2 d-flex align-items-center">
                <a href="/" title="Voltar o início do site">
                    <img src="/assets/img/banners/logo_site.png" width="180" height="50" alt="Logo" class="img-fluid rounded-1">
                </a>
            </div>
            <div class="topo-site-busca col-6">
                <form action="/busca" method="GET" class="position-relative h-100 d-flex align-items-center">
                    <input type="text" name="ps-busca" class="form-control input-busca rounded-5 pe-5" value="<?= $_GET['ps-busca'] ?? '' ?>">
                    <button type="submit" class="btn-busca"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="topo-site-opcoes col-4 row align-items-center">
                <div class="topo-site-opcoes-usr col-8">
                    <?= $opcaoLogin ?>
                </div>
                <div class="col-4 d-flex justify-content-between">
                    <a href="/favoritos" title="Meus favoritos" class="px-3">
                        <i class="bi bi-heart fs-4 pe-2"></i>
                    </a>
                    <a href="/carrinho" title="Meu carrinho" class="px-3">
                        <i class="bi bi-cart2 fs-4 pe-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="topo-site-inferior row">
            <div class="topo-site-inferior-menu col-2">
                <a data-bs-toggle="offcanvas" href="#offcanvas-menu" aria-controls="offcanva-menu" class="d-flex align-items-center">
                    <i class="bi bi-list fs-4 pe-1"></i>
                    <span>Departamentos</span>
                </a>
            </div>
            <div class="topo-site-inferior-contatos col-6 row">
                <div class="col-auto d-flex align-items-center">
                    <a href="/nossas-lojas">
                        <i class="bi bi-geo-alt"></i>
                        <span>Nossas lojas</span>
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center">
                    <a href="/fale-conosco">
                        <i class="bi bi-megaphone"></i>
                        <span>Fale conosco</span>
                    </a>
                </div>
            </div>
            <div class="topo-site-inferior-fone col-4 d-flex align-items-center justify-content-end">
                <i class="bi bi-telephone pe-1"></i>
                <span><?= $telefone1 ?? '' ?></span>
            </div>
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-start rounded-3 m-3" data-bs-scroll="true" tabindex="-1" id="offcanvas-menu" aria-labelledby="offcanvas-menuLabel">
    <div class="offcanvas-header pb-1">
        <h5 class="offcanvas-title" id="offcanvas-menuLabel">Categorias do site</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <ul class="lista-categoria">
            <?= $categoriasLista ?>
        </ul>
    </div>
</div>