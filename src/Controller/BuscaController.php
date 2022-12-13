<?php

namespace Petshop\Controller;

use Petshop\Core\DB;
use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class BuscaController extends FrontController
{
    public function buscar()
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $sql = 'SELECT *
                FROM produtos
                WHERE MATCH (nome, tipo, descricao, especificacoes)
                AGAINST (?)';

        $busca = $_GET['ps-busca'] ?? '';
        $rowsProdutos = DB::select($sql, [$busca]);

        $produto = new Produto();

        foreach ($rowsProdutos as &$p) {
            $produto->loadById($p['idproduto']);

            $p['imagens'] = $produto->getFiles();
            $p['desconto'] ??= 0.15;
            $p['precodesconto'] = $p['preco'] * (1 -  $p['desconto']);
        }
        
        $dados['produtos'] = $rowsProdutos;
        
        Render::front('busca', $dados);
    }
}