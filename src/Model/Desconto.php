<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'descontos')]
class Desconto extends DAO
{
    #[Campo(label: 'Cód. Desconto', pk: true, nn: true, auto: true)]
    protected $idDesconto;

    #[Campo(label: 'Código')]
    protected $codigo;

    #[Campo(label: 'Data de início')]
    protected $dadaIni;

    #[Campo(label: 'Data de fim')]
    protected $dadaFim;

    #[Campo(label: 'Percentual')]
    protected $percentual;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdDesconto()
    {
        return $this->idDesconto;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getDadaIni()
    {
        return $this->dadaIni;
    }

    public function setDadaIni($dadaIni): self
    {
        $this->dadaIni = $dadaIni;

        return $this;
    }

    public function getDadaFim()
    {
        return $this->dadaFim;
    }

    public function setDadaFim($dadaFim): self
    {
        $this->dadaFim = $dadaFim;

        return $this;
    }

    public function getPercentual()
    {
        return $this->percentual;
    }

    public function setPercentual($percentual): self
    {
        $this->percentual = $percentual;

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