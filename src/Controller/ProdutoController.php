<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class ProdutoController extends FrontController
{
    public function listar($idProduto)
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $produto = new Produto();

        if ( !$produto->loadById($idProduto) ) {
            redireciona('/', 'warning', 'Produto inválido, todos os produtos estão localizados na página principal');
        }

        $dados['produto'] = $produto->find( ['idproduto =' => $idProduto] )[0];
        
        $dados['produto']['desconto'] ??= 0.15;
        $dados['produto']['precodesconto'] = $dados['produto']['preco'] * (1 -  $dados['produto']['desconto']);

        $dados['imagens'] = $produto->getFiles();
        
        Render::front('produtos', $dados);
    }
}