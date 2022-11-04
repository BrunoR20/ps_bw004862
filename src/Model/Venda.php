<?php

namespace Petshop\Model;

//vendas
class Venda
{
    //Cód. Venda, pk, nn, auto
    protected $idVenda;

    //Cód. Carrinho, pk, nn
    protected $idCarrinho;

    //Forma GPTO da venda, nn
    protected $formaGpto;

    //Status da venda, nn
    protected $status;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    /**
     * Get the value of idVenda
     */
    public function getIdVenda()
    {
        return $this->idVenda;
    }

    /**
     * Get the value of idCarrinho
     */
    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }

    /**
     * Set the value of idCarrinho
     */
    public function setIdCarrinho($idCarrinho): self
    {
        $this->idCarrinho = $idCarrinho;

        return $this;
    }

    /**
     * Get the value of formaGpto
     */
    public function getFormaGpto()
    {
        return $this->formaGpto;
    }

    /**
     * Set the value of formaGpto
     */
    public function setFormaGpto($formaGpto): self
    {
        $this->formaGpto = $formaGpto;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

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