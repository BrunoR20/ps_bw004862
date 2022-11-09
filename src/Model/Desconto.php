<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'descontos')]
class Desconto extends DAO
{
    #[Campo(label: 'Cód. Desconto', pk: true, nn: true, auto: true)]
    protected $idDesconto;

    #[Campo(label: 'Código do desconto')]
    protected $codigo;

    #[Campo(label: 'Data de início do desconto')]
    protected $dadaIni;

    #[Campo(label: 'Data de fim do desconto')]
    protected $dadaFim;

    #[Campo(label: 'Percentual do desconto')]
    protected $percentual;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
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