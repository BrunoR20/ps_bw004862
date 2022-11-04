<?php

namespace Petshop\Model;

//descontos
class Desconto
{
    //Cód. Desconto, pk, nn, auto
    protected $idDesconto;

    //Código do desconto
    protected $codigo;

    //Dada de início do desconto
    protected $dadaIni;

    //Dada de fim do desconto
    protected $dadaFim;

    //Percentual do desconto
    protected $percentual;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    /**
     * Get the value of idDesconto
     */
    public function getIdDesconto()
    {
        return $this->idDesconto;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     */
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of dadaIni
     */
    public function getDadaIni()
    {
        return $this->dadaIni;
    }

    /**
     * Set the value of dadaIni
     */
    public function setDadaIni($dadaIni): self
    {
        $this->dadaIni = $dadaIni;

        return $this;
    }

    /**
     * Get the value of dadaFim
     */
    public function getDadaFim()
    {
        return $this->dadaFim;
    }

    /**
     * Set the value of dadaFim
     */
    public function setDadaFim($dadaFim): self
    {
        $this->dadaFim = $dadaFim;

        return $this;
    }

    /**
     * Get the value of percentual
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Set the value of percentual
     */
    public function setPercentual($percentual): self
    {
        $this->percentual = $percentual;

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