<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Empresa;
use Petshop\View\Render;

class NossasLojasController extends FrontController
{
    public function listar()
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $empresa = new Empresa();
        $rowsEmpresa = $empresa->find();

        foreach ($rowsEmpresa as &$e) {
            $empresa = new Empresa();

            $empresa->loadById($e['idempresa']);

            $e['imagens'] = $empresa->getFiles();
        }
        
        $dados['empresa'] = $rowsEmpresa;

        Render::front('nossas-lojas', $dados);
    }
}