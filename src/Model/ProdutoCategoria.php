<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'produtos_categorias')]
class ProdutoCategoria extends DAO
{
    #[Campo(label: 'Cód. Produto', pk: true, nn: true)]
    protected $idProduto;
    
    #[Campo(label: 'Cód. Categoria', pk: true, nn: true)]
    protected $idCategoria;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
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
    public function getCreated_At()
    {
        return $this->created_at;
    }
}