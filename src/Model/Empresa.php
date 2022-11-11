<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'empresas')]
class Empresa extends DAO
{
    #[Campo(label: 'Cód. Empresa', pk: true, nn: true, auto: true)]
    protected $idEmpresa;

    #[Campo(label: 'Nome fantasia', nn: true, order: true)]
    protected $nomeFantasia;

    #[Campo(label: 'Razão social da empresa', nn: true)]
    protected $razaoSocial;

    #[Campo(label: 'Tipo da empresa', nn: true)]
    protected $tipo;

    #[Campo(label: 'CEP da empresa', nn: true)]
    protected $cep;

    #[Campo(label: 'Cidade da empresa', nn: true)]
    protected $cidade;

    #[Campo(label: 'Estado da empresa', nn: true)]
    protected $estado;

    #[Campo(label: 'Rua da empresa')]
    protected $rua;
    
    #[Campo(label: 'Bairro da empresa')]
    protected $bairro;

    #[Campo(label: 'Número da empresa')]
    protected $numero;

    #[Campo(label: 'Telefone 1 da empresa', nn: true)]
    protected $telefone1;

    #[Campo(label: 'Telefone 2 da empresa')]
    protected $telefone2;

    #[Campo(label: 'Site da empresa')]
    protected $site;

    #[Campo(label: 'E-mail da empresa', nn: true)]
    protected $email;

    #[Campo(label: 'CPNJ da empresa', nn: true)]
    protected $cnpj;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
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
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     */
    public function setCep($cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of rua
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     */
    public function setRua($rua): self
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

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
     * Get the value of site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set the value of site
     */
    public function setSite($site): self
    {
        $this->site = $site;

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
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;

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