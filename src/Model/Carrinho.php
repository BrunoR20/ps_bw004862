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

    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal): self
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    public function getEncerrado()
    {
        return $this->encerrado;
    }

    public function setEncerrado($encerrado): self
    {
        $this->encerrado = $encerrado;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}