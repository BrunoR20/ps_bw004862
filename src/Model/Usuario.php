<?php

namespace Petshop\Model;

//usuarios
class Usuario
{
    //Cód. Usuário, pk, nn, auto
    protected $idUsuario;

    //Nome do usuario, nn
    protected $nome;

    //E-mail do usuario, nn
    protected $email;

    //Senha do usuario, nn
    protected $senha;

    //Tipo do usuario, nn
    protected $tipo;

    //Qtd. acessos do usuario, nn
    protected $qtdAcessos;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}