<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Categoria;
use Petshop\Model\Produto;
use Petshop\View\Render;

class CategoriaController extends FrontController
{
    public function listar($idCategoria)
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $categoria = new Categoria();
        
        if ( !$categoria->loadById($idCategoria) ) {
            redireciona('/', 'warning', 'Categoria inválida, todas as categorias estão listadas em DEPARTAMENTOS');
        }
        
        $rowsCategorias = $categoria->find(['idcategoria = ' => $idCategoria]);
        
        $dados['categoria'] = $rowsCategorias[0];
        $dados['categoria']['imagens'] = $categoria->getFiles();

        $produto = new Produto();

        $rowsProdutos = $produto->find( ['idcategoria =' =>$idCategoria] );

        foreach ($rowsProdutos as &$p) {

            $produto->loadById($p['idproduto']);

            $p['imagens'] = $produto->getFiles();
            $p['desconto'] ??= 0.15;
            $p['precodesconto'] = $p['preco'] * (1 -  $p['desconto']);
        }
        
        $dados['produtos'] = $rowsProdutos;
        
        Render::front('categorias', $dados);
    }
}