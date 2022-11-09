<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'compras')]
class Compra extends DAO
{
    #[Campo(label: 'Cód. Compra', pk: true, nn: true, auto: true)]
    protected $idCompra;

    #[Campo(label: 'Cód. Fornecedor', nn: true)]
    protected $idFornecedor;

    #[Campo(label: 'Frete da compra', nn: true)]
    protected $frete;

    #[Campo(label: 'Total da compra', nn: true)]
    protected $total;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idCompra
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * Get the value of idFornecedor
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Set the value of idFornecedor
     */
    public function setIdFornecedor($idFornecedor): self
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get the value of frete
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Set the value of frete
     */
    public function setFrete($frete): self
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     */
    public function setTotal($total): self
    {
        $this->total = $total;

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
