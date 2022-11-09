<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'vendas')]
class Venda extends DAO
{
    #[Campo(label: 'Cód. Venda', pk: true, nn: true, auto: true)]
    protected $idVenda;

    #[Campo(label: 'Cód. Carrinho', pk: true, nn: true)]
    protected $idCarrinho;

    #[Campo(label: 'Forma GPTO da venda', nn: true)]
    protected $formaGpto;

    #[Campo(label: 'Status da venda', nn: true)]
    protected $status;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
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