<?php

namespace Petshop\Controller;

use Petshop\Core\DB;
use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class FavoritosController extends FrontController
{
    public function listar()
    {
        $dados = [];
        $dados['titulo'] = 'Página inicial';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $sql = 'SELECT p.*
                FROM produtos p
                INNER JOIN favoritos f ON f.idproduto = p.idproduto
                WHERE f.idcliente = ?
                ORDER BY p.nome';
        
        $idCliente = $_SESSION['cliente']['idcliente'] ?? 0;
        $rowsProdutos = DB::select($sql, [$idCliente]);

        $produto = new Produto();

        foreach ($rowsProdutos as &$p) {
            $produto->loadById($p['idproduto']);

            $p['imagens'] = $produto->getFiles();
            $p['desconto'] ??= 0.15;
            $p['precodesconto'] = $p['preco'] * (1 -  $p['desconto']);
        }
        
        $dados['produtos'] = $rowsProdutos;
        
        Render::front('favoritos', $dados);
    }
}