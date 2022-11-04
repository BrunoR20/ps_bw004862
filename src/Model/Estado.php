<?php

namespace Petshop\Model;

//estados
class Estado
{
    //Unidade Federativa do estado, pk, nn
    protected $idEndereco;

    //Cód. IBGE do estado, nn
    protected $ibge;

    //Nome do estado, nn
    protected $estado;
    
    //Região do estado, nn
    protected $regiao;

    /**
     * Get the value of idEndereco
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set the value of idEndereco
     */
    public function setIdEndereco($idEndereco): self
    {
        $this->idEndereco = $idEndereco;

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