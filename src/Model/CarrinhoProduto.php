<?php

namespace Petshop\Model;

//carrinhosprodutos
class CarrinhoProduto
{
    //Cód. Produto, pk, nn
    protected $idProduto;

    //Cód. Carrinho, pk, nn
    protected $idCarrinho;

    //Preço do produto, nn
    protected $preco;

    //Quantidade do produto, nn
    protected $quantidade;

    //Dt. Criação, nn, auto
    protected $created_at;

    /**
     * Get the value of idProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set the value of idProduto
     */
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;

        return $this;
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
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco($preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}