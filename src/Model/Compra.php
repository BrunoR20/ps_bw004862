<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'compras')]
class Compra extends DAO
{
    #[Campo(label: 'Cód. Compra', pk: true, nn: true, auto: true)]
    protected $idCompra;

    #[Campo(label: 'Cód. Fornecedor', nn: true)]
    protected $idFornecedor;

    #[Campo(label: 'Frete', nn: true)]
    protected $frete;

    #[Campo(label: 'Total', nn: true)]
    protected $total;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor): self
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    public function getFrete()
    {
        return $this->frete;
    }

    public function setFrete($frete): self
    {
        $this->frete = $frete;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total): self
    {
        $this->total = $total;

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
