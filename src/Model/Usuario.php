<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'usuarios')]
class Usuario extends DAO
{
    #[Campo(label: 'Cód. Usuário', pk: true, nn: true, auto: true)]
    protected $idUsuario;

    #[Campo(label: 'Nome do usuário', nn: true, order: true)]
    protected $nome;

    #[Campo(label: 'E-mail do usuário', nn: true)]
    protected $email;

    #[Campo(label: 'Senha do usuário', nn: true)]
    protected $senha;

    #[Campo(label: 'Tipo do usuário', nn: true)]
    protected $tipo;

    #[Campo(label: 'Qtd. acessos do usuário', nn: true)]
    protected $qtdAcessos;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getQtdAcessos()
    {
        return $this->qtdAcessos;
    }

    public function setQtdAcessos($qtdAcessos): self
    {
        $this->qtdAcessos = $qtdAcessos;

        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_at;
    }

    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}