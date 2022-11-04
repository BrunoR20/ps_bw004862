<?php

namespace Petshop\Model;

//carrinhos
class Carrinho
{
    //Cód. Carrinho, pk, nn, auto
    protected $idCarrinho;

    //Cód. Cliente, nn
    protected $idCliente;

    //Valor total do carrinho, nn
    protected $valorTotal;

    //Estado de encerramento do carrinho
    protected $encerrado;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
    protected $updated_at;

    /**
     * Get the value of idCarrinho
     */
    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }

    /**
     * Get the value of idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     */
    public function setIdCliente($idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of valorTotal
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set the value of valorTotal
     */
    public function setValorTotal($valorTotal): self
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get the value of encerrado
     */
    public function getEncerrado()
    {
        return $this->encerrado;
    }

    /**
     * Set the value of encerrado
     */
    public function setEncerrado($encerrado): self
    {
        $this->encerrado = $encerrado;

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