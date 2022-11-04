<?php

namespace Petshop\Model;

//compras
class Compra
{
    //Cód. Compra, pk, nn, auto
    protected $idCompra;

    //Cód. Fornecedor, nn
    protected $idFornecedor;

    //Frete da compra, nn
    protected $frete;

    //Total da compra, nn
    protected $total;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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
