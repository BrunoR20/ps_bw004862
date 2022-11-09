<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'carrinhos')]
class Carrinho extends DAO
{
    #[Campo(label: 'Cód. Carrinho', pk: true, nn: true, auto: true)]
    protected $idCarrinho;

    #[Campo(label: 'Cód. Cliente', nn: true)]
    protected $idCliente;

    #[Campo(label: 'Valor total do carrinho', nn: true)]
    protected $valorTotal;

    #[Campo(label: 'Estado de encerramento do carrinho')]
    protected $encerrado;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
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