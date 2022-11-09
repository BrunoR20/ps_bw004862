<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'produtos_compras')]
class ProdutoCompra extends DAO
{
    #[Campo(label: 'Cód. Produto', pk: true, nn: true)]
    protected $idProduto;
    
    #[Campo(label: 'Cód. Fornecedor', pk: true, nn: true)]
    protected $idFornecedor;

    #[Campo(label: 'Preço do produto', nn: true)]
    protected $preco;
    
    #[Campo(label: 'Quantidade do produto', nn: true)]
    protected $quantidade;

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
}