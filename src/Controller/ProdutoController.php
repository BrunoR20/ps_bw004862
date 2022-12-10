<?php

namespace Petshop\Controller;

use Petshop\Core\DB;
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
            redireciona('/', 'warning', 'Produto não localizado');
        }

        $sql = 'SELECT p.*, f.ativo
                FROM produtos p
                LEFT JOIN favoritos f ON f.idproduto = p.idproduto
                                      AND f.idcliente = ?
                WHERE p.idproduto = ?';
        $parametros = [ $_SESSION['cliente']['idcliente'] ?? 0, $idProduto ];

        $produtoBuscado = DB::select($sql, $parametros)[0];

        $dados['produto'] = $produtoBuscado;
        
        $dados['produto']['desconto'] ??= 0.15;
        $dados['produto']['precodesconto'] = $dados['produto']['preco'] * (1 -  $dados['produto']['desconto']);

        $dados['imagens'] = $produto->getFiles();
        
        Render::front('produtos', $dados);
    }
}