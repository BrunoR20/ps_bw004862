<?php

namespace Petshop\Controller;

use Petshop\Core\DB;
use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class CarrinhoController extends FrontController
{
    public function listar()
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $sql = 'SELECT p.idproduto, p.nome, p.preco, cp.quantidade
                FROM carrinhos c
                INNER JOIN carrinhosprodutos cp ON cp.idcarrinho = c.idcarrinho
                INNER JOIN produtos p ON p.idproduto = cp.idproduto
                WHERE c.idcliente = ?
                ORDER BY cp.created_at DESC';

        $idCliente = $_SESSION['cliente']['idcliente'] ?? 0;
        $rowsProdutos = DB::select($sql, [$idCliente]);

        $produto = new Produto();

        foreach ($rowsProdutos as &$p) {
            $produto->loadById($p['idproduto']);

            $p['imagens'] = $produto->getFiles();
        }
        
        $dados['produtos'] = $rowsProdutos;
        
        Render::front('carrinho', $dados);
    }
}