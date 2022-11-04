<?php

namespace Petshop\Model;

//fornecedores
class Fornecedor
{
    //Cód. Fornecedor, pk, nn, auto
    protected $idFornecedor;

    //Razão social do fornecedor, nn
    protected $razaoSocial;

    //Nome fantasia do fornecedor, nn
    protected $nomeFantasia;

    //Telefone 1 do fornecedor, nn
    protected $telefone1;

    //Telefone 2 do fornecedor
    protected $telefone2;

    //E-mail do fornecedor, nn
    protected $email;

    //Contato do fornecedor
    protected $contato;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    /**
     * Get the value of idFornecedor
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial($razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia($nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of telefone1
     */
    public function getTelefone1()
    {
        return $this->telefone1;
    }

    /**
     * Set the value of telefone1
     */
    public function setTelefone1($telefone1): self
    {
        $this->telefone1 = $telefone1;

        return $this;
    }

    /**
     * Get the value of telefone2
     */
    public function getTelefone2()
    {
        return $this->telefone2;
    }

    /**
     * Set the value of telefone2
     */
    public function setTelefone2($telefone2): self
    {
        $this->telefone2 = $telefone2;

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
     * Get the value of contato
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Set the value of contato
     */
    public function setContato($contato): self
    {
        $this->contato = $contato;

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