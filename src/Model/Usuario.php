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

    #[Campo(label: 'Nome do usuário', nn: true)]
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

    /**
     * Get the value of idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of qtdAcessos
     */
    public function getQtdAcessos()
    {
        return $this->qtdAcessos;
    }

    /**
     * Set the value of qtdAcessos
     */
    public function setQtdAcessos($qtdAcessos): self
    {
        $this->qtdAcessos = $qtdAcessos;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_At()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}