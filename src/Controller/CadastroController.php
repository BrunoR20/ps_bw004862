<?php

namespace Petshop\Controller;

use Petshop\Core\Exception;
use Petshop\Core\FrontController;
use Petshop\Model\Cliente;
use Petshop\View\Render;

class CadastroController extends FrontController
{
    public function cadastro()
    {
        $dados = [];
        $dados['titulo'] = 'Faça seu cadastro';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();
        $dados['formCadastro'] = $this->formCadastro();

        Render::front('cadastro', $dados);
    }

    public function postCadastro()
    {
        try {
            $cliente = new Cliente();
            $cliente->tipo    = $_POST['tipo']    ?? null;
            $cliente->cpfcnpj = $_POST['cpfcnpj'] ?? null;
            $cliente->nome    = $_POST['nome']    ?? null;
            $cliente->email   = $_POST['email']   ?? null;
            $cliente->senha   = $_POST['senha']   ?? null;
            if ($_POST['senha'] != $_POST['senha2']) {
                throw new Exception('O campo de senha e confirmação de senha devem ter o mesmo valor');
            }
            
            $resultado = $cliente->find(['email ='=>$cliente->email]);
            if ( !empty($resultado) ) {
                throw new Exception('Endereço de e-mail já cadastrado, selecione recuperar senha caso necessário');
            }
            $cliente->save();
        } catch (Exception $e) {
            $_SESSION['mensagem'] = [
                'tipo'  => 'warning',
                'texto' => $e->getMessage()
            ];
            $this->cadastro();
            exit;
        }
        
        redireciona('/login', 'info', 'Cadastro realizado com sucesso, faça login para continuar');
    }

    private function formCadastro()
    {
        $dados = [
            'btn_label'=>'Criar minha conta',
            'btn_class'=>'btn btn-success mt-4',
            'fields'=>[
                ['type'=>'radio-inline', 'name'=>'tipo', 'class'=>'col-6', 'label'=>'Você é pessoa...',
                'options'=>[
                    ['label'=>'Física', 'value'=>'F'],
                    ['label'=>'Jurídica', 'value'=>'J']
                ],
                'required'=>true
            ],
                ['type'=>'text', 'name'=>'cpfcnpj', 'class'=>'col-6', 'label'=>'Documento', 'required'=>true],
                ['type'=>'text', 'name'=>'nome', 'label'=>'Seu nome completo', 'required'=>true],
                ['type'=>'text', 'name'=>'email', 'label'=>'Seu e-mail', 'required'=>true],
                ['type'=>'password', 'name'=>'senha', 'class'=>'col-6', 'label'=>'Cria uma senha', 'required'=>true],
                ['type'=>'password', 'name'=>'senha2', 'class'=>'col-6', 'label'=>'Confirme sua senha', 'required'=>true],
            ]
        ];
        return Render::block('form', $dados);
    }
}