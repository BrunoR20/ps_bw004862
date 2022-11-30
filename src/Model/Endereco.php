<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'enderecos')]
class Endereco extends DAO
{
    #[Campo(label: 'Cód. Endereco', pk: true, nn: true, auto: true)]
    protected $idEndereco;

    #[Campo(label: 'Cód. Cliente', nn: true)]
    protected $idCliente;

    #[Campo(label: 'CEP', nn: true)]
    protected $cep;

    #[Campo(label: 'Cidade', nn: true)]
    protected $cidade;

    #[Campo(label: 'Estado', nn: true)]
    protected $estado;

    #[Campo(label: 'Rua')]
    protected $rua;
    
    #[Campo(label: 'Bairro')]
    protected $bairro;

    #[Campo(label: 'Número')]
    protected $numero;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdEndereco()
    {
        return $this->idEndereco;
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

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua): self
    {
        $this->rua = $rua;

        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

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