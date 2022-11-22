<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;
    
#[Entidade(name: 'categorias')]
class Categoria extends DAO
{
    #[Campo(label: 'Cód. Categoria', pk: true, nn: true, auto: true)]
    protected $idCategoria;

    #[Campo(label: 'Nome da categoria', nn: true, order: true)]
    protected $nome;

    #[Campo(label: 'Descrição da categoria')]
    protected $descricao;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

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