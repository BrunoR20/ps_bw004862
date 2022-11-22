<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'produtos')]
class Produto extends DAO
{
    #[Campo(label: 'Cód. Produto', pk: true, nn: true, auto: true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Marca', nn: true)]
    protected $idMarca;

    #[Campo(label: 'Nome do produto', nn: true, order: true)]
    protected $nome;

    #[Campo(label: 'Tipo do produto', nn: true)]
    protected $tipo;

    #[Campo(label: 'Preço do produto', nn: true)]
    protected $preco;

    #[Campo(label: 'Quantidade do produto', nn: true)]
    protected $quantidade;

    #[Campo(label: 'Largura do produto')]
    protected $largura;

    #[Campo(label: 'Altura do produto')]
    protected $altura;

    #[Campo(label: 'Profundidade do produto')]
    protected $profundidade;

    #[Campo(label: 'Peso do produto')]
    protected $peso;

    #[Campo(label: 'Descrição do produto')]
    protected $descricao;

    #[Campo(label: 'Especificações do produto')]
    protected $especificacoes;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function getIdMarca()
    {
        return $this->idMarca;
    }

    public function setIdMarca($idMarca): self
    {
        $this->idMarca = $idMarca;

        return $this;
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

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura($largura): self
    {
        $this->largura = $largura;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getProfundidade()
    {
        return $this->profundidade;
    }

    public function setProfundidade($profundidade): self
    {
        $this->profundidade = $profundidade;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;

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

    public function getEspecificacoes()
    {
        return $this->especificacoes;
    }

    public function setEspecificacoes($especificacoes): self
    {
        $this->especificacoes = $especificacoes;

        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_at;
    }

    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}