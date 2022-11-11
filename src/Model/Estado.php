<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'estados')]
class Estado extends DAO
{
    #[Campo(label: 'Unidade Federativa do estado ', pk: true, nn: true)]
    protected $uf;

    #[Campo(label: 'Cód. IBGE do estado ', nn: true)]
    protected $ibge;

    #[Campo(label: 'Nome do estado ', nn: true, order: true)]
    protected $estado;
    
    #[Campo(label: 'Região do estado ', nn: true)]
    protected $regiao;

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of ibge
     */
    public function getIbge()
    {
        return $this->ibge;
    }

    /**
     * Set the value of ibge
     */
    public function setIbge($ibge): self
    {
        $this->ibge = $ibge;

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
     * Get the value of regiao
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * Set the value of regiao
     */
    public function setRegiao($regiao): self
    {
        $this->regiao = $regiao;

        return $this;
    }
}