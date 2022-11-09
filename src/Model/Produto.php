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

    #[Campo(label: 'Nome do produto', nn: true)]
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

    /**
     * Get the value of idProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Get the value of idMarca
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set the value of idMarca
     */
    public function setIdMarca($idMarca): self
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

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

    /**
     * Get the value of largura
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set the value of largura
     */
    public function setLargura($largura): self
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of profundidade
     */
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    /**
     * Set the value of profundidade
     */
    public function setProfundidade($profundidade): self
    {
        $this->profundidade = $profundidade;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of especificacoes
     */
    public function getEspecificacoes()
    {
        return $this->especificacoes;
    }

    /**
     * Set the value of especificacoes
     */
    public function setEspecificacoes($especificacoes): self
    {
        $this->especificacoes = $especificacoes;

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