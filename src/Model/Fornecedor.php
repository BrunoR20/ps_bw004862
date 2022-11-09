<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'fornecedores')]
class Fornecedor extends DAO
{
    #[Campo(label: 'Cód. Fornecedor', pk: true, nn: true, auto: true)]
    protected $idFornecedor;

    #[Campo(label: 'Razão social do fornecedor', nn: true)]
    protected $razaoSocial;

    #[Campo(label: 'Nome fantasia do fornecedor', nn: true)]
    protected $nomeFantasia;

    #[Campo(label: 'Telefone 1 do fornecedor', nn: true)]
    protected $telefone1;

    #[Campo(label: 'Telefone 2 do fornecedor')]
    protected $telefone2;

    #[Campo(label: 'E-mail do fornecedor', nn: true)]
    protected $email;

    #[Campo(label: 'Contato do fornecedor')]
    protected $contato;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
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