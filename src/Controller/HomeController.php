<?php

namespace Petshop\Controller;

use Petshop\Core\DB;
use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class HomeController extends FrontController
{
    public function index()
    {
        $dados = [];
        $dados['titulo'] = 'Página inicial';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();
        
        $produtos = new Produto();
        $rowsProdutos = $produtos->find(['idcategoria = ' => 5]);

        foreach ($rowsProdutos as &$p) {
            $produto = new Produto();

            $produto->loadById($p['idproduto']);

            $p['imagens'] = $produto->getFiles();
            $p['desconto'] ??= 0.15;
            $p['precodesconto'] = $p['preco'] * (1 -  $p['desconto']);
        }
        
        $dados['produtos'] = $rowsProdutos;
        
        Render::front('home', $dados);
    }
}