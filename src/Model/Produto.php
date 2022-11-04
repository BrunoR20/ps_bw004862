<?php

namespace Petshop\Model;

//produtos
class Produto
{
    //Cód. Produto, pk, nn, auto
    protected $idProduto;

    //Cód. Marca, nn
    protected $idMarca;

    //Nome do produto, nn
    protected $nome;

    //Tipo do produto, nn
    protected $tipo;

    //Preço do produto, nn
    protected $preco;

    //Quantidade do produto, nn
    protected $quantidade;

    //Largura do produto
    protected $largura;

    //Altura do produto
    protected $altura;

    //Profundidade do produto
    protected $profundidade;

    //Peso do produto
    protected $peso;

    //Descrição do produto
    protected $descricao;

    //Especificações do produto
    protected $especificacoes;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}