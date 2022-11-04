<?php

namespace Petshop\Model;

//produtos_categorias
class ProdutoCategoria
{
    //Cód. Produto, pk, nn
    protected $idProduto;
    
    //Cód. Categoria, pk, nn
    protected $idCategoria;

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
     * Get the value of idCategoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     */
    public function setIdCategoria($idCategoria): self
    {
        $this->idCategoria = $idCategoria;

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